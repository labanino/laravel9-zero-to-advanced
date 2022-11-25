<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Aque se mostrara el listado de posts';
    }

    public function create()
    {
        return 'Aque se mostrara el formulario para crear un nuevo posts';
    }

    public function store()
    {
        return 'Aque se procesara el posts'; // get is only used in the url
    }

    public function show($post)
    {
        return "Aque se mostrara el post $post"; // get is only used in the url
    }

    public function edit($post)
    {
        return "Aqui se mostrara el formulario para editar el post $post";
    }

    public function update($post)
    {
        return "Aque se actualizara el post $post"; // get is only used in the url
    }

    public function destroy($post)
    {
        return "Aque se eliminara el post $post"; // get is only used in the url
    }
}
