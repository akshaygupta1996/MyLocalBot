<?php

include 'GetMessage.php';
$access_token = "EAAZA9ubG2IzEBACr7M16u3GeZAl659txHVhxQpsm4SrZA5ZB4hId2LuYWUxFKk5XPIaaZA1ZAIIJsyXpcFNnEvhlGUF5DoHZBM5vDbcn2q4MPZCi2OdvZBQwo1kejpeHekokMGUpSdlo7mmcEO7dRZCyT42X0OEN2hmd5ulzr42wwuIQZDZD";
$verify_token = "planyourtour";
$hub_verify_token = null;
 
if(isset($_REQUEST['hub_challenge'])) {
    $challenge = $_REQUEST['hub_challenge'];
    $hub_verify_token = $_REQUEST['hub_verify_token'];
}
 
 if ($hub_verify_token === $verify_token) {
    echo $challenge;
}

$input = json_decode(file_get_contents('php://input'), true);

$sender = $input['entry'][0]['messaging'][0]['sender']['id'];
$message = $input['entry'][0]['messaging'][0]['message']['text'];


GiveReply($sender,$message,$access_token);
?>