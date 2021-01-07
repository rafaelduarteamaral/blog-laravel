<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <script type="text/javascript" src="path_to/jquery.js"></script>
    <script type="text/javascript" src="path_to/jquery.simplePagination.js"></script>
</head>

<body>
    @include('layouts.navigation')
    <div id="mySidenav" class="sidenav">
        <a class="linkMobile" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="linkMobile" href="/">Home</a>
        <a class="linkMobile" href="#">My Books</a>
        <a class="linkMobile" href="#">Browse</a>
        <a class="linkMobile" href="#">Community</a>
    </div>

    <div class="containerFundo">
        <div class="containerContent">
            <div class="sideContainerContent">
                <span class="itemImg"><img class="imgSide" src="{{URL::asset('imagem/principal.jpg')}}" /></span>
            </div>
            <div class="listaContainerContent">
                <div class="voltarBox">
                    <a class="linkButton" href="/catalogo"><button class="buttonVoltar"><img src="imagem/retorna.png" /><span class="textButton">voltar</span></button></a>
                </div>



                <div class="boxProfile">
                    <div class="boxProfileRight">
                        <form action="{{route('usuario.atualizar')}}" method="post" enctype="multipart/form-data">
                            <h2 class="titleInput">Nome</h2>
                            <span class="lineProfile">
                                <input type="text" class="inputProfile" value="{{$usuarios['name']}}" name="nome_usuario" id="inputName" disabled/>
                                <img onclick="ativaInputName()" src="{{URL::asset('imagem/editar.png')}}"/>
                            </span>
                            <h2 class="titleInput">Email</h2>
                            <span class="lineProfile">
                                <input type="email" class="inputProfile" value="{{$usuarios['email']}}" name="email_usuario" id="inputEmail" disabled/>
                                <img onclick="ativaInputEmail()" src="{{URL::asset('imagem/editar.png')}}"/>
                            </span>
                            <h2 class="titleInput">Foto</h2>
                            <div class="imgProfile">
                                <img class="imgProfileElement" src="{{ asset("img/{$usuarios->imagem}") }}" />
                            </div>  
                            <input class="inputFile" type="file" name= "imagem" id="imagem" >
                            <button class="buttonEnviarAlteracao" id="buttonEnviarAlteracao" style="display: none;">Enviar</button>
                        </form>
                    </div>
                </div>



                <div class=espacoFim>

                </div>
                <div class=espacoFim>

                </div>
                <div class=espacoFim>

                </div>


            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <form class="">
                <div class="imgProfile imgProfileInside">
                    <img class="imgProfileElement" src="./imagem/CAPTURAR.PNG" />
                </div>
                <input class="inputFile" type="file">
                <button class="buttonCategoria">Enviar</button>
            </form>
        </div>
    </div>

    <div class="footer">
        <div class="contentFooter">
            <ul>
                <li>COMPANY</li>
                <li>About us</li>
                <li>Careers</li>
                <li>Terms</li>
                <li>Privacy</li>
                <li>Interest Based Ads</li>
                <li>Interest Based Ads</li>
                <li>Ad Preferences</li>
                <li>Help</li>
            </ul>
            <ul>
                <li>WORK WITH US</li>
                <li>Authors</li>
                <li>Advertise</li>
                <li>Authors & ads blog</li>
                <li>API</li>
            </ul>
            <ul>
                <li>CONNECT</li>
                <div class="ulSocial">
                    <li class="liFirstSocial"><img src="imagem/instagram.png" /></li>
                    <li class="liSecondSocial"><img src="imagem/twitter.png" /></li>
                    <li><img src="imagem/facebook.png" /></li>
                </div>
            </ul>
        </div>

        <div class="rightFooter">
            <ul>
                <div class="ulSocialFooter">
                    <li class="liFirstSocial">© Ambiente Consultoria - Todos os direitos reservados<br/ </li> <li class="liSecondSocial"></li>
                    <li></li>
                </div>
            </ul>
        </div>
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

        var input = document.getElementById("inputName")

        function ativaInputName() {
            document.getElementById("inputName").disabled = false;
            document.getElementById("inputName").style.background = '#fff8e9';
            document.getElementById("buttonEnviarAlteracao").style.display = 'block';

        }

        
        function ativaInputEmail() {
            document.getElementById("inputEmail").disabled = false;
            document.getElementById("inputEmail").style.background = '#fff8e9';
            document.getElementById("buttonEnviarAlteracao").style.display = 'block';
        }

        
        function ativaInputData() {
            document.getElementById("inputData").disabled = false;
            document.getElementById("inputData").style.background = '#fff8e9';
            document.getElementById("buttonEnviarAlteracao").style.display = 'block';
        }
    </script>
</body>

</html>