<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <table>
        <form action="RegistrationCheck.php" method="post">
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="first_name" required></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="last_name" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><input type="text" name="phone" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Register"></td>
            </tr>
        </form>
    </table>
</body>

</html>