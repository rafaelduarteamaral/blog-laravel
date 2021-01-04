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
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"/>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>

  <body>
  @include('layouts.admin_header');

    <div class="containerContent">
        <div class="boxContent">
            <form method="post" class="formBox" action="{{route('publicacoes.inserir')}}" enctype="multipart/form-data">
                <div class="titleBox">
                    <h1 class="title">Criar Publicação</h1>
                </div>
                <input id="titulo" name="titulo" type="text" class="input" placeholder="Título">
                <input id="descricao" name="descricao" type="text" class="input" placeholder="Descrição">
                <textarea id="paragrafo" name="texto" class="textArea" cols="30" rows="10" placeholder="Texto Publicação"></textarea>
                <div class="imgProduto">
                    <img src="imagem/foto.png" class="img" alt="" />
                    <input id="imagem" name="imagem" type="file" class="input">
                </div>
                <button class="buttonEnviar" type="submit">Enviar</button>
            </form>
            <div class="tableContainer">
                <div class="tableBox">
                    <div class="divTitlePreview">
                        <h1 class="titlePreview">Preview Post</h1>
                    </div>
                    <div class="boxPreview">
                        <div class="titlePreview">
                            <h2 class="textTitlePreview">Nova Tendência</h2>
                        </div>
                        <div class="descricaoPreview">
                            <h3 class="textDescricaoPreview">Descrição</h3>
                        </div>
                        <div class="imgPreview">
                            <img class="imgPreviewElement" src="imagem/produto3.jpg">
                        </div>
                        <div class="textoPreview">
                            <p id="paragrafo" class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </div>
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

        $(document).ready( function () {
            $('#table_id').DataTable();
        } );

    </script>
</body>
</html>
