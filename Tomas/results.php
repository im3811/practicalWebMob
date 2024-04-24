<?php
include 'assets/inc/header.php';
const DB_HOSTNAME = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = '';
const DB_DATABASE = 'fpractice';
const DB_PORT = '3306';

$connection = mysqli_connect(DB_HOSTNAME, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);

$averageGrade = 0;
$resultsList = '';
$message = '';
$latestSubmission = '';

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (!empty($_GET['numberPart']) && !empty($_GET['firstName'])) {
        $numberPart = $_GET['numberPart'];
        $firstName = $_GET['firstName'];

        // Prepare and bind
        $stmt = $connection->prepare("INSERT INTO practical (name, grade) VALUES (?, ?)");
        $stmt->bind_param("si", $firstName, $numberPart);
        if ($stmt->execute()) {
            $latestSubmission = "<h2><div class='latest-submission' style='color: purple;'>" . htmlspecialchars($firstName) . " got this much scared: " . (int)$numberPart . "</div></h2>";
        }
        $stmt->close();
    } else {
        $message = "<h2 style='color: pink;'>Please go back and correct your input.</h2>";
    }
} 

$result = $connection->query("SELECT name, grade FROM practical ORDER BY id ASC");

if ($result) {
    $totalGrade = 0;
    $count = $result->num_rows;
    while ($row = $result->fetch_assoc()) {
        $resultsList .= "<li>" . htmlspecialchars($row['name']) . " got scared " . (int)$row['grade'] . "</li>";
        $totalGrade += $row['grade'];
    }
    $averageGrade = $count ? $totalGrade / $count : 0;
}

$connection->close();
?>



<body>
<div class="title-container">
        <h1 id="title">The Raven by Edgar Allan Poe</h1>
        
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