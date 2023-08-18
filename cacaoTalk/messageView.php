<!-- 
    1. Write the HTML for a single comment
    2. If $message->id is EVEN, create a left-side comment
    3. If $message->id is ODD, create a right-side comment
    4. Echo the PHP data from the DB for that comment
        a. message
        b. username
        c. date & time
-->
<?php
include "db_connect.php";

if ($message->id % 2 === 0) {
    include "message_right.php";
} else {
    include "message_left.php";
}

?>