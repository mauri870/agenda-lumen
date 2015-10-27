<?php
/**
 * Created by PhpStorm.
 * User: mauri870
 * Date: 24/10/15
 * Time: 19:27
 */

namespace Agenda\Http\Controllers;


use Agenda\Pessoa;
use Agenda\Telefone;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {

        $pessoas = Pessoa::where('apelido','like','A%')->paginate(5);
        return view('agenda')
            ->with('pessoas',$pessoas);
    }

    public function letter($letter)
    {
        $pessoas = Pessoa::where('apelido','like',$letter.'%')->paginate(5);
        return view('agenda')
            ->with('pessoas',$pessoas);
    }

    public function search(Request $request)
    {
        $word = $request->input('pesquisa');
        $pessoas = Pessoa::where('apelido','like','%'.$word.'%')->orWhere('nome','like','%'.$word.'%')->paginate(5);
        return view('search')
            ->with('pessoas',$pessoas);
    }
}