<?php

namespace App\Http\Controllers;

class ListItemController extends Controller
{
    public function index()
    {
        // Contoh data yang akan ditampilkan
        $items = ['Item 1', 'Item 2', 'Item 3'];
        return view('list_item', compact('items')); // pastikan file list_item.blade.php ada di resources/views
    }
}
