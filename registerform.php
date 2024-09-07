<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>form</title>
    <link rel="stylesheet" href="form1.css">

</head>
<body >
    <div class="main">
        <div class="register">
            <h2>register here</h2>
        
            <form id="registre"  action="regProcess.php" method="POST">
       
    
                    <label for=""> firts name  </label> <br>
                    <input type="text" name="firstName" id="name" placeholder="enter your first name">
                     <br> <br>

                
                    <label for="">  last name </label> <br>
                    <input type="text" name="lastName" id="name" placeholder="enter your last name">
                     <br> <br>
                

                
                     <label for="">  email address  </label><br>
                    <input type="text" name="email" id="name" placeholder="enter your valid email">
                    <br> <br>

                    <label for=""> password </label> <br>
                    <input type="pasword" name="password" id="name" placeholder="enter password">
                    <br> <br>
                

                
                    <label for="">  confirm password </label> <br>
                    <input type="pasword" name="conpassword" id="name" placeholder="re-enter pasword">
                    <br> <br>
            
              
                   

                    <label>  Gender </lable>
                    <br>
                    &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender"  value="male"  id="male">
                    &nbsp;
                    <span id="male"> <i> Male </i> </span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender"value="female"  id="female">
                    &nbsp;
                    <span id="female">Female</span>
                    <br><br>
                  
                    <button type="submit" name="submit" class="btn">submit</button>
                    
                    <!-- <input type="submit"  value="submit" class="btn" src="registerform.php> -->
            </form>
        </div>
    </div>
    <!-- <form action="regProcess.php" method="POST">
    <input type="text" name="firstName" id="name" placeholder="enter your first name">
    <input type="text" name="lastName" id="name" placeholder="enter your last name">
    <input type="text" name="email" id="name" placeholder="enter your valid email">
    <input type="pasword" name="password" id="name" placeholder="enter password">
    <button type="submit" name="submit" >submit</button>

</form> -->



</body>
</html>