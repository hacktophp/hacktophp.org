<html>
<head>
<title>Hack to PHP</title>
<script src="/assets/js/fetch.js"></script>
<script src="/assets/js/codemirror.js"></script>
<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/751592/7707372/css/fonts.css" />
<link rel="stylesheet" href="/assets/css/site.css">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
</head>
<body>
<div class="container" id="page_container">
    <?php require('../includes/nav.php'); ?>
    <div class="cm_container">
        <textarea
            name="code"
            id="code"
            rows="20" style="visibility: hidden; font-family: monospace; font-size: 14px; max-width: 900px; min-width: 320px;"
        >&lt;<?='?'?>hh

function piped_example(array<int> $arr, int $y): int {
  return $arr
    |> \array_map($x ==> $x * $x, $$)
    |> \array_filter($$, $x ==> $x % $y == 0)
    |> \count($$);
}
</textarea>
        <pre id="hacktophp_output"></pre>
        <div class="button_bar">
            <button onclick="javascript:expandCode();" id="expander"><svg width="15" height="14" xmlns="http://www.w3.org/2000/svg"><path d="M0 5h1.5v6.4L12.9 0l1.4 1.2L2.8 12.5H9V14H0z" fill-rule="evenodd"/></svg> Expand</button>
            <button onclick="javascript:shrinkCode();" id="shrinker"><svg width="15" height="14" xmlns="http://www.w3.org/2000/svg"><path d="M15 9h-1.5V2.6L2.1 14 .8 12.8 12.2 1.5H6V0h9z" fill-rule="evenodd"/></svg> Shrink</button>
        </div>
    </div>
    

    <div class="intro">
        
    </div>
</div>

<?php require('../includes/footer.php'); ?>
<?php require('../includes/script.php'); ?>
</body>
</html>
