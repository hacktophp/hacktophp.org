<script>
var expandCode = function() {
    document.querySelector('body').classList.add('code_expanded');
    return false;
};

var shrinkCode = function() {
    document.querySelector('body').classList.remove('code_expanded');
    return false;
};

var getLink = function() {
    fetch('/add_code.php', {
        method: 'POST',
        headers: {
            'Accept': 'application/json, application/xml, text/plain, text/html, *.*',
            'Content-Type': 'application/x-www-form-urlencoded; charset=utf-8'
        },
        body: serializeJSON({code: editor.getValue()})
    })
    .then(function (response) {
        return response.text();
    })
    .then(function (response) {
        if (response.indexOf('/r/') === -1) {
            alert(response);
        } else {
            window.location = '//' + response;
        }
    });
    return false;
};

var serializeJSON = function(data) {
    return Object.keys(data).map(function (keyName) {
        return encodeURIComponent(keyName) + '=' + encodeURIComponent(data[keyName])
    }).join('&');
}

var latestFetch = 0;

var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
    lineNumbers: true,
    matchBrackets: true,
    mode: "text/x-php",
    indentUnit: 2,
    theme: 'elegant',
    lint: {
        getAnnotations: function (code, callback, options, cm) {
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
                    var hacktophp_version = response.version;
                    
                    if (hacktophp_version.indexOf('@')) {
                        hacktophp_version = hacktophp_version.split('@')[1];
                    }

                    var hacktophp_header = 'PHP output: \n\n'

                    document.getElementById('hacktophp_output').innerText = hacktophp_header + response.code;

                    callback([]); 
                }
                else if ('error' in response) {
                    var hacktophp_header = 'Error output: \n\n'

                    document.getElementById('hacktophp_output').innerText = hacktophp_header + response.error;

                    callback([]);
                }
            })
            .catch (function (error) {
                console.log('Request failed', error);
            });
        },
        async: true,
    }
});

//editor.focus();
editor.setCursor(editor.lineCount(), 0);

</script>
