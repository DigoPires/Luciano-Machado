// const menuItems = document.querySelectorAll('.menu a[href^="#"]');


// console.log(menuItems);

// menuItems.forEach(item => {
//     item.addEventListener("click", scrollToIdOnClick);
// });

// function scrollToIdOnClick(event) {
//     event.preventDefault();
//     const element = event.target;
//     const id = element.getAttribute('href');
//     const to = document.querySelector(id).offsetTop;

//     const navBar = document.querySelector('.nav-bar');
//     const activeClass = 'active';

//     if(navBar.classList.contains(activeClass)) {
//         navBar.classList.remove('active');
//     }

//     window.scroll({
//         top: to - 200,
//         behavior: "smooth",
//     });
// }