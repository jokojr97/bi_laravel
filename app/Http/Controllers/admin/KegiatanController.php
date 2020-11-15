<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Kegiatan;
use App\KegiatanAttachment;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = Kegiatan::latest()->paginate(15);
        return view('admin.kegiatan.index', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'keyword' => 'required',
            'exercipt' => 'required',
        ]);

        $slug = strtolower($request->title);
        $slug = str_replace(" ", "-", $slug);
        $slug = str_replace("?", "", $slug);
        $slug = str_replace("!", "", $slug);
        $slug = str_replace(":", "", $slug);
        $slug = str_replace(";", "", $slug);

        $image = $request->feature_image;
        if ($image) {
            $new_image = $slug.time().$image->getClientOriginalName();

            $kegiatan = Kegiatan::create([           
                'title' => $request->title,
                'content' => $request->content,
                'feature_image' => $new_image,
                'author' => $request->author,
                'keywords' => $request->keyword,
                'exercipt' => $request->exercipt, 
                'status' => $request->status,
                'slug' => $slug,
                'language' => $request->language,
                'lokasi' => $request->lokasi,
                'lat' => $request->lat, 
                'long' => $request->long,
                'published_at' => $request->published_at,
            ]);

            $image->move('uploads/kegiatan/', $new_image);
        }else {
            $kegiatan = Kegiatan::create([           
                'title' => $request->title,
                'content' => $request->content,
                'feature_image' => '',
                'author' => $request->author,
                'keywords' => $request->keyword,
                'exercipt' => $request->exercipt, 
                'status' => $request->status,
                'slug' => $slug,
                'language' => $request->language,
                'lokasi' => $request->lokasi,
                'lat' => $request->lat, 
                'long' => $request->long,
                'published_at' => $request->published_at,
            ]);
        }

        $kegiatan_id = Kegiatan::latest()->first()->id;

        foreach($request->file('attachments') as $file){
            $new_file = $slug."-".time().$file->getClientOriginalName();
            $file->move('uploads/kegiatan/', $new_file);
            $attachment = KegiatanAttachment::create([
                'kegiatan_id' => $kegiatan_id,
                'attachment' => $new_file
            ]);
        }

        return redirect()->route('admin.kegiatan.index')->with('success', 'Kegiatan Berhasil ditambahkan!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resofilee.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        //
    }
}
