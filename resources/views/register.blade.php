<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Buat Account Baru!</h1>
	<h4>Sign Up Form</h4>
<form method="POST" action="/selamatdtg">
{{csrf_field()}} <!--token wajib-->
	<label for="nama_pertama"> First Name : <br><br></label>
	<input type="text" id="nama_pertama" name="pertama"> <br><br>
	<label for="nama_kedua"> Last Name : <br><br></label>
	<input type="text" id="nama_kedua" name="kedua"> <br><br>

	<label > Gender <br><br></label>

	<input type="radio" name="jenis" value=""> Male <br>
	<input type="radio" name="jenis" value=""> Female <br>
	<input type="radio" name="jenis" value=""> Other <br><br>

	<label>Nationality :</label> <br><br>
	<select>
		<option> Indonesian </option>
		<option> Malaysian </option>
		<option> American </option>
	</select>

	<br><br>
	<label > Language Spoken: <br><br></label>
	<input type="checkbox" name="bahasa" value=""> Bahasa  Indonesia <br>
	<input type="checkbox" name="bahasa" value=""> English <br>
	<input type="checkbox" name="bahasa" value=""> Other <br> <br>

	
	<label for="Bio"> Bio: <br></label>
	<textarea cols="40" rows="8" id="Bio"></textarea>
	<br>
	<input type="submit" name="" value="Sign Up">
	

</form>
</body>
</html>