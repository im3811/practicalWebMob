
<?php
include 'assets/inc/header.php'; // For the Part 5, you’ll need additional page (results.php) that will display the average grade for scariness
                      //of the The Raven story. Both index.php and results.php should share the same header.
                      // Include header.php file in both, index.php and results.php files.
    const DB_HOSTNAME = 'localhost'; 
    const DB_PORT = '3306'; 
    const DB_USER = 'root'; 
    const DB_PASSWORD = ''; 
    const DB_DATABASE = 'fpractice'; 

    //2. Create a simple form in column 3, with number input, and a text box
    //3. Using adminer to create a table called practical with three columns, id (int auto incremented), name
   // (varchar length 15) and grade (int)
                      
                      // Include header.php file in both, index.php and results.php files.
                      
                      $connection = mysqli_connect(DB_HOSTNAME,  DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);

//In the results.php page connect to your database and list all information from the table practical.
// Have the action of the form call a results.php page and pass the values using GET method. On the
// server side check whether both fields are populated. If they are not ask user to go back and fix the
// input.
// 6. If the input is correct add the values to the database using prepared statement.
// 7. While getting the data from the table calculate the average grade and display the result.
// 8. See screen shots provided for a sample of the form.



$averageGrade = 0;
$resultsList = '';
$message = '';
$latestSubmission = '';

// Check if a new submission has been made
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['scary']) && !empty($_POST['firstname'])) {
        $scary = $_POST['scary'];
        $firstName = $_POST['firstname'];

        // Insert the new submission into the database
        $stmt = $connection->prepare("INSERT INTO practical (name, grade) VALUES (?, ?)");
        $stmt->bind_param("si", $firstName, $scary);
        if ($stmt->execute()) {
            // Save the latest submission to be highlighted
            $latestSubmission =  "<h2> <div class='latest-submission' style='color: purple;'>"  . htmlspecialchars($firstName) . " got this much scared: " . (int)$scary . "</div>" . "</h2>";
        } else {
            $message = "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        // If the form is incomplete, set a message
        $message = "<h2 style='color: pink;'>Please go back and correct your input.</h2>";
    }
}

// Fetch all the previous submissions
$result = $connection->query("SELECT name, grade FROM practical ORDER BY id ASC");
if ($result) {
    $totalGrade = 0;
    $count = $result->num_rows;
    while ($row = $result->fetch_assoc()) {
        // Append each submission to the results list
        $resultsList .= "<li>" . htmlspecialchars($row['name']) . " got scared " . (int)$row['grade'] . "</li>";
        $totalGrade += $row['grade'];
    }
    $averageGrade = $count ? $totalGrade / $count : 0;
} else {
    echo "Error retrieving results: " . $connection->error;
}

$connection->close();
?>

<body>
<div class="title-container">
        <h1 id="raven-title" onmouseover="hoverEffect(true)" onmouseout="hoverEffect(false)">The Raven by Edgar Allan Poe</h1>
        
        </div>

    <?php if ($message): ?>
        <p class="error-message"><?php echo $message; ?></p>
    <?php endif; ?>

    <?php if ($latestSubmission): ?>
        <?php echo $latestSubmission; ?>
    <?php endif; ?>

    <h2>Overall results:</h2>
    <ul>
        <?php echo $resultsList; ?>
    </ul>

    <?php if ($count): ?>
    <div>
        <h2>Average scare level is:</h2>
        <p><?php echo number_format($averageGrade, 2); ?></p>
    </div>
    <?php endif; ?>

    <script src="assets/js/script.js"></script>
</body>

