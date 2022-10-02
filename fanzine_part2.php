<?php
    if(isset($_GET['send']) && $_GET['send']){
        // Verifica si se presiono enviar y se selecciono una materia
        if(isset($_GET['subject'])){
            $_SESSION['newsession'] = $_GET['subject'];
            // after of get the theme or subject, it opens a new page for the next step
            echo $_SESSION['newsession'];
        }else{
            echo "<center> 
                    <br><br>
                    <h3>You need to choose one subject above</h3>
                    </center>";
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 2</title>
</head>
<body>
    <center>
        <h1>Step 2</h1>
        <br><br>
        <h2>Template Selection</h2>
        <br><br>
        <?php
            
        ?>
        <form action="/" method="get">
            <!-- it gona make the selection -->
            <input type="radio" name="subject" id="1" value="sub1">
            <label for="sub1"> Template 1 </label> <br>
            <input type="radio" name="subject" id="2" value="sub2">
            <label for="sub2"> Template 2 </label> <br>
            <input type="radio" name="subject" id="3" value="sub3">
            <label for="sub3"> Template 3 </label> <br>
            <input type="radio" name="subject" id="4" value="sub4">
            <label for="sub4"> Template 4 </label> <br>

            <br><br>
            <input type="submit" value="Send" name="send">
        </form>
    </center>
</body>
</html>