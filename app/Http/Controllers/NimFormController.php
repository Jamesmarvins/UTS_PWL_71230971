<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class NimFormController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => ['required', 'string', 'max:30'],
            'nama' => ['required', 'string', 'max:100'],
        ]);
 
        return view('nim-result', [
            'nim' => $validated['nim'],
            'nama' => $validated['nama'],
        ]);
    }
}