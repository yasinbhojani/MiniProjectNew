const texts = [ "Master Of Commerce.", "Diploma in Information Technology. ", "Bachlor of Computer Application.", 'Master of Computer Application.', 'Post Graduation Diploma Course.', 'Master in Business Administration.', 'Bachlor of Business Administration.','Department of Budget and Management.'];
let count = 0;
let index = 0;
let currentText = '';
let letter = '';

(function type() {
    if (count === texts.length){
        count = 0;
    }
    currentText = texts[count];
    letter = currentText.slice(0, ++index);
    
    document.querySelector('.typing').textContent = letter;

    if(letter.length === currentText.length){
        count++;
        index = 0;
    }

    setTimeout(type, 100);
})();