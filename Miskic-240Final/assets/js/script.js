

// Create a simple inline rollover on the graphic (edgar.jpg) in the middle column using the
//provided rollover graphic (edgar2.jpg) (
document.addEventListener('DOMContentLoaded', (event) => {


    var image = document.getElementById('rollover-image');

    var originalSrc = 'assets/img/edgar.png';
    var rolloverSrc = 'assets/img/edgar2.png';


    image.addEventListener('mouseover', function() {
        image.src = rolloverSrc;
    });


    image.addEventListener('mouseout', function () {
        image.src = originalSrc;
    });

});



//Change the color of the text in the title "The Raven" when the mouse goes over it and back
//when off using JavaScript


document.addEventListener('DOMContentLoaded', (event) => {

    var title = document.getElementById('raven-title');

    title.addEventListener('mouseover', function () {
       this.style.color = 'pink'; 
    });

    title.addEventListener('mouseout', function () {
       this.style.color = 'black'; 
    });

});


 //Clicking on the graphic (edgar.jpg or edgar2.jpg) should load your home page in a new window.
 //don’t use <a> tag, do it with a JavaScript function.)

 document.addEventListener('DOMContentLoaded', (event) => {
    var image = document.getElementById('rollover-image');

    image.addEventListener('click', function () {
     window.open('results.php');   
    });
 });




//1. When the button "The End" is clicked, it should toggle the visibility of the form
//2. Create a simple form in column 3, with number input, and a text box

document.addEventListener('DOMContentLoaded', (event) => {
    var button = document.getElementById('toggleButton');
    var formContainer = document.getElementById('formContainer');
  
    button.addEventListener('click', function() {
      
      if (formContainer.style.display === 'none') {
        formContainer.style.display = 'block';
      } else {
        formContainer.style.display = 'none';
      }
    });
  });










  