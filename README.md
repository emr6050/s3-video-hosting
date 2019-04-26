# s3-video-hosting

## setup

### Prerequisites
* [xampp](https://www.apachefriends.org/index.html)
* [composer](https://getcomposer.org/)
* Clone the repo and move its contents into ```C:\xampp\htdocs\s3\```

### Add aws-sdk-php
* Open a command-line terminal
** <kbd>![Windows Key][newwinlogo]</kbd> + <kbd>R</kbd>
** Type ```cmd``` and click ```Run```
* Navigate to the location of your code
** ```C:\xampp\htdocs\s3\```
* Run ```composer install``` to configure the program with the [AWS SDK for PHP](https://github.com/aws/aws-sdk-php).
** The dependency is created by composer.json.

### Run the code
* Open the XAMPP Control Panel (C:\xampp\control-panel.exe)
* Start Apache
** If errors come up, change the port configuration from 80 to 8080.
* In your browser, go to ```localhost:80/s3/```
** or ```localhost:8080/s3/``` if you changed the config.
* Try out any of the scrips you see! :)

## reference

[source](https://www.youtube.com/playlist?list=PLfdtiltiRHWE0uv1ZEL5d3Jt4i3qU-607)

