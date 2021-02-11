<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
    @include('layouts.navigation')

    <div class="containerFundo">
        <div class="containerContent">
            <div class="sideContainerContent">
                <span class="itemImg"><img class="imgSide" src="{{URL::asset('imagem/principal.jpg')}}" /></span>
                <a class="itemBusca" href="/catalogo"><h3 class="itemBusca">Todos</h3></a>
                @foreach($categoria as $cat)
                <a class="itemBusca" href="categoria/{{$cat->nome}}"><h3 class="itemBusca">{{$cat->nome}}</h3></a>
                @endforeach
            </div>
            <div class="listaContainerContent">
                <div class="titleContent">
                    <h1 class="titleText">Maquiagem</h1>
                </div>

                <?php
                $count = 0;
                foreach ($catalogo as $c) { ?>
                    <div class="cardWinner">
                        <div class="imgCardWinner">
                            <img src="{{ asset("img/{$c->imagem}") }}" width="200" height="200">
                        </div>
                        <div class="textCardWinner">
                            <h1 id="{{$c->id}}" class="h1TextCardWinner">{{$c->produto}}</h1>
                            <h1 class="h1TextCardWinner">{{$c->descricao}}</h1>
                            <p class="pTextCardWinner">{{$c->texto_prod}}</p>
                        </div>
                        <div class="lerMaisCardbox">
                            <a href="/produtos/{{$c->id}}"><button class="buttonLerMais">ver mais</button></a>
                        </div>
                    </div>
                <?php $count++;
                    if ($count == 25) break;
                } ?>

                <!-- @foreach($catalogo as $cat)

                <th><a href="/produtos/{{$cat->id}}"><img id="/produtos/{{$cat->id}}" src="{{ asset("img/{$cat->imagem}") }}" width="200" height="200"></a></th>
                @endforeach
 -->

            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modalImg">
                <img class="imgModal" src="imagem/produto1.jpg" />
            </div>
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

        // // Get the modal
        // var modal = document.getElementById("myModal");

        // // Get the button that opens the modal
        // var btn = document.getElementById("myBtn");

        // // Get the <span> element that closes the modal
        // var span = document.getElementsByClassName("close")[0];

        // // When the user clicks the button, open the modal 
        // btn.onclick = function() {
        //     modal.style.display = "block";
        // }

        // // When the user clicks on <span> (x), close the modal
        // span.onclick = function() {
        //     modal.style.display = "none";
        // }

        // // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function(event) {
        //     if (event.target == modal) {
        //         modal.style.display = "none";
        //     }
        // }


        function Avaliar(estrela) {
            var url = window.location;
            url = url.toString()
            url = url.split("index.html");
            url = url[0];

            var s1 = document.getElementById("s1").src;
            var s2 = document.getElementById("s2").src;
            var s3 = document.getElementById("s3").src;
            var s4 = document.getElementById("s4").src;
            var s5 = document.getElementById("s5").src;
            var avaliacao = 0;

            if (estrela == 5) {
                // if (s5 == url + "img/star0.png") {
                document.getElementById("s1").src = "img/star1.png";
                document.getElementById("s2").src = "img/star1.png";
                document.getElementById("s3").src = "img/star1.png";
                document.getElementById("s4").src = "img/star1.png";
                document.getElementById("s5").src = "img/star1.png";
                avaliacao = 5;
                // } else {
                //     document.getElementById("s1").src = "img/star1.png";
                //     document.getElementById("s2").src = "img/star1.png";
                //     document.getElementById("s3").src = "img/star1.png";
                //     document.getElementById("s4").src = "img/star1.png";
                //     document.getElementById("s5").src = "img/star0.png";
                //     avaliacao = 4;
                // }
            }

            //ESTRELA 4
            if (estrela == 4) {
                // if (s4 == url + "img/star0.png") {
                document.getElementById("s1").src = "img/star1.png";
                document.getElementById("s2").src = "img/star1.png";
                document.getElementById("s3").src = "img/star1.png";
                document.getElementById("s4").src = "img/star1.png";
                document.getElementById("s5").src = "img/star0.png";
                avaliacao = 4;
                // } else {
                //     document.getElementById("s1").src = "img/star1.png";
                //     document.getElementById("s2").src = "img/star1.png";
                //     document.getElementById("s3").src = "img/star1.png";
                //     document.getElementById("s4").src = "img/star0.png";
                //     document.getElementById("s5").src = "img/star0.png";
                //     avaliacao = 3;
                // }
            }

            //ESTRELA 3
            if (estrela == 3) {
                // if (s3 == url + "img/star0.png") {
                document.getElementById("s1").src = "img/star1.png";
                document.getElementById("s2").src = "img/star1.png";
                document.getElementById("s3").src = "img/star1.png";
                document.getElementById("s4").src = "img/star0.png";
                document.getElementById("s5").src = "img/star0.png";
                avaliacao = 3;
                // } else {
                //     document.getElementById("s1").src = "img/star1.png";
                //     document.getElementById("s2").src = "img/star1.png";
                //     document.getElementById("s3").src = "img/star0.png";
                //     document.getElementById("s4").src = "img/star0.png";
                //     document.getElementById("s5").src = "img/star0.png";
                //     avaliacao = 2;
                // }
            }

            //ESTRELA 2
            if (estrela == 2) {
                // if (s2 == url + "img/star0.png") {
                document.getElementById("s1").src = "img/star1.png";
                document.getElementById("s2").src = "img/star1.png";
                document.getElementById("s3").src = "img/star0.png";
                document.getElementById("s4").src = "img/star0.png";
                document.getElementById("s5").src = "img/star0.png";
                avaliacao = 2;
                // } else {
                //     document.getElementById("s1").src = "img/star1.png";
                //     document.getElementById("s2").src = "img/star0.png";
                //     document.getElementById("s3").src = "img/star0.png";
                //     document.getElementById("s4").src = "img/star0.png";
                //     document.getElementById("s5").src = "img/star0.png";
                //     avaliacao = 1;
                // }
            }

            //ESTRELA 1
            if (estrela == 1) {
                // if (s1 == url + "img/star0.png") {
                document.getElementById("s1").src = "img/star1.png";
                document.getElementById("s2").src = "img/star0.png";
                document.getElementById("s3").src = "img/star0.png";
                document.getElementById("s4").src = "img/star0.png";
                document.getElementById("s5").src = "img/star0.png";
                avaliacao = 1;
                // } else {
                //     document.getElementById("s1").src = "img/star0.png";
                //     document.getElementById("s2").src = "img/star0.png";
                //     document.getElementById("s3").src = "img/star0.png";
                //     document.getElementById("s4").src = "img/star0.png";
                //     document.getElementById("s5").src = "img/star0.png";
                //     avaliacao = 0;
                // }
            }

            document.getElementById('rating').innerHTML = avaliacao;

        }
    </script>
</body>

</html>