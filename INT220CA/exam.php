<?php
// Initialize tasks
$tasks = isset($_SESSION['tasks']) ? $_SESSION['tasks'] : array(
    array("Id" => 1, "Name" => "Design", "Status" => "Not started", "Progress" => 0),
    array("Id" => 2, "Name" => "Development", "Status" => "In Progress", "Progress" => 50),
);

session_start();

// Functions to handle tasks
function displayTasks($tasks) {
    foreach ($tasks as $task) {
        echo "ID: {$task['Id']}, Name: {$task['Name']}, Status: {$task['Status']}, Progress: {$task['Progress']}% <br>";
    }
    echo "<br>";
}

function addTask(&$tasks, $name, $status, $progress) {
    $id = count($tasks) + 1;
    $tasks[] = array("Id" => $id, "Name" => $name, "Status" => $status, "Progress" => $progress);
}

function updateTaskStatus(&$tasks, $id, $newStatus) {
    foreach ($tasks as &$task) {
        if ($task['Id'] == $id) {
            $task['Status'] = $newStatus;
            return;
        }
    }
}

function updateTaskProgress(&$tasks, $id, $newProgress) {
    foreach ($tasks as &$task) {
        if ($task['Id'] == $id) {
            $task['Progress'] = $newProgress;
            return;
        }
    }
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_task'])) {
        $name = $_POST['name'];
        $status = $_POST['status'];
        $progress = $_POST['progress'];
        addTask($tasks, $name, $status, (int)$progress);
    }

    if (isset($_POST['update_status'])) {
        $id = (int)$_POST['task_id'];
        $status = $_POST['status'];
        updateTaskStatus($tasks, $id, $status);
    }

    if (isset($_POST['update_progress'])) {
        $id = (int)$_POST['task_id'];
        $progress = (int)$_POST['progress'];
        updateTaskProgress($tasks, $id, $progress);
    }

    $_SESSION['tasks'] = $tasks;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
</head>
<body>
    <h2>Task List</h2>
    <?php displayTasks($tasks); ?>

    <h3>Add New Task</h3>
    <form method="post">
        Name: <input type="text" name="name" required><br>
        Status: 
        <select name="status" required>
            <option value="Not started">Not started</option>
            <option value="In Progress">In Progress</option>
            <option value="Completed">Completed</option>
        </select><br>
        Progress: <input type="number" name="progress" min="0" max="100" required>%<br>
        <button type="submit" name="add_task">Add Task</button>
    </form>

    <h3>Update Task Status</h3>
    <form method="post">
        Task ID: <input type="number" name="task_id" required><br>
        New Status: 
        <select name="status" required>
            <option value="Not started">Not started</option>
            <option value="In Progress">In Progress</option>
            <option value="Completed">Completed</option>
        </select><br>
        <button type="submit" name="update_status">Update Status</button>
    </form>

    <h3>Update Task Progress</h3>
    <form method="post">
        Task ID: <input type="number" name="task_id" required><br>
        New Progress: <input type="number" name="progress" min="0" max="100" required>%<br>
        <button type="submit" name="update_progress">Update Progress</button>
    </form>
</body>
</html>
