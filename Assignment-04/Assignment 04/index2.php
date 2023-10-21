<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My First Website </h1>
    <p>
    <?php 
    $myName = "Team Passerelle 2023";
    $teacher = $_REQUEST['teacher'];
    $student = $_REQUEST['student'];
    echo("hello $myName");
        ?>
        <br/>
        <hr/>
        <?php
        echo($_SERVER['SERVER_NAME']);
        ?>
        <br/>
        <hr/>

        The Teacher is <?php 
        echo($teacher);
        ?>
         <br/>
        <hr/>The Student is <?php echo( $student);?>
        <hr/>
        <p>
        The teacher of <?php( $student );?> is <?php echo($teacher);?>

        </p>
        <a href ="webd04.html">Voting form</a>
    </p>
</body>
</html>