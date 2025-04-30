<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    private $items = [
        ['id' => 1, 'name' => 'Item a'],
        ['id' => 2, 'name' => 'Item b'],
        ['id' => 3, 'name' => 'Item c'],
    ];

    public function index()
    {
        return view('items.index', ['items' => $this->items]);
    }
}
