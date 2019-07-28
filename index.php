<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ung dung tu dien don gian</title>
</head>
<style type="text/css">
    input {
        margin: 10px;
        padding: 10px;
        background-color: lightblue;
        border: #ff281e;
        border-radius: 20px;
    }


</style>
<body>

<h1>
    <th>Tu dien ANH-VIET</th>
</h1>

<form method="post">
    <input type="text" name="search" placeholder="Nhap tu can tim vao o        O--- ">
    <input type="submit" id="submit" value="Tim tu">
</form>

<?php
$dictionary = array("hello" => "Xin chao", "like" => "Thich", "good" => "Tot", "name" => "Ten", "green" => "Mau xanh", "red" => "Mau do");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"];
    $check = 0;
    foreach ($dictionary as $word => $value) {
        if ($word === $searchword) {
            echo "Tu: $word<br/> Co nghia la: $value";
            $check = 1;
        }
    }

    if ($check == 0) {
        echo "Khong tim duoc tu can tra !";
    }
}


?>
</body>
</html>

