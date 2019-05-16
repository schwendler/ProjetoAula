<?php

namespace App\Http\Controllers;

use App\messages;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;

class MensagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaMessages = messages::all();
        return view('messages.list',['messages' => $listaMessages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = array (
            'titulo.required' => 'É obrigatório atribuir um título para a mensagem',
            'texto.required' => 'É obrigatório atribuir um texto para a mensagem',
            'autor.required' => 'É obrigatório atribuir um autor para a mensagem',
        );

        $regras = array(
            'titulo' => 'required|string|max:255',
            'texto' => 'required',
            'autor' => 'required|string',
        );
        
        $validador = Validator::make($request->all(), $regras, $messages);
        
        if ($validador->fails()) {
            return redirect('messages/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        
        $obj_messages = new messages();
        $obj_messages->titulo = $request['titulo'];
        $obj_messages->texto = $request['texto'];
        $obj_messages->autor = $request['autor'];
        $obj_messages->save();
        return redirect('/messages')->with('success', 'Mensagem criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $messages = messages::find($id);
        return view('messages.show', ['messages' => $messages]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj_mensagem = mensagem::find($id);
        return view('message.edit', ['message' => $obj_mensagem]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, messages $messages)
    {
        $messages = array (
            'titulo.required' => 'É obrigatório atribuir um título para a mensagem',
            'texto.required' => 'É obrigatório atribuir um texto para a mensagem',
            'autor.required' => 'É obrigatório atribuir um autor para a mensagem',
        );

        $regras = array(
            'titulo' => 'required|string|max:255',
            'texto' => 'required',
            'autor' => 'required|string',
        );
        
        $validador = Validator::make($request->all(), $regras, $messages);
        
        if ($validador->fails()) {
            return redirect("messages/$id/edit")
            ->withErrors($validador)
            ->withInput($request->all);
        }
        
        $obj_messages = Atividade::find($id);
        $obj_messages->titulo =       $request['titulo'];
        $obj_messages->texto = $request['texto'];
        $obj_messages->autor = $request['autor'];
        $obj_messages->save();
        return redirect('/messages')->with('success', 'Mensagem editada com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy(messages $messages)
    {
        //
    }
}
