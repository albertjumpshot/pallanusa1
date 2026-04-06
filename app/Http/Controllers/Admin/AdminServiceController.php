<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of services
     */
    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show form for creating new service
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created service
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:100',
        ]);

        Service::create($validated);

        return redirect()->route('admin.services.index')
            ->with('success', 'Layanan berhasil ditambahkan.');
    }

    /**
     * Show edit form
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update service
     */
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:100',
        ]);

        $service->update($validated);

        return redirect()->route('admin.services.index')
            ->with('success', 'Layanan berhasil diperbarui.');
    }

    /**
     * Delete service
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')
            ->with('success', 'Layanan berhasil dihapus.');
    }
}