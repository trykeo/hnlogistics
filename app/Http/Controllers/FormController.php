<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use PDF;


class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::all();
        return view('index',compact('forms'));

        // if(Route::is('form.index')){
        //     $pdf = PDF::loadview('index');
        //     return $pdf->download('card-silver.pdf');
        // }
        
    }
    // public function downloadPDF()
    // {
    //    $forms = Form::all();
    //    $pdf = PDF::loadview('index', compact('forms'));
    //    return $pdf->download('card-silver.pdf');
    // }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = new Form();
        $form ->name = $request->name;
        $form ->phone = $request->phone;
        $form ->location = $request->location;
        $form ->joinmemberforpromotion = $request->joinmemberforpromotion;
        $form ->youareoldornew = $request->youareoldornew;
        $form ->areyousenderorreceiver = $request->areyousenderorreceiver;
        $form ->howoftenyousentgood = $request->howoftenyousentgood;
      
        $form->save();
        return view('thank');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * 
     */
    public function show($id)
    {
        $form = Form::find($id);
        return view('card', compact('form'));

        
    }

    public function goldpdf()
    {
        
        $form = Form::all();
        $pdf = PDF::loadview('card', compact('form'));
        return $pdf->download('goldcard.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
