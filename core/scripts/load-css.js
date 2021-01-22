var cssLoader = (function () {
    var callbackFn;
    var urlCount = 0
    var cssCount = 0;

    var head = document.getElementsByTagName('head')[0];

    function loadCssLinks (linkUrls, callback) {
        urlCount = linkUrls.length;
        callbackFn = callback;
        linkUrls.forEach(function (url) {
            var link = document.createElement('link');
            link.type = 'text/css';
            link.rel = 'stylesheet'
            link.href = url;
            head.appendChild(link);

            if (link.addEventListener) {
                link.addEventListener('load', function() {
                    cssDone('addEventListener');
                }, false);
            } else {
                link.onload = function () {
                    cssDone('onload');
                }
            }
            // #3
            link.onreadystatechange = function() {
                var state = link.readyState;
                if (state === 'loaded' || state === 'complete') {
                    link.onreadystatechange = null;
                    cssDone('onreadystatechange');
                }
            };
        });
    }

    function cssDone (msg) {
        cssCount++;
        if (cssCount === urlCount) {
            callbackFn();
        }
    }

    return {
        loadCssLinks: loadCssLinks
    }

})()
