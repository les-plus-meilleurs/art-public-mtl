function activerAccordeon () {
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight === "2000px") {
        panel.style.maxHeight = "0";
      } else {
        panel.style.maxHeight = "2000px";
      }
    });
  }
}

window.addEventListener("load", function() {
  activerAccordeon();
});
