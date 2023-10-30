<?php
#Please put your OpenWebif IP here
$url = "http://192.168.178.111/api/statusinfo";
$json = file_get_contents($url);
$data = json_decode($json, true);
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
  <div class="p-3 mb-2 bg-black text-white"><b>OpenWebif Status by Julian Zillner</b></div>
  <div class="container main-container"><br>
    <h2>Current Station: <span class="badge bg-secondary"><?php echo htmlentities($data['currservice_station']); ?></span></h2>
<h4><?php echo htmlentities($data['currservice_name']); ?></h4>
<p><?php echo htmlentities($data['currservice_fulldescription']); ?><br></p>
<p style="color:red"><b><?php echo htmlentities($data['currservice_begin']); ?>-<?php echo htmlentities($data['currservice_end']); ?></b></p>
</div>
<div class="p-3 mb-2 bg-black text-white"></div>
<div class="container main-container">
<h2>Another Details:</h2>
<p><b>Standby?</b> <?php echo htmlentities($data['inStandby']); ?>
    <br><b>Current Volume:</b> <?php echo htmlentities($data['volume']); ?>%<br>
    <b>Live recording:</b> <?php echo htmlentities($data['isRecording']); ?></p>
</div>
<div class="fixed-bottom">
<div class="p-3 mb-2 bg-black text-white"><center>Code by Julian Zillner</center></div>
  </body>
</html>
