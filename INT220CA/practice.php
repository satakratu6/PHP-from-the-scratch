<?php 
session_start();
if(!isset($_SESSION['submittedData'])){
  $_SESSION['submittedData'] = [];
}

function searchData($name, $data) {
  foreach ($data as $index => $entry) {
    if (strtolower($entry['name']) === strtolower($name)) {
      return ['index' => $index, 'data' => $entry];
    }
  }
  return null;
}

$result = "";
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST['submit-data'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    if (!empty($name) && !empty($email)) {
      $_SESSION['submittedData'][] = ['name' => $name, 'email' => $email];
      $success = "Data successfully added!";
    } else {
      $error = "Both Name and Email are required.";
    }
  }

  if (isset($_POST['search-name'])) {
    $search = htmlspecialchars($_POST['search']);
    $result = searchData($search, $_SESSION['submittedData']);
    if (!$result) {
      $error = "No entry found for the given name.";
    }
  }

  if (isset($_POST['update-data'])) {
    $index = intval($_POST['index']);
    $newName = htmlspecialchars($_POST['new-name']);
    $newEmail = htmlspecialchars($_POST['new-email']);
    if (!empty($newName) && !empty($newEmail)) {
      $_SESSION['submittedData'][$index] = ['name' => $newName, 'email' => $newEmail];
      $success = "Data successfully updated!";
    } else {
      $error = "Both New Name and New Email are required.";
    }
  }

  if (isset($_POST['delete-data'])) {
    $index = intval($_POST['index']);
    if (isset($_SESSION['submittedData'][$index])) {
      array_splice($_SESSION['submittedData'], $index, 1);
      $success = "Data successfully deleted!";
    } else {
      $error = "Invalid data entry.";
    }
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
  <form action="" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name">
    <label for="email">Email</label>
    <input type="email" name="email">
    <button type="submit" name="submit-data">Submit</button>
  </form>

  <form action="" method="POST">
    <label for="search">Search By Name</label>
    <input type="text" name="search">
    <button type="submit" name="search-name">Search</button>
  </form>

  <?php if (!empty($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
  <?php endif; ?>

  <?php if (!empty($success)): ?>
    <p style="color: green;"><?php echo $success; ?></p>
  <?php endif; ?>

  <?php if (!empty($_SESSION['submittedData'])): ?>
    <h1>Submitted Data:</h1>
    <ul>
      <?php foreach ($_SESSION['submittedData'] as $index => $entry): ?>
        <li>
          <?php echo "Name: " . $entry['name'] . ", Email: " . $entry['email']; ?>
          <form action="" method="POST" style="display:inline;">
            <input type="hidden" name="index" value="<?php echo $index; ?>">
            <button type="submit" name="delete-data">Delete</button>
          </form>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <?php if (!empty($result)): ?>
    <h1>Search Result:</h1>
    <form action="" method="POST">
      <label for="new-name">New Name:</label>
      <input type="text" name="new-name" value="<?php echo $result['data']['name']; ?>">
      <label for="new-email">New Email:</label>
      <input type="text" name="new-email" value="<?php echo $result['data']['email']; ?>">
      <input type="hidden" name="index" value="<?php echo $result['index']; ?>">
      <button type="submit" name="update-data">Update</button>
    </form>
  <?php endif; ?>
</body>
</html>
