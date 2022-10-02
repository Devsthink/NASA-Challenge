<?php
    session_start();
    $value = 0;
    $_SESSION['newsession'] = $value;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 1</title>
</head>
<body>
    <center>
        <h1>Step 1</h1>
        <br><br>
        <h2>Choose one subject above</h2>
        <br>
        <form action="./fanzine_part1.php" method="get">
            <!-- it gona make the selecction -->
            <input type="radio" name="subject" id="1" value="sub1">
            <label for="sub1"> Theme 1 </label> <br>
            <input type="radio" name="subject" id="2" value="sub2">
            <label for="sub2"> Theme 2 </label> <br>
            <input type="radio" name="subject" id="3" value="sub3">
            <label for="sub3"> Theme 3 </label> <br>
            <input type="radio" name="subject" id="4" value="sub4">
            <label for="sub4"> Theme 4 </label> <br>

            <br><br>
            <input type="submit" value="Send" name="send">
        </form>
    </center>
</body>
</html>

<?php
    if(isset($_GET['send']) && $_GET['send']){
        // Verifica si se presiono enviar y se selecciono una materia
        if(isset($_GET['subject'])){
            $_SESSION['newsession'] = $_GET['subject'];
            // after of get the theme or subject, it opens a new page for the next step
        }else{
            echo "<center> 
                    <br><br>
                    You need to choose one subject above
                    </center>";
        }
    }
?>