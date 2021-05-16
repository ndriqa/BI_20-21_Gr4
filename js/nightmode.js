const DARK_MODE = 'dark';
const LIGHT_MODE = 'light';
const DEFAULT_MODE = LIGHT_MODE;

const btn = document.querySelector('#theme-switcher');

init();

function init() {
    let storedMode = ""+getCookie("night");
    if (storedMode) {
        storedMode = DEFAULT_MODE;
        setCookie("night", "false")
    } else {
        storedMode = DARK_MODE
        setCookie("night", "true");
    }
    setMode(storedMode);
}

function setMode(mode = DEFAULT_MODE) {
    if (mode === DARK_MODE) {
        let bg = document.getElementsByClassName('nm-bg');
        Array.from(bg).forEach(element => {
            element.classList.add("dark-bg")
        });
    } else if (mode === LIGHT_MODE) {
        let bg = document.getElementsByClassName('nm-bg');
        Array.from(bg).forEach(element => {
            element.classList.remove("dark-bg")
        });
    }
}

btn.addEventListener('click', function () {
    let mode = getCookie("night");
    if (mode) {
        setMode(LIGHT_MODE);
        setCookie("night", "false");
    } else {
        setMode(DARK_MODE);
        setCookie("night", "true");
    }
});

function updateBackground() {
    let nightC = getCookie("night")
    if (nightC){
        setMode(DARK_MODE);
    } else {
        setMode(LIGHT_MODE);
    }
}
function setCookie(cname, cvalue) {
    document.cookie = cname + "=" + cvalue + ";" +"path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

setInterval(updateBackground, 1000 * 60);
updateBackground();
