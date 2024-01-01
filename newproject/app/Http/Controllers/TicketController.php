<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\City;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('ticket.show',['tickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $companies = Company::all();
        return view('ticket.create',['companies' => $companies, 'cities' => $cities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->city_id);
        $validator = Validator::make($request->all(), [
            'date_start' => 'required',
            'date_end' => 'required',
            'company_id' => 'required|exists:companies,id',
            'city_id' => 'required|exists:cities,id',
        ]);
        if ($validator->fails()) {
            return response($validator->messages());
        }
        $ticket = new Ticket();
        $ticket->date_start = $request->date_start;
        $ticket->date_end = $request->date_end;
        $ticket->city_id = $request->city_id;
        $ticket->company_id = $request->company_id;
        $ticket->save();
        return redirect()->route('ticket');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = Ticket::find($id); 
        $cities = City::all();
        $companies = Company::all();       
        return view('ticket.edit',['ticket'=>$ticket , 'companies'=>$companies , 'cities'=>$cities]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->city_id);
        $validator = Validator::make($request->all(), [
            'date_start' => 'required|before:date_end',
            'date_end' => 'required|after:date_start',
            'company_id' => 'required|exists:companies,id',
            'city_id' => 'required|exists:cities,id',
        ]);
        if ($validator->fails()) {
            return response($validator->messages());
        }
        $ticket =Ticket::find($request->id);
        $ticket->date_start = $request->date_start;
        $ticket->date_end = $request->date_end;
        $ticket->city_id = $request->city_id;
        $ticket->company_id = $request->company_id;
        $ticket->save();
        return redirect()->route('ticket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
