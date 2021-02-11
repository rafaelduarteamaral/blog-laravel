<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <script type="text/javascript" src="path_to/jquery.js"></script>
    <script type="text/javascript" src="path_to/jquery.simplePagination.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body>

    @include('layouts.navigation')


    <div class="containerFundo">
        <div class="containerContent">
            <div class="sideContainerContent">
                <span class="itemImg"><img class="imgSide" src="{{URL::asset('imagem/principal.jpg')}}" /></span>
                <a class="itemBusca" href="/catalogo">
                    <h3 class="itemBusca">Todos</h3>
                </a>
            </div>
            <div class="listaContainerContent">
                <div class="voltarBox">
                    <a class="linkButton" href="/catalogo"><button class="buttonVoltar"><img src="{{URL::asset('imagem/retorna.png')}}" /><span class="textButton">voltar</span></button></a>
                </div>
                <div class="titleContent">
                    <h1 class="titleText">Produto</h1>
                </div>
                <div class="cardWinner">

                    @foreach($produtos as $p)

                    <div class="imgCardWinner">
                        <img src="{{ asset("img/{$p->imagem}") }}" width="300" height="300" />
                    </div>

                    
                    <div class="imgCardWinner">
                        <img src="{{ asset("img/{$p->imagem_2}") }}" width="300" height="300" />
                    </div>

                    
                    <div class="imgCardWinner">
                        <img src="{{ asset("img/{$p->imagem_3}") }}" width="300" height="300" />
                    </div>

                    
                    <div class="imgCardWinner">
                        <img src="{{ asset("img/{$p->imagem_4}") }}" width="300" height="300" />
                    </div>

                    
                    <div class="imgCardWinner">
                        <img src="{{ asset("img/{$p->imagem_5}") }}" width="300" height="300" />
                    </div>

                    <div id="{{$p->id}}" name="produto" class="textCardWinner">
                        <h1 class="h1TextCardWinner">{{$p->produto}}</h1>
                        <h2 class="h2TextCardWinner">{{$p->descricao}}</h2>
                        <p class="pTextCardWinner">{{$p->texto_prod}}</p>
                    </div>
                    <div class="lerMaisCardbox">
                        <!-- <button id="myBtn" class="buttonLerMais">ver mais</button> -->
                        <div class="estrelas">
                            {{number_format($avaliacao, 1)}}
                            @if($avaliacao < 1)
                            <div class="divStar">
                                <img class="starMedia" src="{{URL::asset('imagem/star0.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star0.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star0.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star0.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star0.png')}}" />
                            </div>
                            @elseif($avaliacao >= 1 && $avaliacao <= 1.9999 )
                            <div class="divStar">
                                <img class="starMedia" src="{{URL::asset('imagem/star1.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star0.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star0.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star0.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star0.png')}}" />
                            </div>
                            @elseif($avaliacao >= 2 && $avaliacao <= 2.9999)
                            <div class="divStar">
                                <img class="starMedia" src="{{URL::asset('imagem/star1.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star1.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star0.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star0.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star0.png')}}" />
                            </div>
                            @elseif($avaliacao >= 3 && $avaliacao <= 3.9999)
                            <div class="divStar">
                                <img class="starMedia" src="{{URL::asset('imagem/star1.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star1.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star1.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star0.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star0.png')}}" />
                            </div>
                            @elseif($avaliacao >= 4 && $avaliacao <= 4.9999)
                            <div class="divStar">
                                <img class="starMedia" src="{{URL::asset('imagem/star1.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star1.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star1.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star1.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/star0.png')}}" />
                            </div>
                            @else
                            <div class="divStar">
                                <img class="starMedia" src="{{URL::asset('imagem/1.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/1.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/1.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/1.png')}}" />
                                <img class="starMedia" src="{{URL::asset('imagem/1.png')}}" />
                            </div>
                            @endif
                        </div>
                    </div>

                </div>

                <div class="containerComents">
                    <div class="writeComent">
                        <form method="post" action="{{route('comentarios.comentario')}}">
                            <input name="id" type="hidden" value="{{$p->id}}"></input>
                            <h1 class="writeText">Comentar</h1>
                            <textarea id="comentar" name="comentar" class="textArea"></textarea>
                            <h3 class="avaliarTexto">Avaliar esse produto</h3>
                            <div class="estrelas">

                                <input type="hidden" id="vazio" name="estrela" value="">

                                <label for="estrela_um"><i class="fa" style="transform: none"></i></label>
                                <input type="radio" id="estrela_um" name="estrela" value="1">

                                <label for="estrela_dois"><i class="fa" style="transform: none"></i></label>
                                <input type="radio" id="estrela_dois" name="estrela" value="2">

                                <label for="estrela_tres"><i class="fa" style="transform: none"></i></label>
                                <input type="radio" id="estrela_tres" name="estrela" value="3">

                                <label for="estrela_quatro"><i class="fa" style="transform: none"></i></label>
                                <input type="radio" id="estrela_quatro" name="estrela" value="4">

                                <label for="estrela_cinco"><i class="fa" style="transform: none"></i></label>
                                <input type="radio" id="estrela_cinco" name="estrela" value="5">

                            </div>

                            <button class="buttonLerMais" type="submit">enviar</button>
                        </form>
                    </div>
                    @endforeach

                    @foreach($comentarios as $c)
                    <div class="comentBox">
                        <div class="imgBox">
                            <img class="imgComent" src="{{ asset("img/{$c->imagem}") }}">
                            <h1 class="nameComent">{{$c->name}}</h1>
                        </div>
                        <div class="textBox">
                            {{$c->curtidas}}
                            <img src="{{URL::asset('imagem/star1.png')}}" id="s5">
                            <p class="coment">{{$c->comentario}}</p>
                        </div>
                    </div>
                    @endforeach

                    <div class=espacoFim>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modalImg">
                <img class="imgModal" src="/img//produto1.jpg" />
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="contentFooter">
            <ul>
                <li>COMPANY</li>
            </ul>
            <ul>
                <li>WORK WITH US</li>
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
                    <li class="liFirstSocial">© Ambiente Consultoria - Todos os direitos reservados<br /</li>
                    <li class="liSecondSocial"></li>
                    <li></li>
                </div>
            </ul>
        </div>
    </div>

    <script>
        $(function() {
            $('#containerComents').pagination({
                items: 100,
                itemsOnPage: 10,
                cssStyle: 'light-theme'
            });
        });


        function curtidas(numero) {

            numero = numero + 1;

            console.log(numero)
        }

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
                document.getElementById("s1").src = "{{URL::asset('imagem/star1.png')}}";
                document.getElementById("s2").src = "{{URL::asset('imagem/star1.png')}}";
                document.getElementById("s3").src = "{{URL::asset('imagem/star1.png')}}";
                document.getElementById("s4").src = "{{URL::asset('imagem/star1.png')}}";
                document.getElementById("s5").src = "{{URL::asset('imagem/star1.png')}}";
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
                document.getElementById("s1").src = "{{URL::asset('imagem/star1.png')}}";
                document.getElementById("s2").src = "{{URL::asset('imagem/star1.png')}}";
                document.getElementById("s3").src = "{{URL::asset('imagem/star1.png')}}";
                document.getElementById("s4").src = "{{URL::asset('imagem/star1.png')}}";
                document.getElementById("s5").src = "{{URL::asset('imagem/star0.png')}}";
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
                document.getElementById("s1").src = "{{URL::asset('imagem/star1.png')}}";
                document.getElementById("s2").src = "{{URL::asset('imagem/star1.png')}}";
                document.getElementById("s3").src = "{{URL::asset('imagem/star1.png')}}";
                document.getElementById("s4").src = "{{URL::asset('imagem/star0.png')}}";
                document.getElementById("s5").src = "{{URL::asset('imagem/star0.png')}}";
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
                document.getElementById("s1").src = "{{URL::asset('imagem/star1.png')}}";
                document.getElementById("s2").src = "{{URL::asset('imagem/star1.png')}}";
                document.getElementById("s3").src = "{{URL::asset('imagem/star0.png')}}";
                document.getElementById("s4").src = "{{URL::asset('imagem/star0.png')}}";
                document.getElementById("s5").src = "{{URL::asset('imagem/star0.png')}}";
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
                document.getElementById("s1").src = "{{URL::asset('imagem/star1.png')}}";
                document.getElementById("s2").src = "{{URL::asset('imagem/star0.png')}}";
                document.getElementById("s3").src = "{{URL::asset('imagem/star0.png')}}";
                document.getElementById("s4").src = "{{URL::asset('imagem/star0.png')}}";
                document.getElementById("s5").src = "{{URL::asset('imagem/star0.png')}}";
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