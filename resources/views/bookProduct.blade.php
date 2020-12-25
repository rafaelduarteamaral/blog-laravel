<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="path_to/jquery.js"></script>
    <script type="text/javascript" src="path_to/jquery.simplePagination.js"></script>
</head>
<body>
    <div class='headerProdutos'>
        <div class='headerConteudo'>
            <img class="logo" src="img//logo.png"><img/>
            <a href="/index" class="home">Home</a>
            <a class="books">Produtos</a>
            <select>
                <option>Browse</option>
                <option>Teste</option>
                <option>Teste</option>
                <option>Teste</option>
            </select>
            <select>
                <option>Comunidade</option>
                <option>Teste</option>
                <option>Teste</option>
                <option>Teste</option>
            </select>
            <input type="text" placeholder="Buscar"/>
            <button class="buttonHeader">Sign In</button>
            <button class="buttonHeader">Join</button>
            <button class="mobileOpen" onclick="openNav()"><img src="img/menu.png" /></button>
        </div>
    </div>

    <div id="mySidenav" class="sidenav">
        <a class="linkMobile" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="linkMobile" href="#">Home</a>
        <a class="linkMobile" href="#">My Books</a>
        <a class="linkMobile" href="#">Browse</a>
        <a class="linkMobile" href="#">Community</a>
    </div>

    <div class="containerFundo">
        <div class="containerContent">
            <div class="sideContainerContent">
                <span class="itemImg"><img class="imgSide" src="img/principal.jpg" /></span>
                <!-- <h3 class="itemBusca">Paleta</h3>
                <h3 class="itemBusca">Rosto</h3>
                <h3 class="itemBusca">Olhos</h3>
                <h3 class="itemBusca">Sobrancelhas</h3>
                <h3 class="itemBusca">Boca</h3>
                <h3 class="itemBusca">Corpo</h3>
                <h3 class="itemBusca">Acessórios</h3>
                <h3 class="itemBusca">Pincéis</h3>
                <h3 class="itemBusca">Unhas</h3> -->
            </div>
            <div class="listaContainerContent">
                <div class="voltarBox">
                    <a class="linkButton" href="/books"><button class="buttonVoltar"><img src="img/retorna.png"/><span class="textButton">voltar</span></button></a>
                </div>
                <div class="titleContent">
                    <h1>Produto</h1>
                </div>

                <div class="cardWinner">
                    <div class="imgCardWinner">
                        <img src="img/produto1.jpg"/>
                    </div>
                    <div class="textCardWinner">
                        <h1 class="h1TextCardWinner">Modern Comfort Food: A Barefoot Contessa Cookbook</h1>
                        <h2 class="h2TextCardWinner">by Ina Garten (Goodreads Author)</h2>
                        <p class="pTextCardWinner">Author and alpha foodie Ina Garten takes the Food & Cookbooks prize with a collection of recipes perfect for the quarantined lifestyle of 2020. The 85 dishes featured here?many of them childhood favorites?are easy to make and meant to provide culinary comfort in this strangest of times. Cheddar and Chutney Grilled Cheese! Creamy Tomato Bisque! Banana Rum Trifle! We?re feeling better already.</p>
                    </div>
                    <div class="lerMaisCardbox">
                        <!-- <button id="myBtn" class="buttonLerMais">ver mais</button> -->
                        <div class="starRate">
                            <a href="javascript:void(0)" onclick="Avaliar(1)">
                            <img src="img/star0.png" id="s1"></a>
                                
                            <a href="javascript:void(0)" onclick="Avaliar(2)">
                            <img src="img/star0.png" id="s2"></a>
                                
                            <a href="javascript:void(0)" onclick="Avaliar(3)">
                            <img src="img/star0.png" id="s3"></a>
                                
                            <a href="javascript:void(0)" onclick="Avaliar(4)">
                            <img src="img/star0.png" id="s4"></a>
                                
                            <a href="javascript:void(0)" onclick="Avaliar(5)">
                            <img src="img/star0.png" id="s5"></a>
                            
                            <h3 class="avaliarTexto">Avaliar esse produto</h3>
                        </div>
                    </div>
                </div>

                <div class="containerComents">

                    <div class="writeComent">
                        <form action="" class="">
                            <h1 class="writeText">Comentar</h1>
                            <textarea class="textArea"></textarea>
                            <button  class="buttonLerMais" type="submit">enviar</button>
                        </form>
                    </div>

                    <div class="comentBox">
                        <div class="imgBox">
                            <img class="imgComent" src="img/Capturar.PNG"/>
                            <h1 class="nameComent">Isabela</h1>
                        </div>  
                        <div class="textBox">
                            <p class="coment">Produto pika das galaxias, Produto pika das galaxias, Produto pika das galaxias, Produto pika das galaxias</p>
                        </div>
                        <div class="likesBox">
                            <a class="curtidas" onclick="curtidas(7)">Curtir</a>
                            <span class="numCurtidas"><span id="num">7</span> curtidas</span>
                                
                        </div>
                    </div>
                    <div class="comentBox">
                        <div class="imgBox">
                            <img class="imgComent" src="img/Capturar.PNG"/>
                            <h1 class="nameComent">Bruna</h1>
                            <div class="rateComent">

                            </div>
                        </div>  
                        <div class="textBox">
                            <p class="coment">Produto pika das galaxias, Produto pika das galaxias, Produto pika das galaxias, Produto pika das galaxias</p>
                        </div>
                        <div class="likesBox">
                            <a class="curtidas" onclick="curtidas(32)">Curtir</a>
                            <span class="numCurtidas"><span id="num">32</span> curtidas</span>
                        </div>
                    </div>
                    <div class="comentBox">
                        <div class="imgBox">
                            <img class="imgComent" src="img/Capturar.PNG"/>
                            <h1 class="nameComent">Ana</h1>
                            <div class="rateComent">

                            </div>
                        </div>  
                        <div class="textBox">
                            <p class="coment">Produto pika das galaxias, Produto pika das galaxias, Produto pika das galaxias, Produto pika das galaxias</p>
                        </div>
                        <div class="likesBox">
                            <a class="curtidas" onclick="curtidas(12)">Curtir</a>
                            <span class="numCurtidas"><span id="num">12</span> curtidas</span>
                        </div>
                    </div>
                    <div class="comentBox">
                        <div class="imgBox">
                            <img class="imgComent" src="img/Capturar.PNG"/>
                            <h1 class="nameComent">Isabela</h1>
                            <div class="rateComent">

                            </div>
                        </div>  
                        <div class="textBox">
                            <p class="coment">Produto pika das galaxias, Produto pika das galaxias, Produto pika das galaxias, Produto pika das galaxias</p>
                        </div>
                        <div class="likesBox">
                            <a class="curtidas" onclick="curtidas(2)">Curtir</a>
                            <span class="numCurtidas"><span id="num">2</span> curtidas</span>
                        </div>
                    </div>
                    <div class="comentBox">
                        <div class="imgBox">
                            <img class="imgComent" src="img/Capturar.PNG"/>
                            <h1 class="nameComent">Isabela</h1>
                            <div class="rateComent">

                            </div>
                        </div>  
                        <div class="textBox">
                            <p class="coment">Produto pika das galaxias, Produto pika das galaxias, Produto pika das galaxias, Produto pika das galaxias</p>
                        </div>
                        <div class="likesBox">
                            <a class="curtidas" onclick="curtidas(15)">Curtir</a>
                            <span class="numCurtidas"><span id="num">15</span> curtidas</span>
                        </div>
                    </div>
                    <div class="comentBox">
                        <div class="imgBox">
                            <img class="imgComent" src="img/Capturar.PNG"/>
                            <h1 class="nameComent">Isabela</h1>
                            <div class="rateComent">

                            </div>
                        </div>  
                        <div class="textBox">
                            <p class="coment">Produto pika das galaxias, Produto pika das galaxias, Produto pika das galaxias, Produto pika das galaxias</p>
                        </div>
                        <div class="likesBox">
                            <a class="curtidas" onclick="curtidas(15)">Curtir</a>
                            <span class="numCurtidas"><span id="num">9</span> curtidas</span>
                        </div>
                    </div>
                    <div class="comentBox">
                        <div class="imgBox">
                            <img class="imgComent" src="img/Capturar.PNG"/>
                            <h1 class="nameComent">Gabriel</h1>
                            <div class="rateComent">

                            </div>
                        </div>  
                        <div class="textBox">
                            <p class="coment">Produto pika das galaxias, Produto pika das galaxias, Produto pika das galaxias, Produto pika das galaxias</p>
                        </div>
                        <div class="likesBox">
                            <a class="curtidas" onclick="curtidas(11)">Curtir</a>
                            <span class="numCurtidas"><span id="num">11</span> curtidas</span>
                        </div>
                    </div>
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
                <img class="imgModal" src="/img//produto1.jpg"/>
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
                    <li class="liFirstSocial"><img src="img/instagram.png"/></li>
                    <li class="liSecondSocial"><img src="img/twitter.png"/></li>
                    <li><img src="img/facebook.png"/></li>
                </div>
            </ul>
        </div>

        <div class="rightFooter">
            <ul>
                <div class="ulSocialFooter">
                    <li class="liFirstSocial">© Ambiente Consultoria - Todos os direitos reservados<br/</li>
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


        function curtidas(numero){

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

            if (estrela == 5){ 
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
            if (estrela == 4){ 
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
            if (estrela == 3){ 
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
            if (estrela == 2){ 
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
            if (estrela == 1){ 
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
