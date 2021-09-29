<?php
include '../users/connect.php';
$query = "SELECT * FROM login ";
$result = $conn->query($query);
$count = $result->rowCount();
