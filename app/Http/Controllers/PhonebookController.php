<?php

namespace App\Http\Controllers;

use App\Phonebook;
use App\Http\Requests\PhonebookRequest;

class PhonebookController extends Controller
{

    public function index()
    {
        return view('phonebook');

    }

    public function getData(){
        return Phonebook::orderBy('name','ASC')->get();
    }


    public function create()
    {
        //
    }

    public function store(PhonebookRequest $request)
    {
       $phonebook = new Phonebook;
       $phonebook->name = $request->name;
       $phonebook->phone = $request->phone;
       $phonebook->email = $request->email;
       $phonebook->save() ;

       return $phonebook;
    }


    public function show(Phonebook $phonebook)
    {
        //
    }


    public function edit(Phonebook $phonebook)
    {
        //
    }


    public function update(PhonebookRequest $request)
    {
        $phonebook = Phonebook::find($request->id);
        $phonebook->name = $request->name;
        $phonebook->phone = $request->phone;
        $phonebook->email = $request->email;
        $phonebook->save() ;
    }


    public function destroy(Phonebook $phonebook)
    {
        Phonebook::where('id',$phonebook->id)->delete();
    }
}
