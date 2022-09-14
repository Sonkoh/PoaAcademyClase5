<?php
require './config.php';
$query = $conn->prepare("DELETE FROM `tareas` WHERE id=:id");
$query->bindParam(':id', $_POST['task']);
$query->execute();
?>