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
    @include('layouts.admin_header');

    <div class="containerContent">
        <div class="boxContent">
            <form method="post" class="formBox" action="{{route('publicacoes.inserir')}}" enctype="multipart/form-data">
                <div class="titleBox">
                    <h1 class="title">Criar Publicação</h1>
                </div>
                <input id="titulo" onkeyup="getValTitulo()" name="titulo" type="text" class="input" placeholder="Título">
                <input id="descricao" onkeyup="getValDescricao()" name="descricao" type="text" class="input" placeholder="Descrição">
                <textarea id="paragrafo" onkeyup="getValTexto()" name="texto" class="textArea" cols="30" rows="10" placeholder="Texto Publicação"></textarea>
                <div class="imgProduto">
                    <img src="imagem/foto.png" class="img" alt="" />
                    <input id="img_input" name="imagem" type="file" class="input">
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
                            <h2 class="textTitlePreview" id="tituloDinamico"></h2>
                        </div>
                        <div class="descricaoPreview">
                            <h3 class="textDescricaoPreview" id="descricaoDinamico"></h3>
                        </div>
                        <div class="imgPreview">
                            <img id="img_preview" src="" alt="Image Preview" class="imgPreviewElement" />
                        </div>
                        <div class="textoPreview">
                            <p id="paragrafoDinamico" class="paragraph"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mySidenav" class="sidenav">
        <a class="linkMobile" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="linkMobile" href="/admin_produtos">Produtos</a>
        <a class="linkMobile" href="/produtos_cadastrados">Prod. Cadastrados</a>
        <a class="linkMobile" href="/user">Usuários</a>
        <a class="linkMobile" href="/admin_publicacoes">Publicações</a>
        <a class="linkMobile" href="/">Site</a>
        <a class="linkMobile" href="#">Sair</a>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        $(document).ready(function() {
            $('#table_id').DataTable();
        });

        function getValTitulo() {
            var x = document.getElementById("titulo");
            document.getElementById("tituloDinamico").innerHTML = x.value;
        }

        function getValDescricao() {
            var x = document.getElementById("descricao");
            document.getElementById("descricaoDinamico").innerHTML = x.value;
        }

        function getValTexto() {
            var x = document.getElementById("paragrafo");
            document.getElementById("paragrafoDinamico").innerHTML = x.value;
        }

        function ImagePreview(input) {

            if (input.files && input.files[0]) {

                var r = new FileReader();

                r.onload = function(e) {
                    $("#img_preview").show();
                    $("#img_preview").attr("src", e.target.result);
                }

                r.readAsDataURL(input.files[0]);

            }
        }

        $().ready(function() {

            hide_empty_image = false;
            set_blank_to_empty_image = false;
            set_image_border = true;

            if (hide_empty_image)
                $("#img_preview").hide();

            if (set_blank_to_empty_image)
                $("#img_preview").attr("src", "data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=");

            if (set_image_border)
                $("#img_preview").css("border", "1px solid #05bbcc");


            $("#img_input").change(function() {
                ImagePreview(this);
            });

        });
    </script>
</body>

</html>