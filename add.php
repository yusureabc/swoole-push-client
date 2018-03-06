<?php 
require './vendor/autoload.php';

use WebSocket\Client;

if ( isset( $_POST['send_data'] ) )
{
    $send_data = $_POST['send_data'];
    $client = new Client( "ws://192.168.214.130:9501" );
    $client->send( $send_data );
    echo $client->receive(); 
}