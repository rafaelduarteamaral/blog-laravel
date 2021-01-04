<header class="headerBox">
        <div class="headerContent">
            <div class="leftMenu">
                <img src="./imagem/lupa.png" />
                <input class="buscarMenu" placeholder="buscar...">
            </div>
            <div class="centerMenu">
                <a href="/catalogo" class="optionMenu">Catalogo</a>
                <a class="Logo">Logo</a>
                <a class="optionMenu">Blog</a>
            </div>
            <div class="rightMenu">
                @if(!empty(Auth::user()->name))
                <div class="buttonLogin">
                    <button class="buttonGustavo">{{ Auth::user()->name }}</button>
                    <img src="./imagem/user.png"/>
                </div>

                <form class="formMargin" method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link class="optionMenu" :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Logout') }}
                </x-responsive-nav-link>
            </form>
                @else
                <a href="/login" class="optionMenu">Login</a>
                <a href="/register"class="optionMenu">Cadastre-se</a>
                <a class="mobileMenuOpen"><img src="./imagem/menu.png"></a>
                @endif
            </div>
        </div>
        <div class="borderBottom"></div>
    </header>