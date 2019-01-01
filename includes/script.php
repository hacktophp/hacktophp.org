<script>
var serializeJSON = function(data) {
    return Object.keys(data).map(function (keyName) {
        return encodeURIComponent(keyName) + '=' + encodeURIComponent(data[keyName])
    }).join('&');
}

var latestFetch = 0;

var editor = CodeMirror.fromTextArea(document.getElementById("hack_code"), {
    lineNumbers: true,
    matchBrackets: true,
    mode: "text/x-php",
    indentUnit: 2,
    theme: 'elegant'
});

var results = CodeMirror.fromTextArea(document.getElementById("php_code"), {
    lineNumbers: true,
    matchBrackets: true,
    mode: "text/x-php",
    indentUnit: 4,
    theme: 'elegant',
    readOnly: true
});

editor.on(
    'change',
    function () {
        var code = editor.getDoc().getValue();
        latestFetch++;
        fetchKey = latestFetch;
        fetch('/convert.php', {
            method: 'POST',
            headers: {
                'Accept': 'application/json, application/xml, text/plain, text/html, *.*',
                'Content-Type': 'application/x-www-form-urlencoded; charset=utf-8'
            },
            body: serializeJSON({code: code})
        })
        .then(function (response) {
            return response.json();
        })
        .then(function (response) {
            if (latestFetch != fetchKey) {
                return;
            }

            if ('code' in response) {
                results.getDoc().setValue(response.code);
            }
            else if ('error' in response) {
                var hacktophp_header = 'Error output: \n\n'

                results.getDoc().setValue(hacktophp_header + response.error);
            }
        })
        .catch (function (error) {
            console.log('Request failed', error);
        });
    }
);

//editor.focus();
editor.setCursor(editor.lineCount(), 0);

</script>
