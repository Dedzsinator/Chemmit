//select the document element and the and the check box button
const html = document.querySelector("html");
const toggleButton = document.querySelector("#switch");
//add event listener and a handler to transition dark/light class toggle
toggleButton.addEventListener("change", function() {
  if (this.checked) {
    trans();
    html.setAttribute("data-theme", "dark");
  } else {
    trans();
    html.setAttribute("data-theme", "light");
  }
});
//function that transitions the theme change
const trans = () => {
  html.classList.add("transition");
  window.setTimeout(() => {
    html.classList.remove("transition");
  }, 700);
};
