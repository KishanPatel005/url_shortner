<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css">
</head>
<body>
<?php
$con=mysqli_connect('localhost','root','','shortner');


function showAlert($title, $message, $type) {
    echo "<script>
            swal({
                title: '$title',
                text: '$message',
                icon: '$type',
                button: 'OK'
            });
          </script>";
}

if(!isset($_GET['l'])){
    showAlert("Error", "First enter a URL in the search bar.", "error");
    echo "<h1>Example: http://localhost/url_shortner/yourshorturl</h1>";
    echo "<h6>URL can be your domain name or anything</h6>";
} else {
    foreach($_GET as $key=>$val){
        $l = mysqli_real_escape_string($con, $key);
        $l = str_replace('/', '', $l);
    }
    $res = mysqli_query($con, "SELECT link FROM shorturl WHERE short_link='$l' AND status='1'");
    $count = mysqli_num_rows($res);
    if($count > 0){
        $row = mysqli_fetch_assoc($res);
        $link = $row['link'];
        mysqli_query($con, "UPDATE shorturl SET hit_count=hit_count+1 WHERE short_link='$l'");
        header('location:'.$link);
        die();
    } else {
        showAlert("Error", "URL not found.", "error");
    }
}
?>
	
	</body>
</html>
