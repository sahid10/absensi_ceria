<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    // Menampilkan semua item inventori
    public function index()
    {
        $items = Inventory::all();
        return view('Inventory.Inventory_index', compact('items'));
    }

    // Menampilkan form untuk menambah item baru
    public function create()
    {
        return view('Inventory.create');
    }

    // Menyimpan item baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'category' => 'required',
            'price' => 'required|numeric'
        ]);

        Inventory::create($request->all());

        return redirect()->route('Inventory.Inventory_index')->with('success', 'Item added successfully.');
    }

    // Menampilkan detail item
    public function show($id)
    {
        $item = Inventory::find($id);
        return view('Inventory.show', compact('item'));
    }

    // Menampilkan form untuk mengedit item
    public function edit($id)
    {
        $item = Inventory::find($id);
        return view('Inventory.edit', compact('item'));
    }

    // Mengupdate item
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'category' => 'required',
            'price' => 'required|numeric'
        ]);

        $item = Inventory::find($id);
        $item->update($request->all());

        return redirect()->route('Inventory.Inventory_index')->with('success', 'Item updated successfully.');
    }

    // Menghapus item
    public function destroy($id)
    {
        $item = Inventory::find($id);
        $item->delete();

        return redirect()->route('Inventory.Inventory_index')->with('success', 'Item deleted successfully.');
    }
}
