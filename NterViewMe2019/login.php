<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <script src="js/vendor/jquery-1.11.2.min.js" type="text/javascript"></script>
         <script src="js/vendor/bootstrap.js" type="text/javascript"></script>
         <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="form-row justify-content-center">
        <div class="main-form">
            <form class="" method="post" action="login_validation.php" autocomplete="off">

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Enter Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon" ><i class="glyphicon glyphicon-lock"  style="color:#93B7BE" aria-hidden="true"></i></span>
                            <input type="email" class="form-control" name="email" id="email" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon" ><i class="glyphicon glyphicon-lock"  style="color:#93B7BE" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password" id="password" />
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <input type="submit" id="registration" value="Log in">
                </div>
            </form>
        </div>
    </div>
        
        
    </body>
</html>
