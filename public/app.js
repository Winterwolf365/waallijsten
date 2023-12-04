
tailwind.config = {
    theme: {
        extend: {
            colors: {
                'gray': '#666666',
                'dark-red': '#a41c10',
                'red': '#e62413',
            },
            fontSize: {
                "2.5xl": ['1.6875rem', '2.125rem'],
            },
            screens: {
                '3xl': '1840px',
            },
        },
    }
}

function toggleMenu() {
    let menu = document.querySelector("#menu");
    let button = document.querySelector("#button");
    let nav = document.querySelector("#nav");

    if (menu.classList.contains("hidden")) {
        menu.classList.remove("hidden");
        button.innerHTML = "↟ Links ↟";
        nav.classList.remove("md:mb-28");
        nav.classList.remove("mb-12");
    } else {
        menu.classList.add("hidden");
        button.innerHTML = "↡ Links ↡";
        nav.classList.add("md:mb-28");
        nav.classList.add("mb-12");
    }
}
