<?php $host = 'mysql:host=localhost;dbname=notaire';
$userNameDb = 'root';
$passwordDb = '';

try{
    $bd = new PDO($host, $userNameDb, $passwordDb);
} catch(PDOException $e) {
    echo 'erreur '.$e->getMessage();
}
?>