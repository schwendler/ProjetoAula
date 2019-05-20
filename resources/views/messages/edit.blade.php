<h1>Formulário de Edição de Mensagens</h1>
<hr>

<form action="/messages/{{$messages->id}}" method="post"> 
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    Título: <input type="text" name="titulo" value="{{$messages->titulo}}">                 <br><br>
    Texto: <input type="text" name="texto" value="{{$messages->texto}}">           <br><br>
    Autor: <input type="text" name="autor" value="{{$messages->autor}}">           <br><br>
    <input type="submit" value="Salvar">
</form>

<!--Mensagem -->
@if ($errors->any())
    <div class="container">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif