<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lawyer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLawyerController extends Controller
{
    /**
     * Display a listing of lawyers
     */
    public function index()
    {
        $lawyers = Lawyer::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.lawyers.index', compact('lawyers'));
    }

    /**
     * Show form for creating new lawyer
     */
    public function create()
    {
        return view('admin.lawyers.create');
    }

    /**
     * Store a newly created lawyer
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'education' => 'required|string',
            'experience' => 'required|string',
            'photo' => 'nullable|string|max:255',
        ]);

        Lawyer::create($validated);

        return redirect()->route('admin.lawyers.index')
            ->with('success', 'Pengacara berhasil ditambahkan.');
    }

    /**
     * Show edit form
     */
    public function edit(Lawyer $lawyer)
    {
        return view('admin.lawyers.edit', compact('lawyer'));
    }

    /**
     * Update lawyer
     */
    public function update(Request $request, Lawyer $lawyer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'education' => 'required|string',
            'experience' => 'required|string',
            'photo' => 'nullable|string|max:255',
        ]);

        $lawyer->update($validated);

        return redirect()->route('admin.lawyers.index')
            ->with('success', 'Pengacara berhasil diperbarui.');
    }

    /**
     * Delete lawyer
     */
    public function destroy(Lawyer $lawyer)
    {
        $lawyer->delete();
        return redirect()->route('admin.lawyers.index')
            ->with('success', 'Pengacara berhasil dihapus.');
    }
}