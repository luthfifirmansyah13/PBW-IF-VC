<?php

// Menentukan namespace untuk controller ini, yaitu berada dalam folder App\Http\Controllers
namespace App\Http\Controllers;

// Mengimpor kelas Request untuk menangani request HTTP
use Illuminate\Http\Request;

// Mengimpor model Post untuk mengakses data pada tabel posts
use App\Models\Post;

// Mengimpor Inertia untuk merender tampilan (views) dengan menggunakan Inertia.js
use Inertia\Inertia;

class PostController extends Controller
{
    /**
     * Menampilkan daftar semua post.
     *
     * @return response()
     */
    public function index()
    {
        // Menggunakan Inertia untuk merender tampilan 'Posts/Index' dan mengirimkan data posts
        return Inertia::render('Posts/Index', [
            'posts' => Post::latest()->get()
        ]);
    }

    /**
     * Menampilkan form untuk membuat post baru.
     *
     * @return response()
     */
    public function create()
    {
        // Menggunakan Inertia untuk merender tampilan 'Posts/Create' untuk membuat post baru
        return Inertia::render('Posts/Create');
    }

    /**
     * Menyimpan post baru ke dalam database.
     *
     * @return response()
     */
    public function store(Request $request)
    {
        // Melakukan validasi data yang dikirimkan
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        // Membuat instance baru dari model Post dan mengisi kolom dengan data yang divalidasi
        Post::create($validated);

        // Mengarahkan pengguna ke halaman daftar post (index) dengan pesan sukses
        return redirect()->route('posts.index')
            ->with('message', 'Post created successfully.');
    }

    /**
     * Menampilkan post yang dipilih.
     *
     * @return response()
     */
    public function show(Post $post)
    {
        // Menggunakan Inertia untuk merender tampilan 'Posts/Show' dan mengirimkan data post yang ingin ditampilkan
        return Inertia::render('Posts/Show', [
            'post' => $post
        ]);
    }

    /**
     * Menampilkan form untuk mengedit post yang ada.
     *
     * @return response()
     */
    public function edit(Post $post)
    {
        // Menggunakan Inertia untuk merender tampilan 'Posts/Edit' dan mengirimkan data post yang ingin diedit
        return Inertia::render('Posts/Edit', [
            'post' => $post
        ]);
    }

    /**
     * Memperbarui post yang ada di database.
     *
     * @return response()
     */
    public function update(Request $request, Post $post)
    {
        // Melakukan validasi data yang dikirimkan
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        // Memperbarui data post dengan data yang divalidasi
        $post->update($validated);

        // Mengarahkan pengguna kembali ke halaman daftar post dengan pesan sukses
        return redirect()->route('posts.index')
            ->with('message', 'Post updated successfully.');
    }

    /**
     * Menghapus post dari database.
     *
     * @return response()
     */
    public function destroy(Post $post)
    {
        // Menghapus post yang dipilih dari database
        $post->delete();

        // Mengarahkan pengguna kembali ke halaman daftar post dengan pesan sukses
        return redirect()->route('posts.index')
            ->with('message', 'Post deleted successfully.');
    }
}