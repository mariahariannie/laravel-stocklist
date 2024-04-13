<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = Item::all()->toArray();
        return view('stocklist.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stocklist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'item_name'     => 'required|string|max:50',
            'item_desc'     => 'required|string|max:200',
            'item_price'    => 'required',
        ]);
        
        if ($validator->fails()){
            return redirect()->back()->with('errors', $validator->errors());
        }

        Item::create([
            'item_name'     => $request->item_name,
            'item_desc'     => $request->item_desc,
            'item_price'    => $request->item_price,
        ]);

        //return redirect()->back()->with('success', 'Item added successfully.');
        return redirect()->route('stocklist.index')
            ->with('success', 'Item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($item_id)
    {
        $item =Item::findOrFail($item_id);
        return view('stocklist.read', ['item' => $item]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($item_id)
    {
        $item = Item::find($item_id);
        return view('stocklist.update', ['item' => $item, 'is_default']);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $item_id)
    {
        $item = Item::findOrFail($item_id);
        $validator = Validator::make($request->all(),[
            'item_name'     => 'required|string|max:50',
            'item_desc'     => 'required|string|max:200',
            'item_price'    => 'required',
        ]);

        if ($validator->fails()){
            return redirect()->back()->with('errors', $validator->errors()->all());
        }

        $item = Item::find($item_id);
        $item->item_name = $request->item_name;
        $item->item_desc = $request->item_desc;
        $item->item_price = $request->item_price;
        $item->save();

        return redirect()->back()->with('success', 'Item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($item_id)
    {
        $item = Item::findOrFail($item_id);

        $item->delete();;

        return redirect()->back()->with('success', 'Item deleted successfully.');
    }
}
