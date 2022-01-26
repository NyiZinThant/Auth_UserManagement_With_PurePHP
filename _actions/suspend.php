<?php
include('../vendor/autoload.php');
use Libs\Database\UsersTable;
use Libs\Database\MySQL;
use Helpers\Auth;
use Helpers\HTTP;

$auth = Auth::check();
$table = new UsersTable(new MySQL());

$id = $_GET['id'];
$table->suspend($id);

HTTP::redirect('/admin.php');