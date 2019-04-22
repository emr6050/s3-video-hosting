<?php

require 'app/start.php';

$object = '';
$expiry = new DateTime('+10 minutes');

// currently using signed URLs, need to work on signed cookies
$url = $cloudfront->getSignedUrl([
    'url' => "{$config['cloudfront']['url']}/{$object}",
    'expires' => $expiry->getTimestamp()
]);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Video</title>
    </head>
    <body>
        <video controls width="768">
            <source src="<?php echo $url; ?>" type="video/mp4">
        </video>
    </body>
</html>