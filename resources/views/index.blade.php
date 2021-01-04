<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/indexPage.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
    @include('layouts.navigationNew')

    <div class="container">
        <div class="containerSubHeader">
            <div class="containerSubHeaderLeft">
                <div class="textContainerSubHeader">
                    <h1 class="textContentSubHeader">Conheça os melhores produtos do mercado</h1>
                    <h1 class="text2ContentSubHeader">Com avaliações de clientes</h1>
                    <button class="buttonConheca">conheça</button>
                </div>
            </div>
            <div class="containerSubHeaderRight">
                <div class="imgSliderBox mySlides">
                    <img class="imgSlider" src="./imagem/slide1.jpg" />
                </div>
                <div class="imgSliderBox mySlides">
                    <img class="imgSlider " src="./imagem/slide2.jpg" />
                </div>
                <div class="imgSliderBox mySlides">
                    <img class="imgSlider" src="./imagem/slide3.jpg" />
                </div>
                <!-- The dots/circles -->
                <div style="text-align:center">
                    <button class="buttonSlider" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="buttonSlider" onclick="plusDivs(+1)">&#10095;</button>
                </div>
            </div>
        </div>

        <div class="containerTituloPost">
            <div class="bordaTituloPost"></div>
            <h1 class="textTituloPost">Veja as principais informações sobre</br> o mundo da maquiagem</h1>
        </div>

        <div class="postsContainer">
            <div class="boxPost">
                <div class="boxBorda">
                    <div class="bordaConteudoPost"></div>
                </div>
                <div class="titlePost">
                    <h1>Título do Post</h1>
                </div>
                <div class="imagemPost">
                    <img class="imagemPostContent" src="./imagem/post1.jpg" />
                </div>
                <div class="descricaoPost">
                    <h1>Essa é uma descrição do post, algumas informaçoes breves</h1>
                </div>
                <div class="textPost">
                    <p>It is a long established fact that a reader will be distracted by the readable
                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                        that it has a more-or-less normal distribution of letters, as opposed to using
                        'Content here, content here', making it look like readable English. Many desktop
                        publishing packages and web page editors now use Lorem Ipsum as their default model
                        text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                        Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                        (injected humour and the like).</p>
                </div>
            </div>
        </div>

        <div class="postsContainer">
            <div class="boxPost">
                <div class="boxBorda">
                    <div class="bordaConteudoPost"></div>
                </div>
                <div class="titlePost">
                    <h1>Título do segundo Post</h1>
                </div>
                <div class="imagemPost">
                    <img class="imagemPostContent" src="./imagem/post1.jpg" />
                </div>
                <div class="descricaoPost">
                    <h1>Essa é outra descrição do post, algumas informaçoes breves</h1>
                </div>
                <div class="textPost">
                    <p>It is a long established fact that a reader will be distracted by the readable
                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                        that it has a more-or-less normal distribution of letters, as opposed to using
                        'Content here, content here', making it look like readable English. Many desktop
                        publishing packages and web page editors now use Lorem Ipsum as their default model
                        text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                        Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                        (injected humour and the like).</p>
                </div>
            </div>
        </div>

        @if(empty(Auth::user()->name))
        <div class="containerSubHeader containerSubPub">
            <div class="containerSubHeaderLeft containerSubHeaderLeftLast">
                <div class="textContainerSubHeader">
                    <h1 class="textContentSubHeader">Novo aqui?</h1>
                    <h1 class="text2ContentSubHeader">Faça seu cadastro e fique por dentro das novidades</h1>
                    <button class="buttonConheca buttonSubCadastro">Cadastrar-se</button>
                </div>
            </div>
        </div>
        @endif
    </div>



    <div class="borderFooter">
        <div class="borderBottom"></div>
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
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }

        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) {
                slideIndex = 1
            }
            x[slideIndex - 1].style.display = "block";
            setTimeout(carousel, 3000); // Change image every 2 seconds
        }
    </script>


</body>

</html>