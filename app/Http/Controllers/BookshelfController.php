<?php

namespace App\Http\Controllers;

use App\Models\Bookshelf;
use Illuminate\Http\Request;

class BookshelfController extends Controller
{
    public function index()
    {
        return Bookshelf::all();
    }

    public function store(Request $request)
    {
        return Bookshelf::create($request->all());
    }

    public function show($id)
    {
        return Bookshelf::with('books')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $data = Bookshelf::findOrFail($id);
        $data->update($request->all());

        return $data;
    }

    public function destroy($id)
    {
        Bookshelf::destroy($id);
        return ['message' => 'deleted'];
    }
}