<?php

require_once 'dbConfig.php';

function insertRecords($pdo, $first_name, $last_name, $age, $gender, $year_level, $dream, $religion) {
    try {
      $sql = "INSERT INTO job (first_name, last_name, age, gender, year_level, dream, religion) VALUES (?, ?, ?, ?, ?, ?, ?)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$first_name, $last_name, $age, $gender, $year_level, $dream, $religion]);
      echo "Record inserted successfully!<br>";
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
  }
  

function showStudentRecords($pdo) {
  $sql = "SELECT * FROM job";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  if ($stmt->rowCount() > 0) {
    $results = $stmt->fetchAll();
    return $results;
  } else {
    return false;
  }
}

function getStudentId($pdo, $id) {
  $sql = "SELECT * FROM job WHERE id = ?";
  $stmt = $pdo->prepare($sql);
  if ($stmt->execute([$id])) {
    return $stmt->fetch();
}
}

function updateStudentRecords($pdo, $first_name, $last_name, $age, $gender, $year_level, $dream, $religion, $id) {
    $sql = "UPDATE job SET first_name = ?, last_name = ?, age = ?, gender = ?, year_level = ?, dream = ?, religion = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$first_name, $last_name, $age, $gender, $year_level, $dream, $religion, $id]);
}
  

function deleteStudentRecords($pdo, $id) {
  $sql = "DELETE FROM job WHERE id = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$id]);
}
?>