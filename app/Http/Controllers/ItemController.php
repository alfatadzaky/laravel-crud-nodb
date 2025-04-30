<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    private $items = [
        ['id' => 1, 'name' => 'Item A'],
        ['id' => 2, 'name' => 'Item B'],
        ['id' => 3, 'name' => 'Item C'],
    ];

    public function index()
    {
        return view('items.index', ['items' => $this->items]);
    }
}
