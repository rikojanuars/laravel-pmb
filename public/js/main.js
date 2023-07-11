(function () {
    const select = (el, all = false) => {
        el = el.trim();
        if (all) {
            return [...document.querySelectorAll(el)];
        } else {
            return document.querySelector(el);
        }
    };

    const mobileNavToggle = select(".mobile-nav-toggle");
    const navbar = select("#navbar");

    if (mobileNavToggle && navbar) {
        mobileNavToggle.addEventListener("click", function (e) {
            navbar.classList.toggle("navbar-mobile");
            this.classList.toggle("bi-list");
            this.classList.toggle("bi-x");
        });
    }

    let preloader = select("#preloader");
    if (preloader) {
        window.addEventListener("load", () => {
            preloader.remove();
        });
    }
})();
