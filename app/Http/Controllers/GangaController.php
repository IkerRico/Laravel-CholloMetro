<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ganga;
use App\Http\Requests\GangaRequest;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class GangaController extends Controller
{
    public function index()
    {
        $gangas = Ganga::paginate(8);
        $title = '';
        return view('gangas.index', compact('gangas', 'title'));
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
        $ganga->description = $request->description;
        $ganga->url = $request->url;
        $ganga->category_id = $request->category;
        $ganga->likes = 0;
        $ganga->unlikes = 0;
        $ganga->price = $request->price;
        $ganga->price_sale = $request->price;
        $ganga->aviable = true;
        $ganga->user_id = Auth::user()->id;
        $ganga->save();

        $imagen = $request->file('img');
        $fileName = $ganga->id . '-ganga-severa.jpg';
        $imagen->storeAs('/public/img', $fileName);
        return redirect()->route('ganga.index');
    }

    public function show($id)
    {
        $ganga = Ganga::findOrFail($id);
        return view('gangas.show', compact('ganga'));
    }

    public function edit($id)
    {
        $ganga = Ganga::findOrFail($id);
        $categories = Category::all();
        return view('gangas.edit',compact('ganga','categories'));
    }

    public function update(GangaRequest $request, $id)
    {
        $ganga = Ganga::findOrFail($id);
        $ganga->title = $request->title;
        $ganga->description = $request->description;
        $ganga->url = $request->url;
        $ganga->category_id = $request->category;
        $ganga->likes = 0;
        $ganga->unlikes = 0;
        $ganga->price = $request->price;
        $ganga->price_sale = $request->price;
        $ganga->aviable = true;
        $ganga->user_id = Auth::user()->id;
        $ganga->save();

        $imagen = $request->file('img');
        $fileName = $ganga->id . '-ganga-severa.jpg';
        $imagen->storeAs('/public/img', $fileName);
        return redirect()->route('ganga.index');
    }

    public function destroy($id)
    {
        Ganga::findOrFail($id)->delete();
        return redirect()->route('ganga.index');
    }

    public function getUserGangas()
    {
        $gangas = Ganga::where('user_id', '=', Auth::user()->id)->paginate(8);
        $title = 'de ' . ucfirst(Auth::user()->name);
        return view('gangas.index', compact('gangas','title'));
    }
}
