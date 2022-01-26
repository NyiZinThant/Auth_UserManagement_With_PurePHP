<?php
include('../vendor/autoload.php');
use Libs\Database\UsersTable;
use Libs\Database\MySQL;
use Helpers\Auth;
use Helpers\HTTP;

$auth = Auth::check();
$table = new UsersTable(new MySQL());

$id = $_GET['id'];
if($_SESSION['csrf'] === $_GET['csrf']){
    $table->delete($id);
}else{
    HTTP::redirect('/admin.php?error=failed');
}

HTTP::redirect('/admin.php');