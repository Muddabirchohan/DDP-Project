<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
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
  margin-left: 120px;
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
<div class="one">
       <form action="s1.php" method="post">
               
                          <div> <legend> <b> Sign up</b>  </legend> </div>
                                  <label for="name"> Name </label><br/>
                                  <input name="name" type="text" maxlength="20" size="45"><br/>

                                  <label for="uid"> ID </label><br/>
                                  <input type="email"   name="uid" size="45" maxlength="20" required=""><br>
                                  <label for="pwd"> Password </label><br/>
                                  <input type="Password" name="pwd" size="45" maxlength="20" required=""  ><br>
                                  <label for="city"> city </label><br/>
                                  <!-- <input type="text" name="city" size="45" maxlength="20" required=""  ><br> -->
                                  <select name="city">choose city
                                    <option value="karachi">karachi</option>
                                    <!-- <option value="lahore">lahore</option> -->
                                  </select>
                              
                                  
                <br/>

                       
                <input type="submit" value="Submit now">
                <input type="reset" value="Clear now"><br>
                <a href="l.php"  style="text-align: center;"><button type="button">Log in</button></a>
                <a href="async.php"  style="text-align: center;"><button type="button">async</button></a>
            </form>

</div>
</body>
</html>