<?

use Aws\S3\Exception\S3Exception;

require 'app/start.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>EMR6050 Video Management</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="author" content="Peter Dobbs">
    </head>

    <body>
      <img style="width:50%;max-width:200px" src="img/logo_light.png" alt="main logo">
      
      <h1>Welcome to EMR6050 Video Management</h1>

      <section class="instructions">
        <h2>What's Next?</h2>
        <ul>
          <li><a href="https://emr6050.net/video/index.html">Capture Video</a></li>
          <li><a href="./upload.php">Upload to S3 Bucket</a></li>
          <li><a href="./listing.php">View S3 Bucket Listing</a></li>
        </ul>
      </section>
    </body>
</html>
<? 
} 
?>
