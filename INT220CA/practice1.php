<?php
session_start(); // Start the session

// Initialize the submitted data in session if not already set
if (!isset($_SESSION['submittedData'])) {
    $_SESSION['submittedData'] = [];
}

// Function to search by name
function searchByName($name, $data) {
    foreach ($data as $entry) {
        if (strtolower($entry['name']) === strtolower($name)) {
            return $entry;
        }
    }
    return null;
}

// Variables to store feedback
$searchResult = "";
$errorMessage = "";

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['submit_data'])) {
        // Add new data to session
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        if (!empty($name) && !empty($email)) {
            $_SESSION['submittedData'][] = ['name' => $name, 'email' => $email];
        } else {
            $errorMessage = "Both name and email are required.";
        }
    } elseif (isset($_POST['search_data'])) {
        // Search data
        $searchName = htmlspecialchars($_POST['search_name']);
        $searchResult = searchByName($searchName, $_SESSION['submittedData']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Form to submit data -->
  <h2>Submit Data</h2>
  <form action="" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <button type="submit" name="submit_data">Submit</button>
  </form>

  <!-- Form to search data -->
  <h2>Search by Name</h2>
  <form action="" method="post">
    <label for="search_name">Name:</label>
    <input type="text" name="search_name" id="search_name" required>
    <button type="submit" name="search_data">Search</button>
  </form>

  <!-- Display all submitted data -->
  <?php if (!empty($_SESSION['submittedData'])): ?>
    <h3>All Submitted Data:</h3>
    <ul>
      <?php foreach ($_SESSION['submittedData'] as $entry): ?>
        <li><?php echo "Name: " . $entry['name'] . ", Email: " . $entry['email']; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <!-- Display search result -->
  <?php if (!empty($searchResult)): ?>
    <h3>Search Result:</h3>
    <p><?php echo "Name: " . $searchResult['name'] . ", Email: " . $searchResult['email']; ?></p>
  <?php elseif ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['search_data'])): ?>
    <h3>No results found for "<?php echo htmlspecialchars($_POST['search_name']); ?>"</h3>
  <?php endif; ?>

  <!-- Display error message -->
  <?php if (!empty($errorMessage)): ?>
    <p style="color: red;"><?php echo $errorMessage; ?></p>
  <?php endif; ?>
</body>
</html>
