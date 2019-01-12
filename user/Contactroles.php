<?php
require_once('../model/User.php');
$rrole = new User();
$rrole->isAuthenticatedd();

require_once('authentication.php');
//content code
require_once('contactRolescode.php');
require_once('topbar.php');
require_once('sidebar.php');
//Main content
require_once('mainContactroles.php');
require_once('footer.php');
require_once('footerScripts.php');
?>