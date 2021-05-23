<?php

function get_youtube_channel_ID($url){
  $html = file_get_contents($url);
  preg_match("'<meta itemprop=\"channelId\" content=\"(.*?)\"'si", $html, $match);
  if($match && $match[1]);
  return $match[1];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Get Youtube Channel ID</title>
  </head>
  <body>
  	<div class="container text-center">
    <h1 class="m-5">Get Youtube Channel ID</h1>
   <form method="POST">
    	<input type="text" name="url" class="form-control">
    	<div class="text-center">
    	<input type="submit" name="btn" class="btn btn-info m-4" value="Generator">
   		</div>
    </form>
    <?php 
   if(isset($_POST['btn'])){
   	$check1 =  htmlentities($_POST['url']);
    $check2 =  htmlspecialchars($check1);
    $urlx = $check2;

    echo '<b>Channel ID = </b> -> '.get_youtube_channel_ID($urlx);
    }  
    ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

  
  </body>
</html>
