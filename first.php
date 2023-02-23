<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  

    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Rock+Salt" />
    <script language="JavaScript" src="myscripts.js"></script>
    <style>
<?php include 'style.css'; ?>
</style>
</head>


<body>
   <!-- NAVBAR -->
   <div class="container-fluid contain-nav ">
        <nav id="navbar_top "class="navbar navbar-expand-lg navbar-light navbar-static-top ">
            <div class="container-fluid">
                
                    <a class="navbar-brand float-md-start" href="#">
                        <img src="images/logo.png" class="me-2 " height="100"
                          alt="MDB Logo" loading="lazy" /></a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class=" float-sm-left navbar-nav">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="" class="nav-item nav-link">Events</a>
                        <a href="#" class="nav-item nav-link">Gallery</a>
                        <a href="leadership.html" class="nav-item nav-link">Leadership</a>
                        <a href="#" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="navbar-nav  ms-auto">
                        <a href="#" class="nav-item nav-link">Donate</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>


       <div class="container-fluid form_php">
         <h1 class="text-center">Fill in your details</h1>

         
         <form action="insert.php" method="post">
         
             
              <p>
               <label for="firstName">First Name:</label>
               <input type="text" name="first_name" id="firstName">
               <span class="error">*</span>
            </p>
            <p>
               <label for="lastName">Last Name:</label>
               <input type="text" name="last_name" id="lastName">
               <span class="error">*</span>
            </p> 
              <p>
               <label for="Address">Residential area:</label>
               <input type="text" name="address" id="Address">
               <span class="error">*</span>
            </p>
        <p><label for="phone">Phone number</label>
        <input type="tel" id="phone" name="phone">
     
       <span class="error">*</span>
      </p>
      <p>
      <label for="age">Age:</label>
  <input type="number" id="age" name="age">
  <span class="error">*</span>
</p>


</p>
 
            <input type="submit" value="Submit" id="form_submit">
         </form>
</div>
    
</body>
</html>