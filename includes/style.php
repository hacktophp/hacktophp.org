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
    font-size: 24px;
    font-weight: normal;
    text-align: left;
    margin: 40px 20px 20px;
}

a {
    color: #000;
}

h2 {
    padding: 20px 20px 0;
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
    margin: 20px 40px;
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
    margin: 1em 0 0 0;
    z-index: 2;
    font-size: 14px;
    height: 360px;
    overflow: hidden;
    transition: 0.2s linear box-shadow;
    position: relative;
}

#hack_container {
    box-shadow: 0 3px 0px 0 rgba(233, 193, 121, 0.35) inset;
}

#php_container {
    box-shadow: 0 3px 0px 0 rgba(137, 152, 227, 0.2) inset;
}

#hack_container div.CodeMirror {
    box-shadow: 0 0 0px 3px rgba(233, 193, 121, 0.5);
}

#php_container div.CodeMirror {
    box-shadow: 0 0 0px 3px rgba(137, 152, 227, 0.4);
}

@media all and (min-device-width: 600px) {
    #hack_container div.CodeMirror.CodeMirror-focused {
        box-shadow: 0 0 0px 3px rgba(233, 193, 121, 1);
    }

    #php_container div.CodeMirror.CodeMirror-focused {
        box-shadow: 0 0 0px 3px rgba(137, 152, 227, 0.8);
    }

    div.CodeMirror:not(.CodeMirror-focused):hover {
        
    }
    div.CodeMirror-lint-tooltip {
        padding: 4px 6px;
    }
}

@media all and (max-width: 960px) {
    #transpiler {
        margin: 0;
    }

    .intro, .faq {
        float: none;
        padding: 0 20px 30px;
        max-width: 500px;
        width: auto;
    }

    #hack_container, #php_container {
        width: 100%;
        float: none;
    }
}

footer {
    text-align: center;
    padding: 10px 0 30px;
}

footer svg {
    width: 200px;
    height: 66px;
}

</style>