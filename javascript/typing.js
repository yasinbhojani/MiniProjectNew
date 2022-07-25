const texts = [ "Master Of Commerce.", "Diploma in Information Technology. ", "Bachelor of Computer Application.", 'Master of Computer Application.', 'Post Graduation Diploma Course.', 'Master in Business Administration.', 'Bachelor of Business Administration.','Diploma in Business Management.'];
// In this texts variable we are storing a array of strings.

let count = 0;  // Count var will count the number of string means if the texts[count = 0] then it will take the 1st string from the array. 
let individual_char = 0;  // this variable will count the number of current array's letter.
let currentText = '';   // This array will store the current string from the array.
let letter = '';    // This variable will specify the letter of the string.

(function type() {  // created function typing effect 
  if (count === texts.length){ // if the count === texts.length means 8 === 8 then it will reset the count and eventually it will become a loop.
    count = 0;  // count is reseted if the above condition is true.
  }
  currentText = texts[count]; // The currentTime is storing the first string from texts variable  
  letter = currentText.slice(0, ++individual_char); // this will slice the currentText value and it will go individually from 0,1,2,3,4 alphabets.
    
  document.querySelector('.typing').textContent = letter; // changing the typing css content to letter means our animation will work and our functionallity will also work.

  if(letter.length === currentText.length){ // 
    count++;
      individual_char = 0;
  }

  setTimeout(type, 100);
})();