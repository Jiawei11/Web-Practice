<?php
    include_once('link.php');
    $title = $_GET['title'];
    $id = $_GET['id'];
    echo "<body align='center'>";
    echo "<form action='update.php' method='POST'>";
    echo "修改內容的序號為:" .$id .'<br>';
    echo "修改內容的標題為:" .$title .'<br>';
    echo "內容" . '<br>';

    echo "<input type='text' name='text'>";
    echo "<input type='submit'>";
    echo "<input type='reset'>";
    echo "<input type='hidden' name='id' value=$id";
    echo "</form>";
?>