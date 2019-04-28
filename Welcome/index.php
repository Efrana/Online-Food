<?php
   session_start();
   if(isset($_SESSION['login_user'])){
?>
<!DOCTYPE html>
<html>
    <head>
	<title>Welcome <?php echo $_SESSION['login_user'];?></title>
           <meta charset="utf-8">

       <style>
    body {
    background-image: url("paper.jpg");  
}
h1 {
          color:darkred;
         }
              body {
          color:black;
         }
    .button{
    background-color: maroon;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration:white;
    display: inline-block;
    font-size: 20px;
    margin:10px auto;
    float:left;
    
   

    }

div {
    border: 1px  lightsalmon;
    margin-top: 0px;
    margin-bottom: 50px;
    margin-right: 0px;
    margin-left: 0px;
    
   
   
}

div.gellery {
    margin: 0px 0px 0px 0px;
    border: 1px lightsalmon;
    width: 200px;
}
div.new {
    margin: 5px;
    border: 1px solid white;
    width: 500px;
    
}
   

div.gallery {
    margin: 5px;
    border: 1px lightsalmon;
    float: left;
    width: 320px;
}

div.gallery:hover {
    border: 1px solid darkred;
}


div.gallery img {
    width: 100%;
    height: auto;
}
div.desc {
    padding: 15px;
    text-align: center;
}
</style>
    </head>
    <body>
        <h1>RESTAURANT</h1>
             <a href="http://localhost/Onlinefood/register/index.php" class="button">HOME</a>
            <a href="http://localhost/Onlinefood/Welcome/index.php" class="button">RESTAURANT</a>
            <a href="http://localhost/Onlinefood/Welcome/index.php" class="button">CONTACT</a>
            <a href="http://localhost/Onlinefood/Welcome/index.php" class="button">ABOUT</a>
	<p align="Right"><form  action ="logout.php" method ="POST">
            <table>
                <td></td>
                    <td><input type="submit" class="button" value="Logout"></td> 
                </tr>
              </table>
 
        </form>
		</p>
        <form  action ="menu.php" method ="GET">
            <div
            <tr>
                <td></td>
                <td><input type="submit" name="R_name" value="Gloria Jeans"></td>

            </tr>
            </div>
            <div
            <tr>
                <td></td>
                
                 <td><input type="submit" name="R_name" value="Pizza Hut"></td>
                 
                 
            </tr>
            </div>
            <div
           
            <tr>
                <td></td>
               
                  <td><input type="submit" name="R_name" value="Pasta State"></td>

            </tr>
            </div>
            
        </form>

    </body>  
</html>
<?php 
}
else{
header ("Location: ../register/index.php");
}
?>


