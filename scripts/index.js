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
// ========================================================================================= END

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
const burger = document.getElementById('burger');
const close = document.getElementById('close');

// Get the navbar element
const navbar = document.querySelector('.mobileNav');

// Function to show the navbar
function showNavbar(event) {
    // Remove the class hidden from the navbar element
    navbar.classList.remove('hidden');

    // Stop the click event from propagating to the document
    event.stopPropagation();
}

// Function to hide the navbar
function hideNavbar() {
    // Add the class hidden to the navbar element
    navbar.classList.add('hidden');
}

// Add click event listener to the burger element to show the navbar
burger.addEventListener('click', showNavbar);

// Add click event listener to the close button to hide the navbar
close.addEventListener('click', function(event) {
    hideNavbar();

    // Stop the click event from propagating to the document
    event.stopPropagation();
});

// Add click event listener to the document to hide the navbar when clicking outside
document.addEventListener('click', hideNavbar);




// Get the navbar element
const navigation = document.getElementById('navbar');
const twentyFivePrecentHeight = 0.25 * document.body.scrollHeight;

// Add scroll event listener to the window
window.addEventListener('scroll', function() {

  if (window.scrollY > twentyFivePrecentHeight){    
    navigation.classList.add('hidden');
  } else {
    navigation.classList.remove('hidden');
  };

  if (window.scrollY > 0) {
    navigation.classList.add('navigation-scroll');
  } else {
    navigation.classList.remove('navigation-scroll');
  }
});