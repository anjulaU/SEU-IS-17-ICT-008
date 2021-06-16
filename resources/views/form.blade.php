
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
</head>
<body>
    <form action="{{ route('validate.form') }}" method="POST">
        Name:
        <input type="text" name="name" id="name">,<br>
        User Name:
        <input type="text" name="username" id="username"><br>
        Date Of Birth:
        <input type="date" name="date_of_birth" id="date_of_birth"><br>
        Email:
        <input type="text" name="email" id="email"><br>
        Telephone Number:
        <input type="number" name="teliphone-no" id="telihone-no"><br>
        NIC No:
        <input type="text" name="nic-no" id="nic-no"><br>
        Gender:
        <input type="text" name="gender" id="gender"><br>
        Password:
        <input type="password" name="password" id="password"><br>
        Reenter Password:
        <input type="password" name="reenter_password" id="reenter_password"><br>

        <input type="submit" value="Add Data">


    </form>
</body>
</html>
