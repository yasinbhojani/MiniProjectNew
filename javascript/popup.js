document.getElementById("profile").addEventListener("click", function () {
  document.querySelector(".popup").style.display = "flex";
  document.querySelector(".master-container").style.opacity = 0.5
})

document.getElementById("close").addEventListener("click", function () {
  document.querySelector(".popup").style.display = "none";
  document.querySelector(".master-container").style.opacity = 1
})