<?php

require_once('Project.php');
require_once('User.php');
require_once('Role.php');

$user = new User;
$role = new Role;
$project = new Project;

$user->create();
$role->create();
$project->create();
