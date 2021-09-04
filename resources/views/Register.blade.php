<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SanberBook | Register page</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="kirim" method="POST">
        @csrf
        <p>First name:</p>
        <input type="text" name="fname">
        <p>Last name:</p>
        <input type="text" name="lname">
        <p>Gender:</p>
        <input type="radio" name="gender" value="Male">Male<br />
        <input type="radio" name="gender" value="Female">Female<br />
        <input type="radio" name="gender" value="Other">Other<br />
        <p>Nationality:</p>
        <select name="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="English">English</option>
			<option value="Malaysia">Malaysia</option>
			<option value="Singapore">Singapore</option>
            <option value="Other">Other</option>
        </select>
        <p>Language Spoken:</p>
        <input type="checkbox" name="bahasa[]" value="Indonesia">Indonesia<br />
        <input type="checkbox" name="bahasa[]" value="English">English<br />
		<input type="checkbox" name="bahasa[]" value="Arabic">Arabic<br />
        <input type="checkbox" name="bahasa[]" value="Other">Other<br />
        <p>Bio:</p>
        <textarea name="biodata" cols="30" rows="10"></textarea><br />
        <input type="submit" value="Sign Up">
    </form>
</body>

</html>
