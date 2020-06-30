<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
    @csrf
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last name:</label><br>
        <input type="text" id="last_name" name="last_name">

        <p>Gender:</p>

        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>

        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>

        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>

        <p>Nationality:</p>

        <select name="nationality" id="nationality">
        	<option value="indonesian">Indonesian</option>
            <option value="malaysia">Malaysia</option>
            <option value="singapura">Singapura</option>
            <option value="brunei">Brunei Darusallam</option>
        </select>

        <p>Language Spoken:</p>

        <input type="checkbox" name="lang" id="lang" value="0">Bahasa Indonesia <br>
        <input type="checkbox" name="lang" id="lang">English <br>
        <input type="checkbox" name="" id="lang">Other

        <p>Bio:</p>
        <textarea name="bio" id="" cols="30" rows="10"></textarea><br>

        <button type="submit">Sign Up</button>
    </form>
</body>

</html>