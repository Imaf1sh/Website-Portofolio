<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Experience;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio landing page.
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        $workExperiences = Experience::where('type', 'work')->orderBy('id', 'desc')->get();
        $educationExperiences = Experience::where('type', 'education')->orderBy('id', 'desc')->get();

        return view('portfolio', compact('projects', 'workExperiences', 'educationExperiences'));
    }

    /**
     * Handle contact form submission via AJAX.
     */
    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:10',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'message.required' => 'Pesan wajib diisi.',
            'message.min' => 'Pesan minimal terdiri dari 10 karakter.',
        ]);

        ContactMessage::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Pesan Anda berhasil dikirim! Terima kasih telah menghubungi saya.'
        ]);
    }
}
