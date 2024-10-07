<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loja;

class lojasOficiaisController extends Controller
{
    public function index()
    {
        $lojas = Loja::all();
        return view('lojasOficiais', compact('lojas'));
    }


    public function showApple()
    {
        // Lógica para mostrar a loja da Apple
        return view('loja.apple'); // Altere para a sua view
    }

    public function showXiaomi()
    {
        // Lógica para mostrar a loja da Xiaomi
        return view('loja.xiaomi'); // Altere para a sua view
    }


    public function store(Request $request)
    {
        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $requestImage = $request->file('logo');
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('images/lojasLogo'), $imageName);

            $loja = new Loja;
            $loja->nome = $request->nome;
            $loja->logo = $imageName;
            $loja->save();

            return redirect()->route('lojasOficiais')->with('success', 'Loja adicionada com sucesso!');
        }

        return redirect()->back()->withErrors(['logo' => 'Logo is required or invalid.']);
    }



}
