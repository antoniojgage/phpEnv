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
                            empty($_ENV["heyLori"]) ? "I cant be empty" : $_ENV["heyLori"];
                            ?>
    var x = "<?php echo $_ENV["USER"] ?>";
    console.log(x)
</script>
<script>
    $(document).ready(function() {
        console.log("ready!");
        console.log("Lori's Middle Name", lorisMiddleName)
    });
</script>

</html>
