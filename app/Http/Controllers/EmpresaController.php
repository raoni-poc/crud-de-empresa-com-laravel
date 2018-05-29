<?php

namespace App\Http\Controllers;

use App\Empresa;
use Form;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    private $empresa;

    public function __construct(Empresa $empresa)
    {
        $this->empresa = $empresa;
    }

    public function index(Request $request)
    {
        $empresas = $this->empresa->paginate(5);
        return view('empresa.index', [  'empresas' => $empresas]);
    }

    public function create()
    {
        $options = [
            'method' => 'post',
            'route' => ['empresa.store'],
        ];
        return view('empresa.create', ['options'=>$options]);
    }

    public function store(Request $request)
    {
        $empresa = $this->empresa->newInstance($request->all());
        if($empresa->save()) {
            return redirect()->route('empresa.show', $empresa->id);
        }
        throw new \Exception('Não foi possivél salvar empresa');
    }

    public function show(Empresa $empresa)
    {
        Form::model($empresa->toArray());
        return view('empresa.show', ['empresa' => $empresa]);
    }

    public function edit(Empresa $empresa)
    {
        Form::model($empresa->toArray());
        $options = [
            'method' => 'patch',
            'route' => ['empresa.update', $empresa->id],
        ];
        return view('empresa.edit', ['empresa' => $empresa, 'options'=>$options]);
    }

    public function update(Request $request, Empresa $empresa)
    {
        if($empresa->update($request->toArray())) {
            return redirect()->route('empresa.show', $empresa->id);
        }
        throw new \Exception('Não foi possivél atualizar empresa');
    }

    public function destroy(Empresa $empresa)
    {
        if($empresa->delete()){
            return redirect()->route('empresa.index');
        }
        throw new \Exception('Não foi possivél deletar empresa');
    }
}
