var stickyHeader = (function () {

    function init(back, next, home, start) {
        document.onkeydown = function(e) {

            e = e || window.event;
            var isShift = !!e.shiftKey


            switch(e.which) {
                case 37: // left
                    if (isShift) {
                        window.location.assign(back);
                    }
                    break;

                case 38: // up
                    if (isShift) {
                        window.location.assign(home);
                    }
                    break;

                case 39: // right
                    if (isShift) {
                        window.location.assign(next);
                    }
                    break;

                case 40: // down
                    if (isShift) {
                        window.location.assign(start);
                    }
                    break;

                default: return; // exit this handler for other keys
            }
            e.preventDefault();
        }
    }

    return {init: init};
})()
