const submitBtn = document.getElementById('submit-btn');
const dataSub = document.querySelector('.data-sub');
const closeBtn = document.querySelector('.close-btn');
const form = document.querySelector('form');

let disp = 'none';

console.log(submitBtn)
console.log(dataSub)
console.log(closeBtn)

form.addEventListener('submit', (e) => {
  disp = 'flex';
  sessionStorage.setItem("disp", disp);
  
})

closeBtn.addEventListener('click', () => {
  dataSub.style.display = 'none';
})

window.onload = function () {
  disp = sessionStorage.getItem("disp");
  dataSub.style.display = disp;
}