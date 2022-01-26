<?php
include('../vendor/autoload.php');
use Libs\Database\UsersTable;
use Libs\Database\MySQL;
use Helpers\Auth;
use Helpers\HTTP;

$auth = Auth::check();
$table = new UsersTable(new MySQL());

$role = $_GET['role'];
$id = $_GET['id'];
$table->changeRole($id, $role);

HTTP::redirect('/admin.php');