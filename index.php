<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

         <h1>Storing Form data in Database</h1>
         <form action="insert.php" method="post">
             
<p>
               <label for="firstName">First Name:</label>
               <input type="text" name="first_name" id="firstName">
            </p>
 
             
<p>
               <label for="lastName">Last Name:</label>
               <input type="text" name="last_name" id="lastName">
            </p>
 
             
<!-- <p>
               <label for="Gender">Gender:</label>
               <input type="text" name="gender" id="Gender">
            </p>
  -->
             
<p>
               <label for="Address">Address:</label>
               <input type="text" name="address" id="Address">
            </p>
 
             
<p>
               <label for="emailAddress">Email Address:</label>
               <input type="text" name="email_address" id="emailAddress">
            </p>
 
            <input type="submit" value="Submit">
         </form>
    
</body>
</html>