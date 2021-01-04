<div class='headerProdutos'>
    <div class='headerConteudo'>
        <img class="logo" src="{{URL::asset('imagem//logo.png')}}"><img />
        <a href="/">Home</a>
        <a href="/catalogo">Produtos</a>
        <input type="text" placeholder="Buscar" />
        <button class="buttonHeader">{{ Auth::user()->name }}</button>
        <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link class="buttonHeader" :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Logout') }}
                </x-responsive-nav-link>
            </form>
        <button class="mobileOpen" onclick="openNav()"><img src="imagem/menu.png" /></button>
    </div>
</div>
