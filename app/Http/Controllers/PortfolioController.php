<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Projeto;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projetos = Projeto::all();

        return view('portfolio.index', ['projetos' => $projetos]);
    }

    /**
     * Mostra o formulário para criar um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('portfolio.create');
    }

    /**
     * Armazena um recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projeto = new Projeto();

        $projeto->alt = $request->input('alt');
        $projeto->titulo = $request->input('titulo');
        $projeto->descricao = $request->input('descricao');
        $projeto->url = $request->input('url');
        $projeto->codigo_fonte = $request->input('codigo_fonte');

        if ($request->hasFile('imagem')) {

            $imagem = $request->file('imagem');
            $nomeImagem = time().'.'.$imagem->getClientOriginalExtension();
            $caminhoImagem = public_path('uploads'); // ajuste o diretório conforme necessário
            $imagem->move($caminhoImagem, $nomeImagem);
            $projeto->imagem = 'uploads/' . $nomeImagem;
        }

        $projeto->save();

        return redirect()->route('home')->with('success', 'Projeto adicionado com sucesso.');
    }

    /**
     * Exibe o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove o recurso especificado do armazenamento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
