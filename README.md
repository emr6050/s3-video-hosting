# s3-video-hosting

### Prerequisites
* [xampp](https://www.apachefriends.org/index.html)
* [composer](https://getcomposer.org/)
* Clone the repo and move its contents into ```C:\xampp\htdocs\s3\```

### Add aws-sdk-php
[newwinlogo]: http://i.stack.imgur.com/B8Zit.png
* Open a command-line terminal
** <kbd>![Windows Key][newwinlogo]</kbd> + <kbd>R</kbd>
** Type ```cmd``` and click ```OK```
* Navigate to the location of your code
** ```C:\xampp\htdocs\s3\```
* Run ```composer install``` to configure the program with the [AWS SDK for PHP](https://github.com/aws/aws-sdk-php).
** The dependency is created by composer.json.

## Update config.php
* Replace the fields in app/config.php with the correct information for your AWS instance

### Run the code
* Open the XAMPP Control Panel (C:\xampp\control-panel.exe)
* Start Apache
** If errors come up, change the port configuration from 80 to 8080.
* In your browser, go to ```localhost:80/s3/```
** or ```localhost:8080/s3/``` if you changed the config.
* Try out any of the scrips you see! :)

## [source](https://www.youtube.com/playlist?list=PLfdtiltiRHWE0uv1ZEL5d3Jt4i3qU-607)

