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

.code_expanded nav h2, 
.code_expanded nav ul {
    display: none;
}

.code_expanded nav hgroup {
    margin: 15px 0 10px;
}

.code_expanded nav h1 a svg {
    height: 25px;
    width: auto;
}

.intro {
    max-width: 492px;
    padding: 0 20px 50px;
    float: left;
}

.code_expanded .intro {
    display: none;
}

.intro p,
.documentation p,
.intro ul,
.documentation ul {
    hyphens: auto;
    margin: 1em 0;
}

.intro ul,
.documentation ul {
    margin-left: 0;
    -webkit-padding-start: 20px;
    padding-inline-start: 20px;
}

.intro h3 {
    font-weight: normal;
    font-size: 24px;
    margin: 1.5em 0 0.8em;
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
    border: 2px solid black;
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
    transition: 0.2s linear border-color, 0.2s linear box-shadow;
    position: relative;
}

#php_code {
    display: block;
    margin: 0;
}

@media all and (min-device-width: 600px) {
    div.CodeMirror.CodeMirror-focused {
        box-shadow: 0 0 0px 1px #000;
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