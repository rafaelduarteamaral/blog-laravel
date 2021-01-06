
@foreach($comentarios as $c)
<div class="comentBox">
    <div class="imgBox">
        <img class="imgComent" src="imagem/Capturar.PNG" />
        <h1 class="nameComent">Isabela</h1>
    </div>
    <div class="textBox">
        <p class="coment"></p>
    </div>
    <div class="likesBox">
        <form action="{{curtidas.inserir}}" method="post">
        <input type="number" name="curtida" />
        <buttom class="curtidas">Curtir</buttom>
        <span class="numCurtidas"><span id="num">{{$c->curtidas}}</span> curtidas</span>
        </form>
    </div>
</div>
@endforeach