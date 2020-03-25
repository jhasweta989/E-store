<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
     <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lifestyle Store</title>
        <link rel="stylesheet" href="style.css" >
    </head>
    <body>
       <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.html">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
         <div id="content">
            <div id="inner-content">
                <div id="inner">
                    <h1> Sign Up </h1>
                    <form >
                        <div class="form-group">
                           
                            <input type="text"  class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                          
                            <input type="text"  class="form-control" name="email" id="email" placeholder="Email">
                        </div>

                       <div class="form-group">
                           <input type="text" class="form-control" name="passward" id="passwoard" placeholder="passward">
                        </div>
                        <div class="form-group">
                          
                            <input type="number"  class="form-control" name="contat" id="contact" placeholder="Contact">
                        </div>
                        <div class="form-group">
                          
                            <input type="text"  class="form-control" name="city" id="city" placeholder="City">
                        </div>
                        <div class="form-group">
                          
                            <input type="text"  class="form-control" name="add" id="add" placeholder="Address">
                        </div>
                        <input type="submit" value="Submit" class="btn btn-primary btn-block">
                    </form>
                </div>
            </div>
         </div>
                <footer>
            <div id="contain">
            <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
            </div>
        </footer>   
    </body>
</html>
