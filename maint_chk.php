<?php
/*-----------------INFORMATION & LICENSING-----------------
 *      AUTHOR: Christopher Sparrowgrove | CodeStrm 
 *     WEBSITE: https://CodeStrm.com
 *        NAME: BullFrog | PHP Hypertext Processor (PHP)
 * DESCRIPTION: Checks Operating status of website displaying the aproperate page
 *   COPYRIGHT: ©Copyright 2012-2022 - All Rights Reserved  
 */


###########CONFIGURATION###########
$Home_Page = "home.php"; //Default Home page
$Maint_Page = "maintenance.php"; //Maintence page
$Error_Page = "404.php";

#$server_status = $_SESSION['status']; //Set server status as a variable 
$server_status = "1";

#SERVER STATUS MEANINGS & CODES
# Code 1: Under Construction 
# Code 2: Offline (Shutdown) [TODO: Beta Testing Maybe? Via IP Filter]
# Code 3: Offline (Connect Error)

 switch($server_status)
 {
  case 0: //Operating Normaly
   include($Home_Page);
   break;
  
  case 1||2||3: //Down for maintenance, construction, or offline
   include ($Maint_Page);
   break;
  
  default: //invalid or no status set
   include ($Error_Page);
   break;
 }

?>
