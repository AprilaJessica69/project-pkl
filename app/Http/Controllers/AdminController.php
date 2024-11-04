<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all(); // Mengambil semua data admin
        return view('admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create'); // Tampilkan form untuk membuat admin baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_admin' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        // Simpan admin baru
        $admin = new Admin();
        $admin->nama_admin = $request->nama_admin;
        $admin->email = $request->email;
        $admin->save();

        return redirect()->route('admin.index')->with('message', 'Admin berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        return view('admin.edit', compact('admin')); // Tampilkan form untuk mengedit admin
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        // Validasi input
        $request->validate([
            'nama_admin' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        // Update data admin
        $admin->nama_admin = $request->nama_admin;
        $admin->email = $request->email;
        $admin->save();

        return redirect()->route('admin.index')->with('message', 'Admin berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        $admin->delete(); // Hapus admin
        return redirect()->route('admin.index')->with('message', 'Admin berhasil dihapus!');
    }
}
