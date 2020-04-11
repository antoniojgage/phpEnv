<?php
$myName = $_ENV["USER"];
$lorisMiddleName = $_ENV["heyLori"];
?>
<html>

<head>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <title>My Page</title>
</head>

<body>
    <h2>Your variable was <?php echo $myName; ?></h2>
</body>
<script>
    var lorisMiddleName = <?php
                            $_ENV["heyLori"];
                            ?>
</script>
<script>
    $(document).ready(function() {
        console.log("ready!");
        console.log(lorisMiddleName)
    });
</script>

</html>
