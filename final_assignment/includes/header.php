<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
<div class="navbar navbar-inverse navbar-fixed-top"> 
    <div class="container">    
        <div class="navbar-header">   
            <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar"> 
                <span class="icon-bar"></span>  
                <span class="icon-bar"></span>          
                <span class="icon-bar"></span>             
            </button>         
            <a class="navbar-brand" href="index.php">Lifestyle Store</a> 
        </div>       
        <div class="collapse navbar-collapse" id="myNavbar">   
            <ul class="nav navbar-nav navbar-right">     
            <?php              
            if (isset($_SESSION['email'])) {  ?>
                <li><a href = "cart.php"><span class = "glyphicon glyphicon-shoppingcart"></span> Cart </a></li>        
                        <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>        
                        <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>                  
                        ?>      
               <?php } else {  ?>                     
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>        
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"> </span> Login</a></li>  
                        <li><a href = "logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
                        <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>        
                        <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>   
  <?php } ?>       
            </ul>       
        </div>  
    </div> 
</div> 
  </body>
</html>


