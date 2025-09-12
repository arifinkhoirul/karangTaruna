// ? hamburger
document.addEventListener("DOMContentLoaded", function () {
    const toggleOpen = document.getElementById("toggleOpen");
    const toggleClose = document.getElementById("toggleClose");
    const collapseMenu = document.getElementById("collapseMenu");
    const overlay = document.getElementById("overlay");

    function openMenu() {
        collapseMenu.classList.remove("-translate-x-full");
        collapseMenu.classList.add("translate-x-0");
        overlay.classList.remove("opacity-0", "pointer-events-none");
        overlay.classList.add("opacity-100");
        toggleClose.classList.remove("hidden");
    }

    function closeMenu() {
        collapseMenu.classList.add("-translate-x-full");
        collapseMenu.classList.remove("translate-x-0");
        overlay.classList.add("opacity-0", "pointer-events-none");
        overlay.classList.remove("opacity-100");
        toggleClose.classList.add("hidden");
    }

    if (toggleOpen) toggleOpen.addEventListener("click", openMenu);
    if (toggleClose) toggleClose.addEventListener("click", closeMenu);
    if (overlay) overlay.addEventListener("click", closeMenu);

    // 🔹 Auto close ketika resize >= 1024px (lg)
    window.addEventListener("resize", function () {
        if (window.innerWidth >= 1024) {
            closeMenu();
        }
    });
});

    // ? dropdown
    const pagesToggle = document.getElementById("pagesToggle");
    const pagesMenu = document.getElementById("pagesMenu");
    const pagesArrow = document.getElementById("pagesArrow");

    pagesToggle.addEventListener("click", (e) => {
    e.stopPropagation();
    const isOpen = pagesMenu.classList.contains("max-h-40");
    if (isOpen) {
    pagesMenu.classList.remove("max-h-40", "opacity-100");
    pagesMenu.classList.add("max-h-0", "opacity-0");
    pagesArrow.classList.remove("rotate-180");
    } else {
    pagesMenu.classList.remove("max-h-0", "opacity-0");
    pagesMenu.classList.add("max-h-40", "opacity-100");
    pagesArrow.classList.add("rotate-180");
    }
    });


    document.addEventListener("click", (e) => {
    if (!pagesMenu.contains(e.target) && !pagesToggle.contains(e.target)) {
    pagesMenu.classList.remove("max-h-40", "opacity-100");
    pagesMenu.classList.add("max-h-0", "opacity-0");
    pagesArrow.classList.remove("rotate-180");
    }
    });

    // ? menu profile yang sudah login
    const profileBtn = document.getElementById('profileBtn');
    const profileMenu = document.getElementById('profileMenu');

    profileBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    profileMenu.classList.toggle('hidden');
    });

    document.addEventListener('click', () => {
    profileMenu.classList.add('hidden');
    });
