
<?php

$limit = isset($_GET['limit']) ? (int)$_GET['limit'] + 10 : 10;

$req = $db->prepare("SELECT * FROM messages ORDER BY id DESC LIMIT :limit");
// $req->bindParam("offset", $offset, PDO::PARAM_INT);
$req->bindParam("limit", $limit, PDO::PARAM_INT);
$req->execute();

$messages = $req->fetchAll(PDO::FETCH_OBJ);



?>
