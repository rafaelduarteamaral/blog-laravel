<div class="sideContainerContent">
                <span class="itemImg"><img class="imgSide" src="imagem/principal.jpg" /></span>
                @foreach($categoria as $cat)
                <h3 class="itemBusca">{{$cat->nome}}</h3>
                @endforeach
</div>