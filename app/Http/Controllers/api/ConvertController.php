<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

#converter pdf para texto
use Spatie\PdfToText\Pdf;

class ConvertController extends Controller{
        
    public function pdftotext(Request $request){
        $data = $request->all();

        if($request->hasFile('file')){
            return Pdf::getText($request->file('file'));
        }else{
            #salva o documento para extrair o texto
            $pdf = file_get_contents("http://".env("HOST_FILE_TJTO", "")."/".$data['uuid_documento']);
            file_put_contents(public_path('pdf/get_text.pdf'), $pdf);

            #retorna o texto do pdf
            return Pdf::getText(public_path('pdf/get_text.pdf'));
        }
    }

}
