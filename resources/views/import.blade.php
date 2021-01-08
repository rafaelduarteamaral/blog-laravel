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
            <form method="POST" action="{{route('produtos.importar')}}" enctype="multipart/form-data">
            @csrf 
            <label for="file">Escolha o CSV</label>
            <input type="file", name="file"><br>
            <button type="submit">Importar</button>
            </form>
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
    </script>
</body>

</html>