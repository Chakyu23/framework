<?php 

namespace App\Http\controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Author;


class AuthorController extends Controller
{

    public function index() {

        $authors = Author::all();
        return view('author.index', compact("authors"));
    }
    
    public function create() {

        return view('author.create');
    }

    public function store(Request $request) {
        $author = new Author();
        $author->name = $request->get('name');
        $author->save();

        return redirect()->route("author.index");
    }

    public function show($id) {
        $author = Author::with("books")->find($id);
        return view('author.show', compact("author"));
    }

    public function edit($id) {
        $author = Author::find($id);

        return view('author.edit', compact("author"));
    }

    public function update(Request $request, $id) {
        $author = Author::find($id);
        $author->name = $request->get('name');
        $author->save();

        return redirect()->route("author.index");
    }

    public function destroy(Request $request) {
        Author::destroy( $request->get("author_id"));

        return redirect()->route("author.index");
    }
}



