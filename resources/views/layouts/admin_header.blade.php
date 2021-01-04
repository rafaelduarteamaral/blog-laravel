<header class="headerComponent">
        <div class="headerContainer">
            <div class="headerContent">
                <div class="leftContent">
                    <h1 class="titleLeft">ADMIN Blog</h1>
                </div>
                <div class="rightContent">
                    <a href="/admin_produtos" class="optionHeader">Produtos</a>
                    <a href="/produtos_cadastrados" class="optionHeader">Prod. Cadastrados</a>
                    <a href="/user" class="optionHeader">Usuarios</a>
                    <a href="/adminPublicacoes" class="optionHeader">Publicacoes</a>
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link class="optionHeader" :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Logout') }}
                </x-responsive-nav-link>
                </form>
                </div>
                <div class="divMobileOption">
                    <a class="mobileMenu" onclick="openNav()"><img src="imagem/menu.png"/></a>
                </div>
            </div>
        </div>
    </header>