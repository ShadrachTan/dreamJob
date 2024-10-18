<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SQL</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="title">
    <h1>STUDENT MANAGEMENT SYSTEM</h1>
  </div>

  <div class="form">
    <form action="core/handleForms.php" method="POST">
      <p>
        <label for="firstName">First Name:</label> 
        <input type="text" name="firstName" required> 
      </p>
      <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" required> 
      </p>
      <p>
        <label for="age">Age:</label>
        <input type="text" name="age" required> 
      </p>
      <p>
        <label for="gender">Gender:</label>
        <input type="text" name="gender" required> 
      </p>
      <p>
        <label for="yearLevel">Year level:</label>
        <input type="text" name="yearLevel" required> 
      </p>
      <p>
        <label for="dream">Dream:</label>
        <input type="text" name="dream" required> 
      </p>
      <p>
        <label for="religion">Religion:</label>
        <input type="text" name="religion" required> 
      </p>
      <p style="display: flex; justify-content: center;">
    <input type="submit" name="submitBtn" value="Submit">
</p>
    </form>
  </div>
  
  <div class="testGlobal" style="text-align: center; margin-top: 50px;">
    <a href="testGetVariable.php?studentLastName=Diaz&studentAge=22">Test Get SuperGlobal</a>
  </div>

  <div class="table" style="padding: 50px;">
  <?php $showStudentRecords = showStudentRecords($pdo);?>
  <?php if ($showStudentRecords) : ?>
    <table border="1" style="margin: 0 auto; text-align: center; width: 50%">
      <thead>
        <tr>
          <th>Id</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Age</th>
          <th>Gender</th>
          <th>Year Level</th>
          <th>Dream</th>
          <th>Religion</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($showStudentRecords as $student) : ?>
          <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['first_name']; ?></td>
            <td><?php echo $student['last_name']; ?></td>
            <td><?php echo $student['age']; ?></td>
            <td><?php echo $student['gender']; ?></td>
            <td><?php echo $student['year_level']; ?></td>
            <td><?php echo $student['dream']; ?></td>
            <td><?php echo $student['religion']; ?></td>
            <td>
            <a href="editstudent.php?id=<?php echo $student['id']; ?>">Edit</a>
            <a href="deletestudent.php?id=<?php echo $student['id']; ?>">Delete</a>

            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else : ?>
    <p style="text-align: center;">No records found!</p>
  <?php endif; ?>
  </div>
</body>
</html>