<?php
$example_code = [
'pipes_and_lambdas' => '<?hh

function piped_example(array<int> $arr, int $y): int {
  return $arr
    |> \array_map($x ==> $x * $x, $$)
    |> \array_filter($$, $x ==> $x % $y == 0)
    |> \count($$);
}',
'type_support' => '<?hh

function partition<Tv>(
  Traversable<Tv> $traversable,
  (function(Tv): bool) $predicate,
): (vec<Tv>, vec<Tv>) {
  $success = vec[];
  $failure = vec[];
  foreach ($traversable as $value) {
    if ($predicate($value)) {
      $success[] = $value;
    } else {
      $failure[] = $value;
    }
  }
  return tuple($success, $failure);
}',
];
?>
<html>
<head>
<title>Hack to PHP</title>
<script src="/assets/js/fetch.js"></script>
<script src="/assets/js/codemirror.js"></script>
<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/751592/6095012/css/fonts.css" />
<?php require('../includes/style.php') ?>
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
</head>
<body>

<?php require('../includes/nav.php'); ?>
<div id="transpiler">
    <div id="hack_container">
        <label for="hack_code">Hack input</label>
        <select name="hack_examples">
            <option value="pipes_and_lambdas">Pipes &amp; Lambdas</option>
            <option value="type_support">Types</option>
        </select>
        <textarea
            name="hack_code"
            id="hack_code"
            rows="20" style="visibility: hidden; font-family: monospace; font-size: 14px; max-width: 900px; min-width: 320px;"
        ><?= $code['pipes_and_lambdas'] ?></textarea>
    </div>
    <div id="php_container">
        <label for="php_code">PHP output</label>
        <pre id="php_code"></pre>
    </div>
</div>

<div class="container">
    <h2>
        A <a href="https://hacklang.org">Hack</a> to <a href="https://php.net">PHP</a> transpiler, written in PHP
    </h2>

    <div class="intro">
        <p>This project uses HHVM's builtin parser (<code>hh_parse</code>) and <a href="https://github.com/hhvm/hhast">an existing library</a> to turn Hack code into PHP code. It generates <a href="https://github.com/nikic/php-parser">PHP-Parser</a>-equivalent nodes for the original Hack AST, then prints the result.</p>
        <p>It aims to preserve all of Hack’s types so that the resultant PHP code can be checked by a tool like <a href="https://github.com/vimeo/psalm">Psalm</a>, converting any asynchronous code to its synchronous equivalent.</p>
    </div>
    <div class="faq">
        <p><strong>Who made this?</strong><br />
        <a href="https://github.com/muglug">I did</a>.</p>

        <p><strong>Why?</strong><br />
        Because it didn’t exist (though it has <a href="https://github.com/phplang/phack">an antecedent</a>).</p>

        <p><strong>Is it production-ready?</strong><br />
        Hack no.</p>

        <p><strong>Who uses it?</strong>
        Nobody.</p>
    </div>
</div>

<?php require('../includes/footer.php'); ?>
<?php require('../includes/script.php'); ?>
</body>
</html>
