<?php
require './config.php';
$records = $conn->prepare("SELECT * FROM tareas");
$records->execute();
$results = $records->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $tareas) {
?>
    <tr>
        <th scope="row"><?= $tareas['id'] ?></th>
        <td><?= $tareas['titulo'] ?></td>
        <td><?= $tareas['description'] ?></td>
        <td style="cursor: pointer" onclick="deleteTask('<?= $tareas['id'] ?>')"><i style="color: red;" class="bi bi-trash-fill"></i></td>
    </tr>
<?php }
?>