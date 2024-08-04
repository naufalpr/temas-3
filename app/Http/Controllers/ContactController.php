<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Code/kontak/kontak', [
            'contact' => Contact::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('Code/kontak/kontak');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:rfc,dns|max:1024',
            'body' => 'required'
        ]);

        // if($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('news-images');
        // }

        Contact::create($validatedData);

        return redirect('/kontak')->with('success', 'Pesan berhasil dikirim');
    }

    /**
     * Display the specified resource.
     */
    // public function show(News $news)
    // {
    //     return view('dashboard.news.show', [
    //         'news' => $news
    //     ]);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(News $news)
    // {
    //     return view('dashboard.news.edit', [
    //         'news' => $news
    //     ]);
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, News $news)
    // {
    //     $rules = [
    //         'title' => 'required|max:255',
    //         'image' => 'image|file|max:1024',
    //         'body' => 'required'
    //     ];

    //     if($request->slug != $news->slug) {
    //         $rules['slug'] = 'required|unique:news';

    //     }

    //     $validatedData = $request->validate($rules);

    //     if($request->file('image')) {
    //         if($request->oldImage) {
    //             Storage::delete($request->oldImage);
    //         }
    //         $validatedData['image'] = $request->file('image')->store('news-images');
    //     }

    //     $validatedData['user_id'] = auth()->user()->id;
    //     $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

    //     News::where('id', $news->id)
    //         ->update($validatedData);

    //     return redirect('/dashboard/news')->with('success', 'Berita berhasil diubah');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(News $news)
    // {
    //     if($news->image) {
    //         Storage::delete($news->image);
    //     }
    //     News::destroy($news->id);
    //     return redirect('/dashboard/news')->with('success', 'Berita berhasil dihapus');
    // }

    // public function checkSlug(Request $request) {
    //     $slug = SlugService::createSlug(News::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }
}
