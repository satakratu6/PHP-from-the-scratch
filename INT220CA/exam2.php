<?php
$tasks = array(
    array("Id" => 1, "Name" => "Design", "Status" => "Not started", "Progress" => 0),
    array("Id" => 2, "Name" => "Development", "Status" => "In Progress", "Progress" => 50),
);

function displayTasks($tasks) {
    foreach ($tasks as $task) {
        echo "ID: {$task['Id']}, Name: {$task['Name']}, Status: {$task['Status']}, Progress: {$task['Progress']} \n";
    }
}

echo "Original Task list:\n";
displayTasks($tasks);
echo "\n";

function addTask(&$tasks) {
    $tasks[] = array("Id" => 3, "Name" => "Testing", "Status" => "Not Started", "Progress" => 0);
}

addTask($tasks);
echo "Updated Task list after adding task:\n";
displayTasks($tasks);
echo "\n";

function updateTaskStatus(&$tasks, $id, $newStatus) {
    foreach ($tasks as &$task) {
        if ($task['Id'] == $id) {
            $task['Status'] = $newStatus;
            return;
        }
    }
    echo "Task ID $id not found.\n";
}

updateTaskStatus($tasks, 1, "Completed");
echo "Updated Task list after updating status:\n";
displayTasks($tasks);
echo "\n";

function updateTaskProgress(&$tasks, $id, $newProgress) {
    foreach ($tasks as &$task) {
        if ($task['Id'] == $id) {
            $task['Progress'] = $newProgress;
            return;
        }
    }
    echo "Task ID $id not found.\n";
}

updateTaskProgress($tasks, 1, 100);
updateTaskProgress($tasks, 2, 75);

echo "Updated Task list after updating status and progress:\n";
displayTasks($tasks);
echo "\n";

function calculateCompletionPercentage($tasks) {
    $totalProgress = 0;
    $totalTasks = count($tasks);
    foreach ($tasks as $task) {
        $totalProgress += $task['Progress'];
    }
    return ($totalTasks > 0) ? ($totalProgress / ($totalTasks * 100)) * 100 : 0;
}

$completionPercentage = calculateCompletionPercentage($tasks);
echo "Overall completion percentage: " . round($completionPercentage, 2) . "%\n\n";

echo "Task Summary:\n";
displayTasks($tasks);
?>
