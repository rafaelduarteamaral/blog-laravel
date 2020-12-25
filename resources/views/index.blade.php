<html>

<head>
    <title>Projeto</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
    <div class='headerProdutos'>
        <div class='headerConteudo'>
            <figure>
                <img src="storage/logo.png" alt="Minha Figura">
            </figure>
            <form class="Login" method="post" action="{{route('user.login')}}">
                <div id="email" class='headerEmail'>
                    <input type="email" placeholder="Email" /><br>
                    <input type="checkbox" name="Lembrar de mim">
                    <label for="Lembrar de mim">Lembrar de mim</label>
                </div>
                <div id="senha" class="headerSenha">
                    <input type="password" placeholder="Senha" /></br>
                    <a href="resources/views/books.blade.php">Esqueceu?</a>
                </div>
                    <button tyrpe="submit" class="buttonHeader">Conectar</button>
            </form>
        </div>
    </div>
    <hr class="Separacao">
    <div class="containerCadastro">
        <div class="imageminicial">
            <figure>
                <img src="storage/inicial.png">
            </figure>
        </div>
        <!-- <div class="novasContas">
            <h2>Novo Aqui? Cria sua conta gratuíta</h2>
            <input type="text" placeholder="Nome"> <br>
            <input type="email" placeholder="E-mail"> <br>
            <input type="password" placeholder="Senha"> <br>
            <button class="buttonCadastra">Cadastrar</button>
            <div class="termos">By clicking “Sign up” I agree to the Goodreads Terms of Service and confirm that I am at least 13 years old.</div>
        </div> -->
    </div>

    <div class="conteudoPagina">
        <div id="esquerda" class="esquerda"></div>
        <div id="direita" class="direita"></div>
        <div id="grid1" class="grid1">
            <h2><b>
                    <center>12th Annual Goodreads Choice Awards</center>
                </b>
            </h2>
            <center>See the winners in the only major book awards decided by readers.<center>
                    <center><button class="buttonConteudo">See the winners</button></center>
                    <div class="links">
                        <li><a href="#">Best Fiction</a></li>
                        <li><a href="#">Best Romance</a></li>
                        <li><a href="#">Best Science Fiction</a></li>
                        <li><a href="#">Best Mystery & Thriller</a></li>
                        <li><a href="#">Best Nonfiction</a></li>
                        <li><a href="#">Best Humor</a></li>
                        <li><a href="#">Best Fantasy</a></li>
                        <li><a href="#">Best Young Adult Fiction</a></li>
                        <li><a href="#">Best Historical Fiction</a></li>
                    </div>
        </div>

        <div id="grid2" class="grid2">
            <!-- <h3>News & Interviews</h3></br>
            <p><a href="#">27 New Dystopian Novels for Your Post-Apocalyptic Reading List</a></p>
            <figure>
                <a href="#"><img src="storage/logo.png" alt="Minha Figura">
            </figure>

            <div class="list">
                <h2>Love lists?<h2></br>
                        <div class="listTeaser">
                            <a href="#">Best Books of the 20th Century</a>
                        </div>
            </div> -->
        </div>

        <div id="grid3" class="grid3">
            <div class="boxEsquerda">
                <h3>Deciding what to read next?</h3>
                <p>You’re in the right place. Tell us what titles or genres you’ve enjoyed in the past, and we’ll give you surprisingly insightful recommendations.</p>
            </div>
            <div class="boxDireita">
                <h3>What are your friends reading?</h3>
                <p>Chances are your friends are discussing their favorite (and least favorite) books on Goodreads.</p>
            </div>
        </div>
        <div id="grid4" class="grid4">
            Search and browse books
            <input type="text" id="pesquisa" placeholder="Title / Author / ISBN">
        </div>
        <div class="boxPesquisar">
            <div class="left" style="width: 25%">
                <a class="links" href="/genres/art">Art</a><br>

                <a class="links" href="/genres/biography">Biography</a><br>

                <a class="links" href="/genres/business">Business</a><br>

                <a class="links" href="/genres/children-s">Children&#39;s</a><br>

                <a class="links" href="/genres/christian">Christian</a><br>

                <a class="links" href="/genres/classics">Classics</a><br>

                <a class="links" href="/genres/comics">Comics</a><br>

                <a class="links" href="/genres/cookbooks">Cookbooks</a><br>
            </div>
            <div class="left" style="width: 25%">
                <a class="links" href="/genres/ebooks">Ebooks</a><br>

                <a class="links" href="/genres/fantasy">Fantasy</a><br>

                <a class="links" href="/genres/fiction">Fiction</a><br>

                <a class="links" href="/genres/graphic-novels">Graphic Novels</a><br>

                <a class="links" href="/genres/historical-fiction">Historical Fiction</a><br>

                <a class="links" href="/genres/history">History</a><br>

                <a class="links" href="/genres/horror">Horror</a><br>

                <a class="links" href="/genres/memoir">Memoir</a><br>

            </div>
            <div class="left" style="width: 25%">
                <a class="links" href="/genres/music">Music</a><br>

                <a class="links" href="/genres/mystery">Mystery</a><br>

                <a class="links" href="/genres/non-fiction">Nonfiction</a><br>

                <a class="links" href="/genres/poetry">Poetry</a><br>

                <a class="links" href="/genres/psychology">Psychology</a><br>

                <a class="links" href="/genres/romance">Romance</a><br>

                <a class="links" href="/genres/science">Science</a><br>

                <a class="links" href="/genres/science-fiction">Science Fiction</a><br>

            </div>
            <div class="left" style="width: 25%">
                <a class="links" href="/genres/self-help">Self Help</a><br>

                <a class="links" href="/genres/sports">Sports</a><br>

                <a class="links" href="/genres/thriller">Thriller</a><br>

                <a class="links" href="/genres/travel">Travel</a><br>

                <a class="links" href="/genres/young-adult">Young Adult</a><br>

                <a class="links" href="/genres">More genres</a>

            </div>
        </div>

    </div>
    <footer>
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
                        <li class="liFirstSocial"><img src="img/instagram.png" /></li>
                        <li class="liSecondSocial"><img src="img/twitter.png" /></li>
                        <li><img src="img/facebook.png" /></li>
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
    </footer>

</body>

</html>