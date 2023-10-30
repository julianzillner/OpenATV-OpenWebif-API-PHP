# OpenATV - OpenWebif PHP Script

This is a Script, where you can create a Information Output in PHP. 

## Installation
The only thing what you have to do is, to put your IP Adress of the TV Box in the Code: 
```php
<?php
#Please put your OpenWebif IP here
$url = "http://192.168.178.111/api/statusinfo";
$json = file_get_contents($url);
$data = json_decode($json, true);
?>
```

Then put the index.php file on a php Webserver and you will see it works!