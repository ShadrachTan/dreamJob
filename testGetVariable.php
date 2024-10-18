<?php 

if (isset($_GET['studentLastName'])) {
    echo "<h2> Student Last Name: " . $_GET['studentLastName'] . "</h2>";
}
if (isset($_GET['studentAge'])) {
    echo "<h2> Student Age: " . $_GET['studentAge'] . "</h2>";
}
?>