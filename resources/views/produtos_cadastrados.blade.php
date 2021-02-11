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
 
<div class="containerContent">
        <div class="boxContent">
            <div class="tableContainer">
                <div class="tableBox">
                    <table id="table_id">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Data Cadastro</th>
                                <th>Categoria</th>
                                <th>Imagens</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        
                            @foreach($produtos as $p)
                            <tr>
                                <td>{{$p['id']}}</td>
                                <td>{{$p['produto']}}</td>
                                <td>{{$p['created_at']}}</td>
                                <td>{{$p['categoria']}}</td>
                                <td><img src="{{asset("img/{$p->imagem}") }}" width="50" height="50">
                                <img src="{{asset("img/{$p->imagem_2}") }}" width="50" height="50">
                                <img src="{{asset("img/{$p->imagem_3}") }}" width="50" height="50">
                                <img src="{{asset("img/{$p->imagem_4}") }}" width="50" height="50">
                                <img src="{{asset("img/{$p->imagem_5}") }}" width="50" height="50"></td>
                                <td> 
                                    <a href="{{url("/editar/{$p->id}")}}"><img src="./imagem/editar.png"/></a>
                                </td>
                                <td><form action="/produtos_cadastrados/{{$p['id']}}" method="POST">
                                @csrf
                                @method('delete')
                                        <button type="submit" onclick="alerta()" class="buttonExcluirProduto"><img class="imgSlider" src="./imagem/lixeira.png" /></button>
                                    </form>
                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
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
        function alerta() {
            alert("Produto excluido");
        }
    </script>
</body>

</html>