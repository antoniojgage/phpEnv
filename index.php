<?php
echo 'My username is ' .$_ENV["USER"] . '!';
?>
<?php
$myName = .$_ENV["USER"];
?>
<html>
<head>
<title>My Page</title>
</head>
<body>
<h2>Your variable was <?php echo $myName; ?></h2>
</body>
</html>
