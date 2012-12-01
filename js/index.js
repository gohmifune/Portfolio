
function click_here() {
    "use strict";
    window.location = 'resume.html';
}
function background_morph(color) {
    document.body.style.backgroundColor = color;
}

document.getElementById('profile').onclick = function() {
  background_morph('rgb(255,255,255)');
}
document.getElementById('click').onclick = function() {
  click_here();
  
}
