
# Auth with PHP

This project is mainly focus on Auth and Authorization.


## Features
  - Register(Create Account)
  - Login
  - Profile Picture Upload
  - User Management(Admin)
  - Suspend
  - Logout

## Installation

Install my-project with git

```bash
  git pull https://github.com/NyiZinThant/Auth_UserManagement_With_PurePHP.git
```
    
## Database Setup
I'm using Mysql Database

Run below code to create database and table on Mysql cli, Phpmyadmin or Anyother database client
create database
```
CREATE DATABASE project;
```
create roles table
```
CREATE TABLE `project`.`roles` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `value` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```
insert roles
```
INSERT INTO `roles` (`id`, `name`, `value`) VALUES ('1', 'User', '1'), ('2', 'Manager', '2'), ('3', 'Admin', '3');
```
create users table
```
CREATE TABLE `project`.`users` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `phone` VARCHAR(255) NOT NULL , `address` TEXT NOT NULL , `password` VARCHAR(255) NOT NULL , `role_id` INT NOT NULL DEFAULT '1' , `photo` VARCHAR(255) NOT NULL , `suspended` INT NOT NULL DEFAULT '0' , `created_at` DATETIME NULL , `updated_at` DATETIME NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```
## Config
Open pulled/download respository or run command
```
cd Auth_UserManagement_With_PurePHP
```
***Go to following path***

Auth_UserManagement_With_PurePHP/_classes/Libs/Database

***or type below command***

```
cd _classes/Libs/Database
```

Now edit MySql.php with code editor or Ide

```
#your host(My host is localhost)
$dbhost = "localhost",
#your dbusername(if you are using xampp your dbuser is root)
$dbuser = "root",
$dbname = "project",
#your dbpassword(if you are using xampp you dbpass is empty)
$dbpass = "",
```

## Final
Setup is finish and enjoy!!
