function randomColor() {
    var Mass = document.querySelectorAll(".container .item");
    let rand = Math.random() * (Mass.length);
    var i = Math.floor(rand);
    var step;
    for (step = 0; step < Mass.length; step++) {
      Mass[step].style.backgroundColor = "rgb(26, 124, 108)";
      Mass[step].style.color = "#333";
    }
    Mass[i].style.backgroundColor = "#73001a";
    Mass[i].style.color = "#fff";
  }
  setInterval(randomColor, 1000);