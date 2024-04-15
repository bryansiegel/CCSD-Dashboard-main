<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bid;

class BidsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bids = Bid::all();
        return view('bids.index', compact('bids'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bids.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'bid_name' => 'required'
        ]);

        $bid = new Bid;
        $bid->bid_name = $request->input('bid_name');
        $bid->save();

        return redirect()->route('bids.index')->with('success', 'Bid was saves');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bid = Bid::find($id);
        return view('bids.show', compact('bid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bid = Bid::find($id);
        return view('bids.edit', compact('bid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'bid_name' => 'required'
        ]);

        $bid = Bid::find($id);
        $bid->update($request->all());
        return redirect()->route('bids.index')
            ->with('success', 'bid updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bid = Bid::find($id);
        $bid->delete();
        return redirect()->route('bids.index')
        ->with('success', 'Bid has been deleted');
    }
}
