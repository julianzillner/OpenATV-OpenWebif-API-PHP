<?php
$url = "http://192.168.178.111/api/statusinfo";
$json = file_get_contents($url);
$data = json_decode($json, true);
$currservice_station = $data['currservice_station'];
?>
<!DOCTYPE html>
<html lang="de">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenWebif Status</title>
  </head>
  <body>
    <h1>OpenWebif Status:</h1>
<?php
echo $currservice_station;
?>
  </body>
</html>
