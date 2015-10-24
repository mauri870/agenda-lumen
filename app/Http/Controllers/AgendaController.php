<?php
/**
 * Created by PhpStorm.
 * User: mauri870
 * Date: 24/10/15
 * Time: 19:27
 */

namespace Agenda\Http\Controllers;


class AgendaController extends Controller
{
    public function index()
    {
        return view('layouts.master');
    }
}