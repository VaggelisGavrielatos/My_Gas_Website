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


function calculateGasCost(kWh, squareMeters, Days) {
  // These arrays represent different charge categories with corresponding minimum and maximum values and charge rates.
  const energyCharges = [
    { min: 0, max: 1600, charge: 0.00623 },
    { min: 1601, max: 2000, charge: 0.00768 },
    { min: 2001, max: Infinity, charge: 0.00915 }
  ];

  const YKOCharges = [
    { min: 0, max: 1600, charge: 0.01315 },
    { min: 1601, max: 2000, charge: 0.01480 },
    { min: 2001, max: Infinity, charge: 0.01625 }
  ];

  const municipalCharges = [
    { min: 0, max: 50, charge: 0.12 },
    { min: 51, max: 90, charge: 0.20 },
    { min: 91, max: Infinity, charge: 0.31 }
  ];

  // It uses the getCharge function to determine the appropriate charge rate based on the provided value 
  const municipalCost = squareMeters * getCharge(municipalCharges, squareMeters) * (Days / 365);
  console.log("🚀 ~ file: cost.js:38 ~ calculateGasCost ~ municipalCost:", municipalCost) 
  const utilityCost = kWh * getCharge(YKOCharges, kWh) * (Days / 365);
  console.log("🚀 ~ file: cost.js:40 ~ calculateGasCost ~ utilityCost:", utilityCost)
  const energyCost = kWh * getCharge(energyCharges, kWh);
  console.log("🚀 ~ file: cost.js:42 ~ calculateGasCost ~ energyCost:", energyCost)
  
  // calculates the total cost by summing up the individual costs.
  const totalCost = municipalCost + utilityCost + energyCost;
  console.log("🚀 ~ file: cost.js:46 ~ calculateGasCost ~ totalCost:", totalCost)

  if (municipalCost > 0 && utilityCost > 0 && energyCost > 0 && totalCost > 0) {
    return totalCost.toFixed(2);
    // If all the costs are greater than zero, it returns the total cost rounded to two decimal places using toFixed(2).
  }
  else{
    const totalCost = 0;
    return totalCost.toFixed(2);
    // Otherwise, if any of the costs is zero or negative, it returns zero as the total cost.
  }
}

function getCharge(chargeTable, value) { // helper function that takes a charge table and a value. 
  for (const chargeEntry of chargeTable) {
    if (value >= chargeEntry.min && value <= chargeEntry.max) { //checks if the value falls within the specified range 
      return chargeEntry.charge; //If a matching range is found, it returns the corresponding charge rate. 
    }
  }
  return 0; // If no matching range is found, it returns 0.
}
