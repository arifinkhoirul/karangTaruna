        const container = document.querySelector('.logo-container');
        const logo = document.querySelector('.logo');

        // ? hitung lebar container & logo
        const containerWidth = container.offsetWidth;
        const logoWidth = logo.scrollWidth;

        // ? berapa kali perlu di-clone supaya nutup layar minimal 2x
        const repeatCount = Math.ceil(containerWidth / logoWidth) + 2;

        for (let i = 0; i < repeatCount; i++) {
            const clone = logo.cloneNode(true);
            container.appendChild(clone);
        }
