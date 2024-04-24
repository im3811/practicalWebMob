

document.addEventListener('DOMContentLoaded', () => {

    var image = document.getElementById('rollover-image');

    var originalImage = 'assets/img/edgar.png';
    var rolloverImage = 'assets/img/edgar2.png';

    image.addEventListener('mouseover', function() {
        image.src = rolloverImage;
    });

    image.addEventListener('mouseout', function() {
        image.src = originalImage;
    });

});


document.addEventListener('DOMContentLoaded', () => {

    var title = document.getElementById('title');

    title.addEventListener('mouseover', function() {

        title.style.color = 'purple';


    });

    title.addEventListener('mouseout', function() {

        title.style.color = 'black';
        

    });


});


document.addEventListener('DOMContentLoaded', ()=> {

    var image = document.getElementById('rollover-image');

    image.addEventListener('click', function() {

        window.open('results.php');

    });

});


document.addEventListener('DOMContentLoaded', ()=> {
    
    var form = document.getElementById('feedbackForm');
    var btn = document.getElementById('toggleButton');


    form.style.display = 'none';

    btn.addEventListener('click', function() {

        if (form.style.display === 'none' || form.style.display === '') {
            form.style.display = 'block';
        } else {
            form.style.display = 'none';
        }

    });

});