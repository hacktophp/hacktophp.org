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
    max-width: 960px;
    margin: 0 auto;
    flex: 1;
}

h1 {
    text-align: center;
    margin: 20px 0;
    font-size: 64px;
}

h1 svg {
    width: 200px;
    height: 66px;
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
    box-sizing: border-box;
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
    color: #875a0d;
    background: #f8ebd4;
}

#php_container {
    color: #4053ac;
    background: #d9def6;
}

select {
    border: 1px solid #795820;
    font-family: "Operator A", "Operator B";
    font-size: 16px;
    background: #FFF;
    margin-left: 1em;
}

div.CodeMirror,
div.CodeMirror-lint-tooltip,
code {
    font-family: "Operator Mono SSm A", "Operator Mono SSm B";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5em;
}

code {
    font-size: 90%;
}

div.CodeMirror {
    box-shadow: 0 0 0px 3px rgba(0, 0, 0, 0.1);
    margin: 1em 0 0 0;
}

div.CodeMirror {
    z-index: 2;
    font-size: 14px;
    height: 360px;
    overflow: hidden;
    transition: 0.2s linear box-shadow;
    position: relative;
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