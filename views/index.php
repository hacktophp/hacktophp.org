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
        >&lt;<?='?'?>php
  
function foo(string $s) : void {
    return "bar";
}

$a = ["hello", 5];
foo($a[1]);
foo();

if (rand(0, 1)) $b = 5;
echo $b;

$c = rand(0, 5);
if ($c) {} elseif ($c) {}
</textarea>
        <div id="psalm_output"></div>
        <div class="button_bar">
            <button onclick="javascript:expandCode();" id="expander"><svg width="15" height="14" xmlns="http://www.w3.org/2000/svg"><path d="M0 5h1.5v6.4L12.9 0l1.4 1.2L2.8 12.5H9V14H0z" fill-rule="evenodd"/></svg> Expand</button>
            <button onclick="javascript:shrinkCode();" id="shrinker"><svg width="15" height="14" xmlns="http://www.w3.org/2000/svg"><path d="M15 9h-1.5V2.6L2.1 14 .8 12.8 12.2 1.5H6V0h9z" fill-rule="evenodd"/></svg> Shrink</button>
            <button onclick="javascript:getLink();"><svg width="28" height="15" xmlns="http://www.w3.org/2000/svg"><g fill-rule="evenodd"><path d="M17.3 2.5A5 5 0 0 0 13 0H5a5 5 0 0 0-5 5v1a5 5 0 0 0 5 5h8a5 5 0 0 0 4.8-3.5H16a4 4 0 0 1-3.5 2h-7a4 4 0 1 1 0-8h7c1 0 2 .4 2.6 1h2.2z"/><path d="M10.4 12.5a5 5 0 0 0 4.4 2.5h8a5 5 0 0 0 5-5V9a5 5 0 0 0-5-5h-8A5 5 0 0 0 10 7.5h1.8a4 4 0 0 1 3.5-2h7a4 4 0 1 1 0 8h-7c-1 0-2-.4-2.7-1h-2.2z"/></g></svg> Get link</button>
        </div>
    </div>
    

    <div class="intro">
        
    </div>
</div>

<?php require('../includes/footer.php'); ?>
<?php require('../includes/script.php'); ?>
</body>
</html>
