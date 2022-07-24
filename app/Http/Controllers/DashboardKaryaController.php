<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Karya;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardKaryaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.karyas.index', [
            'karyas' => Karya::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.karyas.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //memvalidasi data
        $validateData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:karyas',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'media' => 'required|max:255',
            'ukuran' => 'required|max:255',
            'tahun' => 'required|max:255',
            'deskripsi' => 'required:255',

        ]);
        //melakukan pengecekan pada image, lalu di simpan di public folder post-images
        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-images');
        }
        //memvalidasi user atau seniman dengan cara mengautentikasi, lalu membuat karya
        //dan di kembalikan pada halaman dashboard untuk ditampilkan
        $validateData['user_id'] = auth()->user()->id;
        Karya::create($validateData);
        return redirect('/dashboard/karyas')->with('sukses', 'Karya baru ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function show(Karya $karya)
    {
        //
        if ($karya->user->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.karyas.show', [
            'karya' => $karya
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function edit(Karya $karya)
    {
        //
        if ($karya->user->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.karyas.edit', [
            'karya' => $karya,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karya $karya)
    {
        //
        $rules = [
            'judul' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'media' => 'required|max:255',
            'ukuran' => 'required|max:255',
            'tahun' => 'required|max:255',
            'deskripsi' => 'required:255',
        ];

        if ($request->slug != $karya->slug) {
            $rules['slug'] = 'required|unique:karyas';
        }

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('post-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Karya::where('id', $karya->id)
            ->update($validateData);
        return redirect('/dashboard/karyas')->with('sukses', ' berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karya $karya)
    {
        //

        if ($karya->image) {
            Storage::delete($karya->image);
        }
        Karya::destroy($karya->id);
        return redirect('/dashboard/karyas')->with('sukses', 'karya berhasil dihapus');
    }

    public function checkSlug(Request $request)
    {

        $slug = SlugService::createSlug(Karya::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
