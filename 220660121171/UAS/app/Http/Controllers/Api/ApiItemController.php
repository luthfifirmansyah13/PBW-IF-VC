<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ApiItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'description' => 'nullable|string',
        ]);

        $item = Item::create($validated);
        return response()->json(['message' => 'Item created successfully.', 'item' => $item], 201);
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        return response()->json($item);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'description' => 'nullable|string',
        ]);

        $item = Item::findOrFail($id);
        $item->update($validated);

        return response()->json(['message' => 'Item updated successfully.', 'item' => $item]);
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return response()->json(['message' => 'Item deleted successfully.']);
    }
}
