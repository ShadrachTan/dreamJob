<?php
require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['submitBtn'])) {
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $year_level = $_POST['yearLevel'];
    $dream = $_POST['dream'];
    $religion = isset($_POST['religion']) ? $_POST['religion'] : '';

    if (!empty($first_name) && !empty($last_name) && !empty($age) && !empty($gender) && !empty($year_level) && !empty($dream) && !empty($religion)) {
        if (is_numeric($age)) {
            insertRecords($pdo, $first_name, $last_name, $age, $gender, $year_level, $dream, $religion);
            echo "Record inserted successfully!<br>";
            echo '<a href="../index.php">Go back to index</a>';
        } else {
            echo "Age must be a valid number!<br>";
            echo '<a href="../index.php">Go back to index</a>';
        }
    } else {
        echo "All fields are required!<br>";
        echo '<a href="../index.php">Go back to index</a>';
    }
}

if (isset($_POST['editBtn'])) {
    $user_id = $_POST['id'];
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $year_level = $_POST['yearLevel'];
    $dream = $_POST['dream'];
    $religion = $_POST['religion'];

    if (!empty($first_name) && !empty($last_name) && !empty($age) && !empty($gender) && !empty($year_level) && !empty($dream) && !empty($religion)) {
        if (is_numeric($age)) { 
            updateStudentRecords($pdo, $first_name, $last_name, $age, $gender, $year_level, $dream, $religion, $user_id);
            echo "Record updated successfully!<br>";
            echo '<a href="../index.php">Go back to index</a>';
        } else {
            echo "Age must be a valid number!<br>";
            echo '<a href="../index.php">Go back to index</a>';
        }
    } else {
        echo "All fields are required!<br>";
        echo '<a href="../index.php">Go back to index</a>';
    }
}

if (isset($_POST['deleteBtn'])) {
    $user_id = $_POST['id'];
    deleteStudentRecords($pdo, $user_id);
    if (!empty($user_id)) {
        echo "Record deleted successfully! <br>";
        echo '<a href="../index.php">Go back to index</a>';
    } else {
        echo "Failed to delete record!<br>";
        echo '<a href="../index.php">Go back to index</a>';
    }
}
?>
