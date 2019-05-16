<h1>Lista de Mensagem</h1>
<hr>
@foreach($messages as $a)
	<h3>{{$a->titulo}}</h3>
	<p><a href="/messages/{{$a->id}}">{{$a->texto}}</a></p>
	<p>{{$a->autor}}</p>
	<br>
@endforeach

<!--Mensagem -->
@if ($errors->any())
    <div class="container">
        <div class="alert alert-success">
			{{ \Session::get('success') }}
        </div>
    </div>
@endif