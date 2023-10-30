<?php
$url = "http://192.168.178.111/api/statusinfo";
$json = file_get_contents($url);
$data = json_decode($json, true);
$currservice_station = $data['currservice_station'];
$currservice_name = $data['currservice_name'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenWebif Status</title>
  </head>
  <body>
  <div class="p-3 mb-2 bg-black text-white">OpenWebif Status by Julian Zillner</div>
  <div class="container main-container">
    <h2>Current Station: <span class="badge bg-secondary"><?php echo htmlentities($data['currservice_station']); ?></span></h2>
<h4><?php echo htmlentities($data['currservice_name']); ?></h4>
<p><?php echo htmlentities($data['currservice_fulldescription']); ?><br><br>
<?php echo htmlentities($data['currservice_begin']); ?>-<?php echo htmlentities($data['currservice_end']); ?></p>
</div>
<div class="p-3 mb-2 bg-black text-white"></div>
  </body>
</html>
