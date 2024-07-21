<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/CSS/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin | Login</title>
</head>
 
    <body>
        <div class="wrapper">
            <h1>Login</h1>
            @if(session()->has('loginError'))
                <div class="alert alert-danger" role="alert">
                    {{ session('loginError') }}
                </div>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form action="/admin" method="POST">
                @csrf
                <div class="input-box">                   
                    <input type="text" name="username" placeholder="Username" id="username" autofocus required>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="password" name="password" placeholder="password" id="password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="remember-forgot">
                    <label for=""><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>

                <button type="submit" class="btn">Login</button>

                <div class="register-link">
                    <p>Don't have an account? <a href="/register">Register</a></p>
                </div>

            </form>
        </section>
    </body>
    
</html>