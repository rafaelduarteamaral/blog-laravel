<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Animated Login Form</title> -->
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>

  <body>
    <header class="headerComponent">
        <div class="headerContainer">
            <div class="headerContent">
                <div class="leftContent">
                    <h1 class="titleLeft">admin Blog</h1>
                </div>
                <div class="rightContent">
                    <a href="/adminProdutos" class="optionHeader">Produtos</a>
                    <a href="/adminUsuarios" class="optionHeader">Usuários</a>
                    <a href="/adminPublicacoes" class="optionHeader">Publicações</a>
                    <a class="optionHeader lastHeader">Sair</a>
                </div>
                <div class="divMobileOption">
                    <a class="mobileMenu" onclick="openNav()"><img src="img/menu.png"/></a>
                </div>
            </div>
        </div>
    </header>

    <div class="containerAdmin">
        <div class="resumoAdmin">
            <div class="titleTop">
                <h1 class="textTitleTop">Estatísticas</h1>
            </div>
            <div class="dados">
                <div class="quantidade">
                    <span class="linhaTop"></span>
                    <h1 class="titleQuantidade">Cadastros</h1>
                    <p class="valueQuantidade">134</p>
                </div>
                <div class="quantidade">
                    <span class="linhaTop"></span>
                    <h1 class="titleQuantidade">Logins (24hrs)</h1>
                    <p class="valueQuantidade">41</p>
                </div>
                <div class="quantidade">
                    <span class="linhaTop"></span>
                    <h1 class="titleQuantidade">Total Comentários</h1>
                    <p class="valueQuantidade">1844</p>
                </div>
                <div class="quantidade">
                    <span class="linhaTop"></span>
                    <div class="divQuantidade">
                        <h1 class="titleQuantidade">Média Avaliações<br/>por produtos (qntd)</h1>
                    </div>
                    <p class="valueQuantidade">30</p>
                </div>
                <div class="quantidade">
                    <span class="linhaTop"></span>
                    <div class="divQuantidade">
                        <h1 class="titleQuantidade">Total produtos<br/>cadastrados</h1>
                    </div>
                    <p class="valueQuantidade">1572</p>
                </div>
                <div class="quantidade">
                    <span class="linhaTop"></span>
                    <div class="divQuantidade">
                        <h1 class="titleQuantidade">Média curtidas<br/> por produtos</h1>
                    </div>
                    <p class="valueQuantidade">53</p>
                </div>
            </div>
        </div>
    </div>

    
    <div id="mySidenav" class="sidenav">
        <a class="linkMobile" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="linkMobile" href="#">Produtos</a>
        <a class="linkMobile" href="#">Usuários</a>
        <a class="linkMobile" href="#">Publicações</a>
        <a class="linkMobile" href="#">Sair</a>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

</body>
</html>
