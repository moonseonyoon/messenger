<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/74c73035c9.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="chat_log">
        <div class="chat">
            <img src="./images/silverwolf.jpg" alt="">
            <i class="fa-solid fa-chevron-right"></i>
        </div>
        <div class="chat">
            <i class="fa-solid fa-chevron-right"></i>
        </div>
        <div class="chat">
            <i class="fa-solid fa-chevron-right"></i>
        </div>
        <div class="chat">
            <i class="fa-solid fa-chevron-right"></i>
        </div>
        <div class="chat">
            <i class="fa-solid fa-chevron-right"></i>
        </div>
        <div class="chat">
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </div>
    <div>
        <h1>Astral Express Chat</h1>
        <div class="chat_box">
            <!-- STORING ALL MESSAGES IN DIV -->
            <?php
            // CONNECTING DB 
            include "db_connect.php";
            // SHOW MORE by 10
            include "show_more.php";

            foreach ($messages as $message) {
                include "messageView.php";
            }
            ?>
            <!-- SHOW MORE ANCHOR TAG -->
            <a href="./index.php?limit=<?= $limit; ?>">Show more</a>

        </div>
        <!-- FORM / CHATBOX -->
        <form action="insertMsg.php" method="POST">
            <div class="user">
                <p>
                    <label for="username">Username</label>
                    <input name="username" type="text" id="username">
                </p>
                <p>
                    <label for="msg">Message</label>
                    <input name="msg" type="text" id="msg">
                </p>
                <p>
                    <input type="submit" value="send">
                </p>
            </div>

        </form>
    </div>
</body>

</html>

<?php
// CacaoTalk PseudoCode

/* 
    1. Create a form action="insertMsg.php" method="POST"
        2. Create 2 inputs
            a. username
            b. message
        3. Create a Submit button

    4. Create a div container to hold all the messages
        5. Connect to the DB
        6. SELECT all the messages from the table
        7. fetch WHILE looping
            8. insert messageView.php
*/
