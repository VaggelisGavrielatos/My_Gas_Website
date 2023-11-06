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

//It allows you to switch between different tabs by hiding and showing the corresponding content.
function openTab(evt, tabName) {
  // Declare all variables
  var i, tabcontent, tablinks; //i (used in loops), tabcontent (elements with class "tabcontent"), and tablinks (elements with class "tablinks").

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();