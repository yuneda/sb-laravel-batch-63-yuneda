<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="{{ route('welcome') }}" method="POST">
        @csrf
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name" required><br><br>
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name" required><br><br>
        <p>Gender</p>
        <input id="male" type="radio" value="Male" name="gender"/>
        <label for="male">Male</label><br>
        <input id="female" type="radio" value="Female" name="gender"/>
        <label for="female">Female</label><br>
        <input id="other" type="radio" value="Other" name="gender"/>
        <label for="other">Other</label><br>
        <p>Nationality</p>
        <select name="nationality" id="national">
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Australian">Australian</option>
        </select><br><br>
        <p>Language Spoken:</p>
        <input type="checkbox" id="bahasa" name="languages[]" value="Bahasa Indonesia">
        <label for="bahasa">Bahasa Indonesia</label><br>
        <input type="checkbox" id="english" name="languages[]" value="English">
        <label for="english">English</label><br>
        <input type="checkbox" id="other_language" name="languages[]" value="Other">
        <label for="other_language">Other</label><br>
        <p>Bio:</p>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>