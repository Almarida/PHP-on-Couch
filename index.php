<?php
$couch_dsn = "http://10.1.0.4:8091/";
$couch_db = "songs";
 
require_once "./lib/couch.php";
require_once "./lib/couchClient.php";
require_once "./lib/couchDocument.php";
 
 
$client = new couchClient($couch_dsn,$couch_db);
?>
try {
    $info = $client->getDatabaseInfos();
} catch (Exception $e) {
    echo "Error:".$e->getMessage()." (errcode=".$e->getCode().")\n";
    exit(1);
}
print_r($info);
