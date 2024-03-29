var button = document.getElementById("game-button");
var container = document.body;
var clicks = 0;
var level = 0;
var timeout = 500;

button.addEventListener("mouseover", startMove);

function startMove() {
  setTimeout(moveButton, timeout);
}

function moveButton() {
  var randX = Math.random() * 600;
  var randY = Math.random() * 600;
  button.style.left = randX + "px"; 
  button.style.top = randY + "px";
}

button.addEventListener("click", whenClick);

function whenClick() {
  clicks++;
  if (clicks === 3) { 
    level++;
    alert("Congratulations! your level"+" "+level);
    clicks = 0;
    timeout -= 100;
    if (level === 6) {
      alert("Congratulations! You've won the game!");
      return;
    }
    setTimeout(moveButton, timeout);
  }
  
}