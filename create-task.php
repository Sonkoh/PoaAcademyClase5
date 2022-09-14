<?php

require './config.php';
$query = $conn->prepare("INSERT INTO `tareas`(`titulo`, `description`, `autor`) VALUES (:title, :desc, 1)");
$query->bindParam(':title', $_POST['title']);
$query->bindParam(':desc', $_POST['description']);
$query->execute();
?>