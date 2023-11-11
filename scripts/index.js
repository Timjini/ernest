console.log("initiliazed")
// THEME

// document.addEventListener("DOMContentLoaded", function() {
//     const toggleThemeBtn = document.querySelector("#toggleThemeBtn");
//     const themeTextSpan = document.querySelector(".material-symbols-outlined");

//     // Function to set theme and save it to a cookie
//     function setTheme(theme) {
//         document.documentElement.setAttribute('data-theme', theme);
//         document.cookie = `theme=${theme}; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/`;
//         // Update the span content based on the theme
//         themeTextSpan.textContent = theme === 'dark' ? 'dark_mode' : 'light_mode';
//     }

//     // Check if a theme preference exists in cookies
//     const savedTheme = document.cookie.split('; ').find(row => row.startsWith('theme='));
//     if (savedTheme) {
//         const theme = savedTheme.split('=')[1];
//         setTheme(theme);
//         console.log(theme);
//     }

//     // Toggle theme on button click and save the preference to a cookie
//     toggleThemeBtn.addEventListener('click', function(event) {
//         const currentTheme = document.documentElement.getAttribute("data-theme");
//         const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
//         setTheme(newTheme);
//         console.log(newTheme);
//     });
// });

// SLIDER 

document.addEventListener("DOMContentLoaded", function() {
    var swiper = new Swiper('.main-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.button-next',
            prevEl: '.button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});


// Get the burger and close elements


function showNav() {
    const burger = document.getElementById('burger');
    const navMenu = document.getElementById('navbar-sticky');

    burger.addEventListener('click', function() {
        navMenu.classList.toggle('hidden'); // Toggle the 'hidden' class
    });
}

document.addEventListener('DOMContentLoaded', function() {
    showNav(); // Call the function once the DOM is ready
});




