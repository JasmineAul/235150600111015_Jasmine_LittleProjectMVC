<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form action="list_proker.php" method="POST">
        <label>Username</label>
        <input type="text" name="username" placeholder="Username" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required>
        
        <button type="submit">Login</button>
    </form>
    <p>Belum ada akun? <a href="index.php?action=viewRegister">Daftar Di sini</a></p>
</body>
</html>