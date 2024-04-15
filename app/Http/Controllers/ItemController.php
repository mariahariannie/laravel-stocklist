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
    public function show($id)
    {
        $item =Item::findOrFail($id);
        return view('stocklist.read', ['item' => $item]);
        //return view('stocklist.read', compact('stocklist', 'item_id'));    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Item::find($id);
        return view('stocklist.update', ['item' => $item, 'is_default']);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $validator = Validator::make($request->all(),[
            'item_name'     => 'required|string|max:50',
            'item_desc'     => 'required|string|max:200',
            'item_price'    => 'required',
        ]);

        if ($validator->fails()){
            return redirect()->back()->with('errors', $validator->errors()->all());
        }

        $item = Item::find($id);
        $item->item_name = $request->item_name;
        $item->item_desc = $request->item_desc;
        $item->item_price = $request->item_price;
        $item->save();

        return redirect()->back()->with('success', 'Item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id);

        $item->delete();;

        return redirect()->back()->with('success', 'Item deleted successfully.');
    }
}
