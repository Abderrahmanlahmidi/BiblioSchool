<?php

require "../config/database.php";
require "../Models/role.php";

$db = new Database();

$role = new Role($db->getConnection());

var_dump($role->getAllRoles());




?> 