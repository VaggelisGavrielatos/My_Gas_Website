// Hamburger nav bar
const navEl = document.querySelector(".nav"); //selects the navigation element with the class "nav" and assigns it to the navEl variable.
const hamburgerEl = document.querySelector(".hamburger"); //selects the hamburger icon element with the class "hamburger" and assigns it to the hamburgerEl variable.

hamburgerEl.addEventListener("click", () => { //adds a click event listener to the hamburger icon. When clicked, it executes the callback function.
  navEl.classList.toggle("nav-open"); //toggles the "nav-open" class on the navigation element (navEl). This class is used to control the visibility of the navigation menu.
  hamburgerEl.classList.toggle("hamburger-open"); //toggles the "hamburger-open" class on the hamburger icon element (hamburgerEl). This class is used to change the appearance of the hamburger icon when the navigation menu is open or closed.
});

navEl.addEventListener("click", () => { //adds a click event listener to the navigation element. When clicked, it executes the callback function.
  navEl.classList.remove("nav-open"); // removes the "nav-open" class from the navigation element, ensuring that the navigation menu is closed.
  hamburgerEl.classList.remove("hamburger-open"); //removes the "hamburger-open" class from the hamburger icon element, reverting its appearance to the closed state.
});

//This code enables the hamburger icon to toggle the visibility of the navigation menu when clicked. When the navigation menu is open, the "nav-open" class is added to the navigation element,
// and the "hamburger-open" class is added to the hamburger icon element. When the navigation menu is closed, these classes are removed. μBy attaching event listeners to both the hamburger icon
// and the navigation element, clicking anywhere on the navigation menu will close it. This ensures that clicking outside the hamburger icon or the navigation menu area will close the menu.
