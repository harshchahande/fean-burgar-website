// section 1
let z = document.querySelector(".s1-nav");
z.style.background = "transparent";
z.style.color = "white";
function s3() {
  z.style.background = "linear-gradient(to right, black, rgb(34, 40, 49))";
  z.style.color = "black";
}
function s2() {
  z.style.background = "transparent";
}
// section 4
var a = document.querySelectorAll(".s4-c1");
var b = document.querySelectorAll(".s4-c2");
var c = document.querySelectorAll(".s4-c3");
var d = document.querySelectorAll(".s4-c4");
var e = document.querySelectorAll(".s4-c5");

function fun() {
  for (i = 0; i < a.length; i++) {
    a[i].style.display = "block";
  }
  for (i = 0; i < b.length; i++) {
    b[i].style.display = "none";
  }
  for (i = 0; i < c.length; i++) {
    c[i].style.display = "none";
  }
  for (i = 0; i < d.length; i++) {
    d[i].style.display = "none";
  }
  for (i = 0; i < e.length; i++) {
    e[i].style.display = "none";
  }
}

function burger() {
  for (i = 0; i < b.length; i++) {
    b[i].style.display = "block";
  }
  for (i = 0; i < a.length; i++) {
    a[i].style.display = "none";
  }
  for (i = 0; i < c.length; i++) {
    c[i].style.display = "none";
  }
  for (i = 0; i < d.length; i++) {
    d[i].style.display = "none";
  }
  for (i = 0; i < e.length; i++) {
    e[i].style.display = "none";
  }
}
function Pizza() {
  for (i = 0; i < b.length; i++) {
    b[i].style.display = "none";
  }
  for (i = 0; i < a.length; i++) {
    a[i].style.display = "none";
  }
  for (i = 0; i < c.length; i++) {
    c[i].style.display = "block";
  }
  for (i = 0; i < d.length; i++) {
    d[i].style.display = "none";
  }
  for (i = 0; i < e.length; i++) {
    e[i].style.display = "none";
  }
}
function Pasta() {
  for (i = 0; i < b.length; i++) {
    b[i].style.display = "none";
  }
  for (i = 0; i < a.length; i++) {
    a[i].style.display = "none";
  }
  for (i = 0; i < c.length; i++) {
    c[i].style.display = "none";
  }
  for (i = 0; i < d.length; i++) {
    d[i].style.display = "block";
  }
  for (i = 0; i < e.length; i++) {
    e[i].style.display = "none";
  }
}
function Fries() {
  for (i = 0; i < b.length; i++) {
    b[i].style.display = "none";
  }
  for (i = 0; i < a.length; i++) {
    a[i].style.display = "none";
  }
  for (i = 0; i < c.length; i++) {
    c[i].style.display = "none";
  }
  for (i = 0; i < d.length; i++) {
    d[i].style.display = "none";
  }
  for (i = 0; i < e.length; i++) {
    e[i].style.display = "block";
  }
}
// section 2

// Initialize the typing animation
const typingAnimationElement = document.getElementById("typing-animation");

// Create an array of typing text
const typingTexts = [
  "Fast Food Restaurant  ",
  "Fast Food Restaurant  ",
  "Fast Food Restaurant   ",
];

// Create a function to display the typing animation for a given text
function playTypingAnimation(text) {
  // Loop through each character and add it to the element
  for (let i = 0; i < text.length; i++) {
    setTimeout(() => {
      typingAnimationElement.textContent += text[i];
    }, i * 200); // Increase the delay to slow down the typing animation
  }

  // Once the animation is complete, reset the text and start over
  setTimeout(() => {
    typingAnimationElement.textContent = "";
    playTypingAnimation(
      typingTexts[(typingTexts.indexOf(text) + 1) % typingTexts.length]
    );
  }, text.length * 200);
}

// Start the typing animation loop
playTypingAnimation(typingTexts[0]);
