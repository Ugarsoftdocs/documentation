<?php

require_once('Project.php');
require_once('User.php');
require_once('Role.php');
require_once('ProjectFile.php');
require_once('ProjectNote.php');
require_once('HistoryLog.php');
require_once('Notification.php');
require_once('Department.php');


$user = new User;
$role = new Role;
$project = new Project;
$projectfile = new ProjectFile;
$projectnote = new ProjectNote;
$historylog = new HistoryLog;
$notification = new Notification;
$department = new Department;

$user->create();
$role->create();
$project->create();
$projectfile->create();
$projectnote->create();
$historylog->create();
$notification->create();
$department->create();
