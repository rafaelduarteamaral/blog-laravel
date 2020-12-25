<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Animated Login Form</title> -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>

  <body>
    <div class="container">
      <header>Bem -vindo(a)</header>
        <form method="post" action="{{route('cadastro.inserir')}}">
        @csrf
            <div class="input-field">
                <input type="name" name="name" required> 
                <label>Digite seu nome</label>
            </div>
            <div class="input-field">
                <input id="email" name="email" type="text" required>
                <label>Email</label>
            </div>
            <div class="input-field">
                <input id="data_nascimento" name="data_nascimento" type="#" required>
                <label>Data de nacimento</label>
            </div>
            <div class="input-field">
                <input id="password" name="password" class="pswrd" type="password" required>
                <span class="show"><img src="/img/eye.png"/></span>
                <label>Senha</label>
            </div>
            <div class="button">
                <div class="inner">
                </div>
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    <div class="auth">
        Ou entrar como</div>
    <div class="links">
        <div class="facebook">
            <img src="img/facebookLogin.png" >
        </div>
        <div class="google">
            <img src="img/gmail.png" >
        </div>
    </div>
    <div class="signup">
        Já possui cadastro? <a href="#">Entrar agora</a>
    </div>
</div>

<script>


      
        document.getElementById('data_nascimento').onclick = function(){
          var data = document.getElementById('data_nascimento')
          data.setAttribute('type','date')  
        }
      



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
      var email = document.getElementById('email')
      email.setAttribute('autocomplete','off')
    </script>

  </body>
</html>
