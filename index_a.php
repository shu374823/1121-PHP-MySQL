<?php
$dsn="mysql:host=localhost; charset=utf8; dbname=student";
$pdo= new PDO($dsn, 'root', '');

$sql= "SELECT * FROM students limit 1";

$row= $pdo-> query($sql)-> fetch();

echo "<pre>";
print_r($row);
echo "</pre>";

echo "<br>";
echo $row['name'];
echo "<br>";
echo $row[3];

// SET PDO KET_NAME
$row= $pdo-> query($sql)-> fetch(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($row);
echo "</pre>";

echo "<br>";
echo $row['name'];
echo "<br>";
echo $row[3];

// SET PDO LIST_NUMBER
$row= $pdo-> query($sql)-> fetch(PDO::FETCH_NUM);

echo "<pre>";
print_r($row);
echo "</pre>";

echo "<br>";
echo $row['name'];
echo "<br>";
echo $row[3];