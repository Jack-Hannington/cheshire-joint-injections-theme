// jQuery(document).ready(function($) {
//     $(window).scroll(function() {
//         var scrollTop = $(this).scrollTop();
//         if (scrollTop < 50) {
//             $('.navbar').css('background-color', 'rgba(69, 73, 80, 1)');
//         } else {
//             $('.navbar').css('background-color', 'rgba(69, 73, 80, 0.7)');
//         }
//     });
// });

// Toggle menu

const menu = document.querySelector(".menu-container");


//Check is admin bar is shown - if it then add additional class to container-fluid so it doesn't overlap
document.addEventListener("DOMContentLoaded", function(event) {
  if (document.querySelector("#wpadminbar")) {
  console.log('admin bar is shown');
  document.querySelector('nav').classList.add('admin-margin');
  document.querySelector('.menu-container').classList.add('admin-margin');
}});


document.querySelector("#showMenu").addEventListener("click", () => {
  document.body.style.overflowY = "hidden"; //Prevent scrolling when animating
  menu.classList.remove("show", "animate__slideOutRight");
  menu.classList.add("show", "animate__slideInRight", "animate__animated");
});

document.querySelector("#closeMenu").addEventListener("click", () => {
  menu.classList.add("animate__slideOutRight");
  setTimeout(function () {
    document.body.style.overflowY = "auto";
    menu.classList.remove("show");
  }, 500);
});

const mediaQueryList = window.matchMedia('(min-width: 1000px)');
const checkViewportWidth = () => {
    if (mediaQueryList.matches) {
        // If viewport is 1000px or wider, remove the class
        menu.classList.remove('animate__slideOutRight');
        menu.classList.remove('admin-margin');
    } else {
        // If viewport is less than 1000px wide, add the class
        menu.classList.add('animate__slideOutRight');
    }
};

// Call the function once at script load time
checkViewportWidth();

// Then set it up to be called every time the viewport width changes
mediaQueryList.addEventListener('change', checkViewportWidth);


// Show navbar on scroll-up
// var lastScrollTop = 0;
// var navbar = document.querySelector(".navbar");
// window.addEventListener("scroll", function() {
//     var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
//     if (scrollTop > lastScrollTop && scrollTop > 0) {
//         // Downscroll and not at the top of the page, hide navbar
//         navbar.style.top = "-76px"; // Adjust this value to match the height of the navbar
//     } else {
//         // Upscroll or at the top of the page, show navbar
//         navbar.style.top = "46px";
//     }
//     lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For negative scrolling
// });



  
  
document.addEventListener("DOMContentLoaded", function() {
  // Get all menu items that have children
  var menuItems = document.querySelectorAll('.menu-item-has-children');

  // Add click event to each of them
  menuItems.forEach(function(menuItem) {
      menuItem.addEventListener('click', function(event) {
          // Prevent the page from navigating to the link on click
          event.preventDefault();

          // Get the sub-menu of the clicked menu item
          var subMenu = this.querySelector('.sub-menu');

          // Toggle the class for the sub-menu
          subMenu.classList.toggle('visible');
          subMenu.classList.toggle('animate__fadeInDown');
      });
  });
});
