

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
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css" />
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
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
                    <a href="/admin_produtos" class="optionHeader">Produtos</a>
                    <a href="/produtos_cadastrados" class="optionHeader">Relatorio Produtos</a>
                    <a href="/user" class="optionHeader">Usuários</a>
                    <a href="/adminPublicacoes" class="optionHeader">Publicações</a>
                    <a class="optionHeader lastHeader">Sair</a>
                </div>
                <div class="divMobileOption">
                    <a class="mobileMenu" onclick="openNav()"><img src="imagem/menu.png" /></a>
                </div>
            </div>
        </div>
    </header>

    <div class="containerContent">
        <div class="boxContent">
        <div>
            <form method="post" class="formBox" action="{{route('produtos.inserir')}}" enctype="multipart/form-data">
                @csrf
                <div class="titleBox">
                    <h1 class="title">Cadastrar Produto</h1>
                </div>
                <input id="produto_nome" name="produto_nome" type="text" class="input" placeholder="Nome">
                <input id="descricao" name="descricao" type="text" class="input" placeholder="Descrição">
                <select id="categoria" name="categoria" class="select">
                    <option class="optionDisabled" selected disabled>Categoria</option>
                    <option>Paleta</option>
                    <?php 
                    use App\Models\Categoria;
                    $data = Categoria::all();
                    foreach($data as $c){ ?>
                    <option><?=$c->nome ?></option>
                    <?php } ?>
                </select>
                <textarea class="textArea" name="texto_prod" cols="30" rows="10" placeholder="Texto Apresentação"></textarea>
                <div class="imgProduto">
                    <img src="storage/foto.png" class="img" alt="" />
                    <input type="file" id="imagem" name="imagem" class="input">
                </div>
                <button class="buttonEnviar" type="submit">Enviar</button>
            </form>
            <button class="cadastrarCategoria" id="myBtn">Cadastrar Nova Categoria</button>

        </div>
            <!-- The Modal -->
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <form method="post" class="" action="{{route('inserir.categoria')}}">
                        <input id="categoria" name="categoria" class="inputCategoria" placeholder="Nome da Categoria" />
                        <button class="buttonCategoria">Enviar</button>
                    </form>
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

    
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>