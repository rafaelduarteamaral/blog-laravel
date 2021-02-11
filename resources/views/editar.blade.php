<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Animated Login Form</title> -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/admin.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css" />
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    @include('layouts.admin_header');
<?php use App\Models\Categoria;?>
    <div class="containerContent">
        <div class="boxContent">
            <div class="tableContainer">
                <div class="tableBox">
                    <div class="divTitlePreview">
                        <h1 class="titlePreview">Preview Post</h1>
                    </div>
                    @foreach($editar as $e)
                    @if (isset($editar))
                    <form action="{{route('editar.update', $e->id)}}" method="post" enctype="multipart/form-data">
                        @else
                        <form action="{{route('editar.edit')}}" method="post" enctype="multipart/form-data">
                            @endif
                            <div class="boxPreview">
                                <div class="titlePreview">
                                    <h1 class="textEditar">Titulo da Publicação</h1>
                                    <input class="inputEditar" id="tituloDinamico" name="titulo" value="{{$e->produto}}"></input>
                                </div>
                                <div class="descricaoPreview">
                                    <h1 class="textEditar">Descrição da Publicação</h1>
                                    <input class="inputEditar" id="descricaoDinamico" name="descricao" value="{{$e->descricao}}"></input>
                                </div>


                                <div class="descricaoPreview">
                                    <h1 class="textEditar">Categoria da Publicação</h1>
                                    <select id="categoria" name="categoria" class="select">
                                        <option class="optionDisabled" selected disabled>Categoria</option>
                                        <?php


                                        $data = Categoria::all();
                                        foreach ($data as $c) { ?>
                                            <option><?= $c->nome ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="imgPreviewEdit">
                                    <h1 class="textEditar">Imagem da Publicação</h1>
                                    <input id="img_input" name="imagem" type="file" class="inputImageEdit">
                                    <img id="img_preview" name="imagem" src="{{asset("img/{$e->imagem}") }}" alt="Image Preview" class="imgPreviewElement" />
                                </div>

                                <div class="imgPreviewEdit">
                                    <h1 class="textEditar">Imagem da Publicação</h1>
                                    <input id="img_input" name="imagem_2" type="file" class="inputImageEdit">
                                    <img id="img_preview" name="imagem_2" src="{{asset("img/{$e->imagem_2}") }}" alt="Image Preview" class="imgPreviewElement" />
                                </div>

                                <div class="imgPreviewEdit">
                                    <h1 class="textEditar">Imagem da Publicação</h1>
                                    <input id="img_input" name="imagem_3" type="file" class="inputImageEdit">
                                    <img id="img_preview" name="imagem_3" src="{{asset("img/{$e->imagem_3}") }}" alt="Image Preview" class="imgPreviewElement" />
                                </div>

                                <div class="imgPreviewEdit">
                                    <h1 class="textEditar">Imagem da Publicação</h1>
                                    <input id="img_input" name="imagem_4" type="file" class="inputImageEdit">
                                    <img id="img_preview" name="imagem_4" src="{{asset("img/{$e->imagem_4}") }}" alt="Image Preview" class="imgPreviewElement" />
                                </div>

                                <div class="imgPreviewEdit">
                                    <h1 class="textEditar">Imagem da Publicação</h1>
                                    <input id="img_input" name="imagem_5" type="file" class="inputImageEdit">
                                    <img id="img_preview" name="imagem_5" src="{{asset("img/{$e->imagem_5}") }}" alt="Image Preview" class="imgPreviewElement" />
                                </div>

                                <div class="textoPreview">
                                    <h1 class="textEditar">Texto da Publicação</h1>
                                    <textarea class="textAreaEditar" id="paragrafoDinamico" name="texto" class="paragraph" value="">{{$e->texto_prod}}</textarea>
                                </div>
                                <button class="buttonEnviarEdit" onclick="alerta()" type="submit">Enviar</button>
                            </div>
                        </form>
                        @endforeach
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
        function alerta() {
            alert("Produto editado com sucesso!");
        }

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