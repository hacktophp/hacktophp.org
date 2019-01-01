<?php require ('codemirror.php'); ?>
<style>
body {
    font-family: "Operator A", "Operator B";
    line-height: 1.5em;
    margin: 0;
    padding: 0;
    font-size: 16px;
    min-height: 100%;
    display: flex;
    flex-direction: column;
}
.container {
    max-width: 1024px;
    margin: 0 auto;
    flex: 1;
}

h1 {
    width: 300px;
    margin: 10px 0;
    font-size: 64px;
}

a {
    color: #000;
}

h2 {
    padding: 20px;
}

.intro, .faq {
    width: 50%;
    padding: 0 20px 50px;
    float: left;
}

.intro p {
    hyphens: auto;
    margin: 1em 0;
}

#transpiler {
    overflow: hidden;
}

#hack_container, #php_container {
    width: 50%;
    float: left;
    box-sizing: border-box;
    padding: 20px;
}

#hack_container {
    background: #f8ebd4;
}

#php_container {
    background: #d9def6;
}

div.CodeMirror,
div.CodeMirror-lint-tooltip,
#php_code,
code {
    font-family: "Operator Mono SSm A", "Operator Mono SSm B";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5em;
}

div.CodeMirror,
#php_code {
    box-shadow: 0 0 0px 3px rgba(0, 0, 0, 0.1);
    margin: 1em 0 0 0;
}

#php_code {
    font-family: "Operator Mono SSm A", "Operator Mono SSm B";
    font-size: 14px;
    line-height: 1.5em;
    padding: 5px;
    color: #666;
}
div.CodeMirror {
    z-index: 2;
    font-size: 14px;
    height: 360px;
    overflow: hidden;
    transition: 0.2s linear box-shadow;
    position: relative;
}

#php_code {
    display: block;
    margin: 0;
}

@media all and (min-device-width: 600px) {
    div.CodeMirror.CodeMirror-focused {
        box-shadow: 0 0 0px 3px rgba(0, 0, 0, 0.3)
    }

    div.CodeMirror:not(.CodeMirror-focused):hover {
        
    }
    div.CodeMirror-lint-tooltip {
        padding: 4px 6px;
    }
}

@media all and (max-width: 1021px) {
    .intro {
        float: none;
        padding: 0 25px 50px;
        max-width: 492px;
        width: auto;
    }
}

</style>