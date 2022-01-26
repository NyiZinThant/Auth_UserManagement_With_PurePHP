<?php
session_start();

include('../vendor/autoload.php');
use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$email = $_POST['email'];
$password = md5($_POST['password']);

$table = new UsersTable(new MySQL());

$user = $table->findByEmailAndPassword($email, $password);

if($user){
    if($table->suspended($user->id)){
        HTTP::redirect("/index.php", "suspended=1");
    }
    $_SESSION['user'] = $user;
    HTTP::redirect("/profile.php");
}else{
    HTTP::redirect("/index.php", 'incorrect=1');
}