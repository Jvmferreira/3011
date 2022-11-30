<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
</head>
<style>
    .form{
        border-radius: 30px;
        background-color: black;
        margin-left: 350px;
        margin-right: 350px;
        text-align: center;
        justify-content: center;
        align-items:center;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        padding: 30px;
        color: #DAF2E3;
    }

    .inputs {
        padding: 5px;
        border-radius: 5px;
    }
    .body{
        background-image: url("imagem_netflix.jpg");
        background-position: cover;
        
    }
</style>
<body class="body">
    <div class="form">
    <h3>ENTRAR</h3>
        
    <form>
        <input type="text" id="num1" class="inputs" name="num1" required/>
<br/>
<br/>
        <input type="number" id="num1" class="inputs" name="num2" required/>
        <br/>
<br/>

            <br />
            <br />
    <input type="submit" value="ENTRAR"/>
            <br />
            <br />
            <!--<!-->
    
</form>
</div>
</body>
</html