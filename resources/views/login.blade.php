<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Animated Login Form</title> -->
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>

  <body>
    <div class="container">
      <header>Bem -vindo(a)</header>
        <form>
            <div class="input-field">
                <input type="text" required>
                <label>Email or Username</label>
            </div>
            <div class="input-field">
                <input class="pswrd" type="password" required>
                <span class="show"><img src="img/eye.png"/></span>
                <label>Password</label>
            </div>
            <div class="button">
                <div class="inner">
                </div>
                <button>Entrar</button>
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
        Não possui cadastro? <a href="#">Cadastre-se agora</a>
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
