<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\MyMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {


        $directory = 'attachments';

        // Create the directory if it doesn't exist
        if (!Storage::exists($directory)) {
            Storage::makeDirectory($directory);
        }
        $files = [];
        // Process the files
        if($request->has('vtcFile')){
            $files[] = $request->file('vtcFile')->store($directory);
        }
        if($request->has('ribFile')){
            $files[] = $request->file('ribFile')->store($directory);
        }
        if($request->has('assuranceFile')){
            $files[] = $request->file('assuranceFile')->store($directory);
        }
        if($request->has('cinFile')){
            $files[] = $request->file('cinFile')->store($directory);
        }
        if($request->has('carPicFile')){
            $files[] = $request->file('carPicFile')->store($directory);
        }
        if($request->has('macaronFileUp')){
            $files[] = $request->file('macaronFileUp')->store($directory);
        }
        if($request->has('carteGrisFile')){
            $files[] = $request->file('carteGrisFile')->store($directory);
        }
        if($request->has('vtcMacaronFile')){
            $files[] = $request->file('vtcMacaronFile')->store($directory);
        }
        /* $files[] = $request->file('macaronFile')->store($directory);
        $files[] = $request->file('rib')->store($directory);
        $files[] = $request->file('vtc')->store($directory); */


        $data = $request->only([
            'name', 'lastname', 'phone', 'email', 'beneficiare', 'beneficiare_rib', 'address',
            'mark', 'model', 'color', 'registration', 'mileage'
        ]);

        Mail::to('contact@vtcconnectparis.fr')->send(new MyMailable($data, $files));

        return response()->json(['message' => 'Email sent successfully!']);
    }
}
