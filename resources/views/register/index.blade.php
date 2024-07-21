<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/CSS/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
    <title>Admin | Register</title>
</head>
 
    <body>
        <div class="wrapper">
            <form action="/register" method="POST">
                @csrf

                <h1>Registration Form</h1>

                <div class="input-box">                   
                    <input type="text" name="name" placeholder="Name" id="name" required>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">                   
                    <input type="text" name="username" placeholder="Username" id="username" required>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">                   
                    <input type="email" name="email" placeholder="Email Address" id="email" required>
                    <i class='bx bxs-envelope'></i>
                </div>

                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" id="password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <button type="submit" class="btn">Register</button>

                <div class="register-link">
                    <p>Already registered? <a href="/admin">Login</a></p>
                </div>

            </form>
        </section>
    </body>
    
</html>