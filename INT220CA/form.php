<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Report a Problem</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<div class="form-container">
    <h2>Report a Problem</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="category">Select a Category:</label>
            <select id="category" name="category" required>
                <option value="">--Select a Category--</option>
                <option value="Fire Problem">Fire Problem</option>
                <option value="Security Problem">Security Problem</option>
                <option value="Health Problem">Health Problem</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Describe the Problem:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <button type="submit" class="submit-button">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $category = $_POST['category'] ?? '';
        $description = $_POST['description'] ?? '';

        if (empty($category) || empty($description)) {
            echo '<div class="result">Please fill in all fields.</div>';
        } else {
            echo '<div class="result">';
            echo '<h3>Your Input:</h3>';
            echo '<p><strong>Category:</strong> ' . htmlspecialchars($category) . '</p>';
            echo '<p><strong>Description:</strong> ' . htmlspecialchars($description) . '</p>';
            echo '</div>';
        }
    }
    ?>
</div>

</body>
</html>
