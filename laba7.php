<?php
require __DIR__.'/product.php';
require __DIR__.'/client.php';
$person = new Client();
$person -> create("Елена", "Тушь", 1500);
$person -> about_client();
echo "<br>";echo "<br>";
$item = "Подводка";
$person -> last_order($item);
echo "<br>";echo "<br>";
$person -> monyee(500);
echo "<br>";echo "<br>";
$person -> about_client();
echo "<br>";echo "<br>";
$phone = new Product();
$phone -> new_information("Dolchi Milk", "Описание Съели", "Made in China", 2500);
$phone -> about_product();
echo "<br>";echo "<br>";
$phone -> new_cost(2000);
echo "<br>";echo "<br>";
$phone -> about_product();
?>