<h1> Atividades {{$atividade->id}}</h1>
<hr>
<h3><b>ID:</b> {{$atividade->id}}</h3>
<h3><b>Título:</b> {{$atividade->scheduledto}}</h3>
<h3><b>Descrição:</b> {{$atividade->description}}</h3>
<h3><b>Criada em:</b> {{$atividade->created_at}}</h3>
<h3><b>Atualizada em:</b> {{$atividade->update_at}}</h3>
<br>
<a href="/atividades/{{$atividade->id}}/edit">editar</a>

