document.addEventListener("click", load_assets_script);
document.addEventListener("scroll", load_assets_script);
document.addEventListener("resize", load_assets_script);
document.addEventListener("keydown", load_assets_script);
document.addEventListener("mousemove", load_assets_script);
document.addEventListener("touchmove", load_assets_script);
document.addEventListener("touchstart", load_assets_script);

document.addEventListener("click", load_assets_style);
document.addEventListener("scroll", load_assets_style);
document.addEventListener("resize", load_assets_style);
document.addEventListener("keydown", load_assets_style);
document.addEventListener("mousemove", load_assets_style);
document.addEventListener("touchmove", load_assets_style);
document.addEventListener("touchstart", load_assets_style);

function load_assets_script() {
    var script = document.querySelector('.assets-lazy-script');

    if (script) {
        var jquery = script.dataset.jquery;

        if (jquery && !window.jQuery) {
            var src = '';

            item = document.querySelector('[id*="jquery-js"]');
            src = item.dataset.src;
            item.setAttribute('src', src);
            item.removeAttribute('class');
            item.removeAttribute('data-src');
            item.removeAttribute('data-jquery');
        } else {
            var observers = document.querySelectorAll('.assets-lazy-script');

            if (observers.length) {
                destroyScript();

                observers.forEach(function (item) {
                    src = item.dataset.src;
                    item.setAttribute('src', src);
                    item.removeAttribute('class');
                    item.removeAttribute('data-src');
                    item.removeAttribute('data-jquery');
                });
            }
        }
    }
}

function load_assets_style() {
    var observers = document.querySelectorAll('.assets-lazy-style');
    if (observers.length) {
        observers.forEach(function(item) {
            var href = item.dataset.href;
            item.classList.remove('assets-lazy-style');
            item.setAttribute('href', href);
        });
    }
    destroyStyles();
}

function destroyScript() {
    document.removeEventListener("click", load_assets_script);
    document.removeEventListener("scroll", load_assets_script);
    document.removeEventListener("resize", load_assets_script);
    document.removeEventListener("keydown", load_assets_script);
    document.removeEventListener("mousemove", load_assets_script);
    document.removeEventListener("touchmove", load_assets_script);
    document.removeEventListener("touchstart", load_assets_script);
}

function destroyStyles() {
    document.removeEventListener("click", load_assets_style);
    document.removeEventListener("scroll", load_assets_style);
    document.removeEventListener("resize", load_assets_style);
    document.removeEventListener("keydown", load_assets_style);
    document.removeEventListener("mousemove", load_assets_style);
    document.removeEventListener("touchmove", load_assets_style);
    document.removeEventListener("touchstart", load_assets_style);
}