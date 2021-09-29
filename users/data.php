<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['user'];
    $mail = $_POST['email'];
    $password = $_POST['pass'];
    $gender = $_POST['gender'];
    $Query = "INSERT INTO login(`username`, `email`, `password`, `gender`) VALUES (:name,:mail,:password,:gender)";
    $Query_run  = $conn->prepare($Query);

    $Query_exec = $Query_run->execute(array(":name" => $name, ":mail" => $mail, ":password" => $password, ":gender" => $gender));
}
