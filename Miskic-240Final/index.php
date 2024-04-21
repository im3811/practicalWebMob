
<?php

include 'assets/inc/header.php'; // Both index.php and results.php should share the same header.
const DB_HOSTNAME = 'localhost'; // Hostname or IP address of the database server
const DB_PORT = '3306'; // Default MySQL port
const DB_USER = 'root'; // Database username
const DB_PASSWORD = ''; // Database password
const DB_DATABASE = 'fpractice'; // Name of the database
                  
                  // Include header.php file in both, index.php and results.php files.
                  
                  $connection = mysqli_connect(DB_HOSTNAME,  DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);



?>




<body>
        
        <h1 id="raven-title" onmouseover="hoverEffect(true)" onmouseout="hoverEffect(false)">The Raven by Edgar Allan Poe</h1>
       
        
   

   
    <div class="container">


        <div class="column">
        <div class="stanza">    <p>Once upon a midnight dreary, while I pondered, weak and weary,
Over many a quaint and curious volume of forgotten lore—
While I nodded, nearly napping, suddenly there came a tapping,
As of some one gently rapping, rapping at my chamber door—
"'Tis some visitor," I muttered, "tapping at my chamber door—
Only this and nothing more."</p></div>

        <div class="stanza"><p>Ah, distinctly I remember it was in the bleak December;
And each separate dying ember wrought its ghost upon the floor.
Eagerly I wished the morrow;—vainly I had sought to borrow
From my books surcease of sorrow—sorrow for the lost Lenore—
For the rare and radiant maiden whom the angels name Lenore—
Nameless here for evermore.</p></div>


        <div class="stanza"><p>And the silken, sad, uncertain rustling of each purple curtain
Thrilled me—filled me with fantastic terrors never felt before;
So that now, to still the beating of my heart, I stood repeating,
"'Tis some visitor entreating entrance at my chamber door—
Some late visitor entreating entrance at my chamber door;—
This it is and nothing more."</p></div>
        </div>


        <div class="column">

        <div class="stanza">

<p>Presently my soul grew stronger; hesitating then no longer,
"Sir," said I, "or Madam, truly your forgiveness I implore;
But the fact is I was napping, and so gently you came rapping,
And so faintly you came tapping, tapping at my chamber door,
That I scarce was sure I heard you"—here I opened wide the door;—
Darkness there and nothing more.</p>
        

        <img id="rollover-image" src="assets/img/edgar.png" alt="edgar">
        <p class="name">Ivan Miskic &copy; </p>

      
 <!--  <img src="raven.png" alt="raven">  nesto mi nece path i edgar treba biti u sredini. The middle column should contain the graphic (raven.png) located between a stanza above and
below it -->

</div>
        <div class="stanza"><p>Deep into that darkness peering, long I stood there wondering, fearing,
Doubting, dreaming dreams no mortal ever dared to dream before;
But the silence was unbroken, and the stillness gave no token,
And the only word there spoken was the whispered word, "Lenore?"
This I whispered, and an echo murmured back the word, "Lenore!"—
Merely this and nothing more.</p>
</div>
        
        </div>


        <div class="column">
   
        <div class="stanza">
<p>Open here I flung the shutter, when, with many a flirt and flutter,
In there stepped a stately Raven of the saintly days of yore;
Not the least obeisance made he; not a minute stopped or stayed he;
But, with mien of lord or lady, perched above my chamber door—
Perched upon a bust of Pallas just above my chamber door—
Perched, and sat, and nothing more.</p>
</div>
        <div class="stanza">
<p>
And the Raven, never flitting, still is sitting, still is sitting
On the pallid bust of Pallas just above my chamber door;
And his eyes have all the seeming of a demon's that is dreaming,
And the lamp-light o'er him streaming throws his shadow on the floor;
And my soul from out that shadow that lies floating on the floor
Shall be lifted—nevermore!</p></div>


<button id="toggleButton" class="btn">THE END</button>
            
            <div id="formContainer" style="display: none;">
                <form id="feedbackForm" action="results.php" method="post">
                    <label for="scaryScale">How scary is the story?:</label>
                    <input type="number" name="scary" id="scaryScale" min="1" max="10">

                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstname">

                    <input type="submit" value="Submit">
                </form>
            </div>

        </div>

    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>