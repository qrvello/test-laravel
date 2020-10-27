<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;

class Items extends Component
{
    public $items, $items_selected, $name, $selected;

    public function render()
    {
        $this->items = Item::where('selected', false)
            ->get();
        $this->items_selected = Item::where('selected', true)
        ->get();
        return view('livewire.items');
    }

    public function store()
    {
        $this->validate(['name' => 'required|unique:items']);
        Item::create([
            'name' => $this->name,
            'selected' => false,
        ]);

        $this->name = '';
    }

    public function select(Item $item)
    {
        $this->selected = $item->id;
    }

    public function moveToItemsSelected(){
        $item = Item::find($this->selected);
        $item->selected = true;
        $item->save();
    }

    public function moveToItemsNonSelected(){
        $item = Item::find($this->selected);
        $item->selected = false;
        $item->save();
    }
}
