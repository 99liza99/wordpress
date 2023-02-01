var imagesOpen = document.getElementsByClassName("open");
var closesOpen = document.getElementsByClassName("close");
var openBurger = document.getElementById("open-menu");
var closeBurger = document.getElementById("close-menu");
var openModal = document.getElementById("open-modal");
var closeModal = document.getElementById("close-modal");

for (let i = 0; i < imagesOpen.length; i++) {
  imagesOpen[i].addEventListener("click", function (e) {
    document.getElementById("item-" + e.target.id).classList.add("active");
  });
  closesOpen[i].addEventListener("click", function (e) {
    document.getElementById("item-" + e.target.id).classList.remove("active");
  });
}

openBurger.addEventListener("click", function (e) {
  document.getElementById("navigation-block").classList.add("active");
  document.getElementById("black-background").classList.add("active");
});
closeBurger.addEventListener("click", function (e) {
  document.getElementById("navigation-block").classList.remove("active");
  document.getElementById("black-background").classList.remove("active");
});
openModal.addEventListener("click", function (e) {
  document.getElementById("modal").classList.add("active");
  document.getElementById("black-background").classList.add("active");
});
closeModal.addEventListener("click", function (e) {
  document.getElementById("modal").classList.remove("active");
  document.getElementById("black-background").classList.remove("active");
});
