<?php
require '../../config/keys.php';
require '../../core/db_connect.php';
require '../../core/session.php';
checkSession();


$meta=[];
$meta['title']="Safdar Blog";

$content="<h1>List of Users</h1>";
$stmt = $pdo->query('SELECT * FROM users');

while($row = $stmt->fetch()){
$content .= "<div><a href=\"view.php?id={$row['id']}\">{$row['first_name']}{$row['last_name']}</a></div>";
}

$content .= "<br><hr><div><a href=\"add.php\">New User</a></div><br>";

require '../../core/layout.php';
