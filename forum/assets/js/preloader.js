// preloader-START
document.body.onload = function() {
    setTimeout(function() {
        let preloader = document.querySelector('.preload-wrapper');
        document.documentElement.style = ("overflow-y", "scroll");
        if (!preloader.classList.contains('done')) {
            preloader.classList.add('done');
        }
    }, 1000)
};
// preloader-END