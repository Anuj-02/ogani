<?php
include '../users/connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $password = $_POST['pass'];

    $Query = "INSERT INTO admin(`name`, `email`, `password`) VALUES (:name,:email,:password)";
    $Query_run  = $conn->prepare($Query);

    $Query_exec = $Query_run->execute(array(":name" => $name, ":email" => $mail, ":password" => $password));
}
