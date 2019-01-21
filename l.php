<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
    <style type="text/css">
form{
text-align: center;
font-size: 25px;

}    
.one{
  margin-left: 460px;
  margin-top: 170px;
  background-color: rgba(0,0,0,0.3);
  height: 370px;
  color: white;
  width: 400px;

}

legend{
  margin-left: 135px;
  margin-bottom: 18px;
  padding-top: 20px;
  font-size: 50px;
  font-family: serif;
}
body{
  background-image: url("pic3.jpg");
  background-size: cover;
}



  </style>

</head>
<body>
<div class="one" >
       <form action="l1.php" method="post">
                
                           <legend> <b> Log in </b> </legend> 
                                

                                  <label for="uid"> ID </label><br/>
                                  <input type="email"   name="uid" size="45" maxlength="20" required=""><br>
                                  <label for="pwd"> Password</label><br/>
                                  <input type="Password" name="pwd" size="45" maxlength="20" required=""  ><br>
                              
                                  
              <br>
                       
                <input type="submit" value="Submit now">
                <input type="reset" value="Clear now"><br>
                <a href="index.php" style="text-align: center;"><button type="button">Sign up</button></a>
            </form>
</div>
</body>
</html>