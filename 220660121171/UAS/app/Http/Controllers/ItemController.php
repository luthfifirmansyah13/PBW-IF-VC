<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\items;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = item::all();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'description' => 'nullable|string',
        ]);

        Item::create($request->all());
        return redirect()->route('items.index')->with('success', 'Item created successfully.');
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'description' => 'nullable|string',
        ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('items.index')->with('success', 'Item updated successfully.');
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
    }
}
