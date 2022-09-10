"use strict";

document.addEventListener("DOMContentLoaded", function (event) {
  var hbtn = document.querySelector('#header-hamburguesa');

  if (hbtn) {
    hbtn.addEventListener('click', function (evento) {
      evento.preventDefault();
      hbtn.classList.toggle('is-active');
    });
  }
});
var boton = document.querySelector("#header-hamburguesa");
boton.addEventListener("click", function (e) {
  console.log("click");
  var body = document.querySelector("body");
  body.classList.toggle("js-menu");
});
//# sourceMappingURL=script.dev.js.map
