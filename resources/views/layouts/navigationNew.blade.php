<header class="headerBox">
    <div class="headerContent">
        <div class="leftMenu">
            <img src="./imagem/lupa.png" />
            <form action="{{route('produtos.pesquisa')}}">
                <input type="text" id="buscar" name="buscar" placeholder="Buscar" class="buscarMenu" />
            </form>
        </div>
        <div class="centerMenu">
            <a href="/catalogo" class="optionMenu">Catalogo</a>
            <a class="Logo">Logo</a>
            <a class="optionMenu">Blog</a>
        </div>
        <div class="rightMenu">
            @if(!empty(Auth::user()->name))
            <div class="buttonLogin">
                <a href="/usuarioPerfil">
                    <p class="buttonGustavo">{{ Auth::user()->name }}</p>
                </a>

            </div>

            <form class="formMargin" method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link class="optionMenu" :href="route('logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Logout') }}
                </x-responsive-nav-link>
            </form>
            @else
            <a href="/login" class="optionMenu">Login</a>
            <a href="/register" class="optionMenu">Cadastre-se</a>
            <a class="mobileMenuOpen"><img src="./imagem/menu.png"></a>
            @endif
        </div>
    </div>
    <div class="borderBottom"></div>
</header>