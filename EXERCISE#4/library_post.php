<!DOCTYPE html>
<html>
<head>
    <title>PHP POST Method - Library Record</title>
</head>
<body>

    <h2>PLMun Library - Add New Book Record (POST)</h2>

    <!-- Form submits using POST method -->
    <form action="library_post.php" method="POST">
        <label>Student Name:</label><br>
        <input type="text" name="student_name" placeholder="e.g. Mica Grace Mendez" required><br><br>

        <label>Book Title:</label><br>
        <input type="text" name="book_title" placeholder="e.g. Web Development with PHP" required><br><br>

        <label>Department / Course:</label><br>
        <input type="text" name="course" placeholder="e.g. BSIT" required><br><br>

        <label>Days to Borrow:</label><br>
        <input type="number" name="days" placeholder="e.g. 7" min="1" max="30" required><br><br>

        <input type="submit" value="Save Record">
    </form>

    <hr>

    <?php
    // Check if the form was sent via the POST method
    if (isset($_POST['student_name'])) {
        $student = $_POST['student_name'];
        $book    = $_POST['book_title'];
        $course  = $_POST['course'];
        $days    = $_POST['days'];

        echo "<h2>Record Created Successfully!</h2>";
        echo "<p>Greetings, " . $student . "! Your book entry has been registered.</p>";
        echo "<h3>Reservation Details:</h3>";
        echo "<ul>";
        echo "<li><strong>Borrower:</strong> " . $student . " (" . $course . ")</li>";
        echo "<li><strong>Title:</strong> " . $book . "</li>";
        echo "<li><strong>Borrow Period:</strong> " . $days . " day(s)</li>";
        echo "</ul>";
    }
    ?>

</body>
</html>