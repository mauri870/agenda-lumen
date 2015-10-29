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
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AgendaController extends Controller
{
    /**
     * @return $this
     */
    public function index()
    {

        $pessoas = Pessoa::where('apelido','like','A%')->paginate(5);
        $letters = $this->getLetters();
        return view('agenda',compact('pessoas','letters'));
    }

    /**
     * @param $letter
     * @return $this
     */
    public function letter($letter)
    {
        $pessoas = Pessoa::where('apelido','like',$letter.'%')->paginate(5);
        $letters = $this->getLetters();
        return view('agenda',compact('pessoas','letters'));
    }

    /**
     * @param Request $request
     * @return $this
     */
    public function search(Request $request)
    {
        $word = $request->input('pesquisa');
        $pessoas = Pessoa::where('apelido','like','%'.$word.'%')->orWhere('nome','like','%'.$word.'%')->paginate(5);
        $letters = $this->getLetters();
        return view('search',compact('pessoas','letters'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deletePerson($id)
    {
        $person = Pessoa::find($id);
        if($person == null){
            throw new NotFoundHttpException;
        }

        $person->delete();
        return redirect()->to(route('home'));


    }


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deletePhone($id)
    {
        $phone = Telefone::find($id);
        if($phone == null){
            throw new NotFoundHttpException;
        }

        $phone->delete();
        return redirect()->to(route('home'));
    }

    /**
     * @return array
     */
    public function getLetters()
    {
        $letters = [];
        foreach(Pessoa::all() as $pessoa){
            $letters[] = strtoupper(substr($pessoa->apelido,0,1));
        }

        sort($letters);

        return array_unique($letters);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function createPerson()
    {
        $letters = $this->getLetters();
        return view('person.create',compact('letters'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function createPersonPost(Request $request)
    {
        $new = Pessoa::create($request->all());
        $letter = strtoupper(substr($new->apelido,0,1));
        return redirect(route('home.letter',['letter'=>$letter]));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function editPerson($id)
    {
        $person = Pessoa::find($id);
        $letters = $this->getLetters();
        return view('person.edit',compact('letters','person'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function editPersonPost($id,Request $request)
    {
        $new = Pessoa::
        create($request->all());
        $letter = strtoupper(substr($new->apelido,0,1));
        return redirect(route('home.letter',['letter'=>$letter]));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function createPhone()
    {
        $letters = $this->getLetters();
        return view('person.create',compact('letters'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function createPhonePost()
    {
        $letters = $this->getLetters();
        return view('person.create',compact('letters'));
    }
}