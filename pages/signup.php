<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up Page  </title>
    <link rel="stylesheet" href="signup.css">
     
</head>
<body>
    <div class="signform">

        <form action ="test.php" method="post" class="form" >
          <h1 class="title">Create An account</h1>
    
          <div class="inputContainer">
            <label for="name" class="label">Username</label>
            <input type="text" id="name" name="name" class="input" placeholder="Username">
          </div>
    
          <div class="inputContainer">
            <label for="password" class="label">Password</label>
            <input type="text" id="password" name="password" class="input" placeholder="password">
          </div>
    
          <div class="inputContainer">
            <label for="confirm" class="label">Confirm Password</label>
            <input type="text"id="confirm" name="confirm" class="input" placeholder="Confirm password">
          </div>
          <button class="submitBtn">Sign up</button>
          <!--<input type="submit" class="submitBtn" value="Sign up">-->
        </form>
      </div>
</body>
</html>