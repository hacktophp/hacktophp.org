<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('vendor/autoload.php');

if (!isset($_POST['code'])) {
    exit;
}

$file_contents = $_POST['code'];

$tmpfname = tempnam("/tmp", "hacktest");

$handle = fopen($tmpfname, "w");
fwrite($handle, $file_contents);
fclose($handle);

try {
    $ast = Facebook\HHAST\from_file($tmpfname);
} catch (Throwable $t) {
    echo json_encode(['error' => $t->getMessage()]);
    exit();
} finally {
    unlink($tmpfname);
}

try {
    $project = new HackToPhp\Transform\Project();

    HackToPhp\Transform\TypeCollector::collect(
        $ast,
        $project,
        new HackToPhp\Transform\HackFile(),
        new HackToPhp\Transform\Scope()
    );

    $stmts = HackToPhp\Transform\NodeTransformer::transform(
        $ast,
        $project,
        new HackToPhp\Transform\HackFile(),
        new HackToPhp\Transform\Scope()
    );

    $prettyPrinter = new \PhpParser\PrettyPrinter\Standard;
    echo json_encode(['code' => '<?php' . PHP_EOL . $prettyPrinter->prettyPrint($stmts) . PHP_EOL]);
} catch (Throwable $t) {
    echo json_encode(['error' => $t->getMessage()]);
}
