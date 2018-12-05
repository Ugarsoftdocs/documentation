<?php
require_once('ProjectFile.php');



$change = new ProjectFile;


$change->addcolumn(['project_file_type' => 'VARCHAR'], " after project_note_id");


