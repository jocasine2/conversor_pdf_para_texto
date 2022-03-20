<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

#converter pdf para texto
use Spatie\PdfToText\Pdf;


class DogController extends Controller{
    
    public function index(){ 
        return view('conversor.form_conversor');
    }
    
    public function pdftotext(Request $request){
        return Pdf::getText($request->file('file'));
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}
