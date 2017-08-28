<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>


<div>
<form action="createinternprocess.php" method="POST"> 
<fieldset>
<legend> <b> Customer Information </legend> <br>

<b>First Name <input type="text" name="Firstname">
<b>Middle Name <input type="text" name="Middlename">
<b>Last Name <input type="text" name="Lastname">
<br> <br>

<b>Gender <br>
Male <input type="radio" name="Gender" value="Male">
Female <input type="radio" name="Gender" value="Female">
<br> <br>

<b>DOB <input type="date" name="DOB" placeholder="25-July-1992" size="54">
<br> <br>

<b>Phone <input type="phone" name="Phone" class="validate" placeholder="080" size="52">
<br> <br>

<b>Email <input type="email" name="Email" class="validate" placeholder="@gmail.com" size="53">
<br> <br>

<h4> HomeAddress </h4> <textarea name="Home_Address" rows="10" cols="55"> </textarea>
<br><br>

		<input type="submit" name="reset" value="Submit">


</fieldset>
</form>


</div>
</body>
</html>

