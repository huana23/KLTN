<!DOCTYPE html>
<html lang="en" >
<head>

  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('assets-dashboard/css/login/style.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" />
                <h1 class="opacity">LOGIN</h1>
                <form accept="" method="POST" action="{{ route('auth.login') }}">
                    @csrf
                    <input type="text" name="email" placeholder="USERNAME" />
                    <input type="password" name="password" placeholder="PASSWORD" />
                    <button class="opacity">SUBMIT</button>
                </form>
                <div class="register-forget opacity">
                    <a href="">REGISTER</a>
                    <a href="">FORGOT PASSWORD</a>
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>
</body>
<!-- partial -->
  <script  src="{{ asset('assets-dashboard/js/login/script.js') }}"></script>

</body>
</html>
