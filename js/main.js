window.addEventListener("load", function () {

    const preloader = document.getElementById("aoc-preloader");

    if (preloader) {

        setTimeout(function () {
            preloader.classList.add("aoc-preloader-hide");
        }, 1200);

    }

});
