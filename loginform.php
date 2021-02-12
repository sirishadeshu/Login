<!DOCTYPE HTML>
<html>
<head>
<title>Welcome to Jothishi</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
.center {
  margin: auto;
  width: 50%;
  border: 3px solid #73AD21;
  padding: 40px;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  background-color: #45a049;
  width:10%;
   margin: 0;
  position: absolute;
  top: 70%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}


</style>
</head>
<body>

<form class="center" action="setup.php">
<i class="fas fa-heart" style="font-size:36px; margin:10px;" >Welcome to Jothishi</i><br><br>
<label for="email">Email Address</label>
<input type="text" name="email" id="email"><br>

<label for="fname">First Name</label>
<input type="text" name="fname" id="fname" ><br>

<label for="lname">Last Name</label>
<input type="text" name="lname" id="lname" ><br>

<label for="password">Password</label>
<input type="Password" name="password" id="password" value="password"><br>
 
<label for="dob">Date of birth</label>
<input type="date" name="dob" id="dob" value="dob"><br>

<div align="center">
<button class="button" type="submit" name="save" value="submit"  style="vertical-align:middle"><span>Submit</span></button></div>
</form>

</body>
</html>