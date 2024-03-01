<?php
//This file works as controller, contains no view codes

//allow cors
header("Access-Control-Allow-Origin: *");

require_once '../../config.php';


// requiring the class files
require("../models/controlStatus.php");

$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

switch ( $action ) {
    case 'current_control_status':
        getcurrentControlStatus();
        break;
    
    default:
        exit;
}

function getcurrentControlStatus(){
	if($_SERVER["REQUEST_METHOD"] == "GET"){

        $control_status = ControlStatus::getcurrentControlStatus();
        echo (json_encode($control_status[0]['status'],JSON_FORCE_OBJECT));
        return;	
	}
}