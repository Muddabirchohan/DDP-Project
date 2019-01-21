<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Alegreya:900" rel="stylesheet">
</head>
<style>
  body{
  
  }
    form{
        display: flex;
    width: 100%;
  
    flex-direction: column;
   
    
    }
    .form-control,button ,.form-group ~.form-check{
        width: 40% !important;
        margin-left: 25em !important;
    }
    
    .bg-light{
      background-color:#e5aa06 !important;
    }
    .navbar-light .navbar-nav .nav-link{
      color:lightyellow !important;
      font-size:1.1em;
     
    }
     
    .navbar-light .navbar-brand{
      font-weight:bold;
      font-family: 'Alegreya', serif !important;
    }    
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index1.html">FoodMania</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index1.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index1.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index1.html">Food Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="index1.html">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="index1.html">contacts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="index1.html">events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="create.html">create order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="order-display.php">Display order</a>
              </li>

          </ul>
        </div>
      </nav>
      <form action="order-place.php" method="post">
            <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Enter name" name="name">
                   
                  </div>
                  <div class="form-group">
                        <label for="exampleFormControlSelect1"></label>
                        <select class="form-control" id="exampleFormControlSelect1" name="area">
                            <option>select yoor area</option>
                          <option value="gulshan" >gulshan</option>
                          <option value="NorthNazimabad">NorthNazimabad</option>
                          <option value="Malir">Malir</option>
                          <option value="MarwariLines">MarwariLines</option>
                          <option value="ClinesF">ClinesF</option>
                        </select>
                      </div>
                      <div class="form-group">
                            <label for="exampleFormControlSelect1"></label>
                            <select class="form-control" id="exampleFormControlSelect1" name="quantity">
                                <option>select quantity</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                          </div>
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Enter drop off location" name="dpl">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="number" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter mobile number" name="mobile">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email address" name="email">
           
          </div>
        
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit"class="btn btn-dark">Submit</button>
      </form>
</body>
</html>