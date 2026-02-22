<html>
<body>

Name: <?php echo $_POST["name"]; ?><br>
Surname: <?php echo $_POST["surname"]; ?><br>
Street: <?php echo $_POST["street"]; ?><br>
House number: <?php echo $_POST["house_no"]; ?><br>
Apartment number: <?php echo $_POST["apt_no"]; ?><br>
City: <?php echo $_POST["city"]; ?><br>
Post-code: <?php echo $_POST["post-code"]; ?><br>
Year of birth: <?php echo $_POST["yob"]; ?><br>
Your age is: 
        <?php 
        $yob=$_POST["yob"];
        $a=date("Y"); 
                echo ($a-$yob); ?><br>
        
</body>
</html>