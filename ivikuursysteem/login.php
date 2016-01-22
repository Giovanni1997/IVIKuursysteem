<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>

<h1 id="Title" style="text-align: center;">Welkom!</h1>
<img class="img-responsive center-block" class="row text-center" src="images/Logo%20IVIK.png">

<br>

<div class="container">    
        
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        
        <div class="panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title text-center">Login</div>
            </div>     

            <div class="panel-body" >

                <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
                   
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="user" type="text" class="form-control" name="user" value="" placeholder="User">                                        
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
                    </div>                                                                  
                    <br>
                    <div class="form-group">
                        <div class="col-sm-12 controls">
                            <button type="submit" href="#" class="btn btn-warning btn-block"><i class="glyphicon glyphicon-log-in"></i> Log in</button>                          
                        </div>
                    </div>
                    <div class="etc-login-form" style="text-align: center;">
				<p>Forgot your password? <a href="#">click here</a></p>
				<p>New user? <a href="#">create new account</a></p>
			</div>
                </form> 
                        </div>                     
        </div>  
    </div>
    
    <!--<img class="img-responsive" src="images/ivikgroep.jpg">-->
    
</div>    
</body>
</html>    


<?php

session_start(); 

$sGebruikerControle = 'Giovanni'; 
$sWachtwoordControle = '1022922'; 

if($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 

    if(isset($_POST['user'], $_POST['password'])) 
    {     

        $sGebruiker = trim($_POST['user']); 
        $sWachtwoord = trim($_POST['password']); 
    }

        if($sGebruiker == $sGebruikerControle && $sWachtwoord == $sWachtwoordControle) 
        { 

            $_SESSION['logged_in'] = true; 
            $_SESSION['gebruiker'] = $sGebruiker; 
             
 
            header('Location: home.php'); 
            echo 'Je bent succesvol ingelogd. Je wordt doorgestuurd.'; 
        } 
        else 
        { 

            header('Refresh: 300; url=login.php'); 
            echo 'Deze combinatie van gebruikersnaam en wachtwoord is niet juist!'; 
        } 
}
?>
