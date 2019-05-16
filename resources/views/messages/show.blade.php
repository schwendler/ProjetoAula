<h1> Menssagens {{$messages->id}}</h1>
<hr>
<h3><b>ID:</b> {{$messages->id}}</h3>
<h3><b>Título:</b> {{$messages->titulo}}</h3>
<h3><b>Texto:</b> {{$messages->texto}}</h3>
<h3><b>Autor:</b> {{$messages->autor}}</h3>
<h3><b>Criada em:</b> {{$messages->created_at}}</h3>
<h3><b>Atualizada em:</b> {{$messages->update_at}}</h3>
<br>
<a href="/messages/{{$messages->id}}/edit">editar</a>
