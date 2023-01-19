<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ganga;
use App\Http\Requests\GangaRequest;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class GangaController extends Controller
{
    public function index()
    {
        $gangas = Ganga::paginate(8);
        return view('gangas.index', compact('gangas'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('gangas.create', compact('categories'));
    }

    public function store(GangaRequest $request)
    {
        $ganga = new Ganga;
        $ganga->title = $request->title;
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(GangaRequest $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
