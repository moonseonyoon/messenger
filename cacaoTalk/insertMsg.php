<?php
// $msg = isset($_POST["msg"]) ? $_POST['msg'] : "";
// $username = isset($_POST["username"]) ? $_POST['username'] : "";

// print_r($_POST);

// IF the user added a message AND a username
if (
    !empty($_POST['msg']) and
    !empty($_POST['username'])
) {
    // CONNECTING TO DB
    include "db_connect.php";
    $limit = isset($_GET['limit']) ? $_GET['limit'] - 10 : 0;
    $req = $db->prepare("INSERT INTO messages (msg, username) VALUES (:msg, :username)");
    $req->execute([
        'msg' => $_POST['msg'],
        'username' => $_POST['username']
    ]);
}
header("Location: index.php?limit=$limit");
/*
    1. check that the user input a message AND username
        2. Connect to the DB
        3. Prepare an INSERT query
        4. Execute it, passing in the $_POST data
    5. header('Location: index.php');
*/