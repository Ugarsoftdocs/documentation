<?php
require_once('HistoryLog.php');



$change = new HistoryLog;


$change->dropcolumn( "drop created_by" );


