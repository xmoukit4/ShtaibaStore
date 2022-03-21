var compteurImage = 1;
var totalimage = 2;

function sliderAuto() {
  var image = document.getElementById("1");
  image.src = "./photos/fashion" + compteurImage + ".jpg";

  if (compteurImage >= totalimage) {
    compteurImage = 1;
  } else {
    compteurImage = compteurImage + 1;
  }
}

window.setInterval(sliderAuto, 1000);
