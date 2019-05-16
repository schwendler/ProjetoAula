<h1>Formulário de Edição de Atividades</h1>
<hr>

<form action="/atividades/{{$atividade->id}}" method="post"> 
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    Título: <input type="text" name="title" value="{{$atividade->title}}">                 <br><br>
    Descrição: <input type="text" name="description" value="{{$atividade->description}}">           <br><br>
    Agendado para: <input type="datetime-local" name="scheduledto" value="{{Carbon\carbon::parse($atividade->scheduledto)->format('Y-m-d\TH:i:s')}}"> <br><br>
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