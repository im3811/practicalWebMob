

document.addEventListener('DOMContentLoaded', () => {

    var image = document.getElementById('rollover-image');
    var OriginalImage = 'assets/img/edgar.png';
    var RolloverImage = 'assets/img/edgar2.png';

    image.addEventListener("mouseover", function()  {

        image.src = RolloverImage;


    });

    image.addEventListener("mouseout", function()  {

        image.src = OriginalImage;
        

    });

});


document.addEventListener('DOMContentLoaded',function () {

    var image = document.getElementById('rollover-image');
    image.addEventListener('click', function() {

        window.open('results.php');

    });

});


document.addEventListener('DOMContentLoaded', function() {

    var title = document.getElementById('title');

    title.addEventListener('mouseover', function() {

        title.style.color = 'purple';

    });

    title.addEventListener('mouseout', function() {

        title.style.color = 'black';

    });


});


document.addEventListener('DOMContentLoaded', function ()  {
   
    var btn = document.getElementById('btn');
    var form = document.getElementById('form');

    form.style.display = 'none';
    
    btn.addEventListener('click', function () {

        if (form.style.display === 'none') {
            form.style.display = 'block'
            form.style.backgroundColor = 'purple';
        } else {
            form.style.display = 'none'
        }
    
        
    });

   
});



