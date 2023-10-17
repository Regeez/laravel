<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index()
    {
        $loan = Loan::all();
        return view('pages.index', ['loan' => $loan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        return;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'gender' => $request->gender,
            'amount' => $request->amount
        ];

        Loan::create($data);
        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * 
     */
    public function show($id)
    {
        return;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * 
     */
    public function edit($id)
    {
        $loaner = Loan::find($id);
        return view('pages.edit', ['loaner' => $loaner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * 
     * @param  int  $id
     * 
     */
    public function update(Request $request, $id)
    {
        $loaner = Loan::find($id);
        $loaner->name = $request->name;
        $loaner->gender = $request->gender;
        $loaner->amount = $request->amount;
        $loaner->save();

        return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * 
     */
    public function destroy($id)
    {
        $loaner = Loan::find($id);

        $loaner->delete();

        return redirect(route('index'));
    }
}
