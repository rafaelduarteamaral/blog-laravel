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
                        <?php

                        use App\Models\Categoria;

                        $data = Categoria::all();
                        foreach ($data as $c) { ?>
                            <option><?= $c->nome ?></option>
                        <?php } ?>
                    </select>
                    <textarea class="textArea" name="texto_prod" cols="30" rows="10" placeholder="Texto Apresentação"></textarea>

                    <div class="imgProduto">
                        <img id="img_preview" src="" alt="Image Preview" class="img" />
                        <input id="img_input" name="imagem" type="file" class="input">
                    </div>

                    <div class="imgProduto">
                        <img id="img_preview_2" src="" alt="Image Preview" class="img" />
                        <input id="img_input_2" name="imagem_2" type="file" class="input">
                    </div>

                    <div class="imgProduto">
                        <img id="img_preview_3" src="" alt="Image Preview" class="img" />
                        <input id="img_input_3" name="imagem_3" type="file" class="input">
                    </div>

                    <div class="imgProduto">
                        <img id="img_preview_4" src="" alt="Image Preview" class="img" />
                        <input id="img_input_4" name="imagem_4" type="file" class="input">
                    </div>

                    
                    <div class="imgProduto">
                        <img id="img_preview_5" src="" alt="Image Preview" class="img" />
                        <input id="img_input_5" name="imagem_5" type="file" class="input">
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


            $("#img_input").change(function() {
                ImagePreview(this);
            });

        });
    </script>
</body>

</html>