<?php

require 'aws/aws-autoloader.php';

use Aws\Common\Aws;

// Path to custom config file
$aws = Aws::factory('dhdocreds.php');

$dhdo = $aws->get('DreamObjects');

// Your DreamObjects Bucket
$my_bucket = 'Your_Bucket_Name';

// List all items in a single bucket
$iterator = $dhdo->getIterator('ListObjects', array(
    'Bucket' => $my_bucket
));
foreach ($iterator as $object) {
    $url = $dhdo->getObjectUrl($my_bucket, $object['Key'], '+30 minutes');
    echo '<li> <a href="'. $url .'">'. $object['Key'] .'</a></li>';
}

?>
