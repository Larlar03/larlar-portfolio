//Stores the "Pick a Colour" button
const pickButton = document.getElementById("pick");

//Stores the "Mystery Colour" button
const mysteryButton = document.getElementById("mystery");

//Random number function to create a rgb number
function randomNum(num) {
  return Math.floor(Math.random() * num);
}


// Function to change the colour
function colourChange(event) {
  const randomColour = 'rgb(' + randomNum(255) + ',' + randomNum(255) + ',' + randomNum(255) + ')';

/*When an event (scroll, click etc) takes place on the target(button) change the style(backgroundcolour) by using the randomColour function*/
  event.target.style.backgroundColor = randomColour;
}



/*When clicking on the pick button, the colour change function will run*/
pickButton.onclick = colourChange;

/*When scrolling over the mystery button, the colour change function will run*/
mysteryButton.onwheel = colourChange;
