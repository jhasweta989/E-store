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
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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
                         <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="setting.html"><span class="glyphicon glyphicon-wrench"></span> Setting</a></li>
                         <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
         <div id="content">
            <div id="inner-content">
                <div id="inner">
                    <h1> Change Passward</h1>
                    <form >
                        <div class="form-group">
                           
                            <input type="text"  class="form-control" name="Old passward" id="Old passward" placeholder="Old Passward">
                        </div>
                        <div class="form-group">
                          
                            <input type="text"  class="form-control" name="New passward" id="passward" placeholder="New Passward">
                        </div>

                       <div class="form-group">
                           <input type="text" class="form-control" name="New passward" id="passwoard" placeholder="Retype Passward">
                        </div>
                       
                        <input type="submit" value="Change" class="btn btn-primary btn-block">
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

