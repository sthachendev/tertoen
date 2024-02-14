// public/js/loading.js

document.onreadystatechange = function () {
    if (document.readyState === "complete") {
        // When the page is fully loaded, hide the loading indicator
        document.getElementById('loading').style.display = 'none';
    }
};
