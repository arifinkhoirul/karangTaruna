    // ? hamburger
    var toggleOpen = document.getElementById('toggleOpen');
        var toggleClose = document.getElementById('toggleClose');
        var collapseMenu = document.getElementById('collapseMenu');

        function handleClick() {
            if (collapseMenu.style.display === 'block') {
                collapseMenu.style.display = 'none';
            } else {
                collapseMenu.style.display = 'block';
            }
        }

        toggleOpen.addEventListener('click', handleClick);
        toggleClose.addEventListener('click', handleClick);

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