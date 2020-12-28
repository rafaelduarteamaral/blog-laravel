<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="pt-br" dir="ltr">
  <head>
  <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Animated Login Form</title> -->
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>

  <body>
    <div class="container">
      <header>Bem -vindo(a)</header>

      <form method="post" action="">
       @csrf
            Email ou Senha não conferem.
            <div class="input-field">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="input-field">
                <input class="pswrd" type="password" name="password" required>
                <span class="show"><img src="img/eye.png"/></span>
                <label>Senha</label>
            </div>
            <div class="button">
                <div class="inner">
                </div>
                <button type="submit">Entrar</button>
            </div>
      </form>
    <div class="auth">
        Or login with</div>
    <div class="links">
        <div class="facebook">
            <img src="img/facebookLogin.png" >
        </div>
        <div class="google">
            <img src="img/gmail.png" >
        </div>
    </div>
    <div class="signup">
        NÃ£o possui cadastro? <a href="#">Cadastre-se agora</a>
    </div>
</div>


<script>
      var input = document.querySelector('.pswrd');
      var show = document.querySelector('.show');
      show.addEventListener('click', active);
      function active(){
        if(input.type === "password"){
          input.type = "text";
        //   show.style.color = "#1DA1F2";
        //   show.textContent = "HIDE";
        }else{
          input.type = "password";
        //   show.textContent = "SHOW";
        //   show.style.color = "#111";
        }
      }
    </script>

  </body>
</html>
