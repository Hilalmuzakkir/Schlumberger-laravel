<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLB Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">

</head>

<body>
    <div class="login-container">
        <img src="slbtrans.png" alt="Logo">
        <h2>Welcome Back To SLB Data!</h2>
        <h6>This website is only used for QA & QC</h6>
        <form action="/login" method="post">
            @csrf
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>
