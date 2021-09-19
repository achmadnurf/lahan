<?php

namespace App\Http\Livewire\Lahan;

use App\Models\Lahan;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'lahanDeleted'
    ];

    public function lahanDeleted(){
        $this->dispatchBrowserEvent('show-message', [
            "type"=>"success",
            "message" => "Lahan Berhasil Di Hapus"
        ]);
    }

    public function render()
    {
        $list_lahan = Lahan::query();
        $list_lahan = $list_lahan->paginate(10);
        return view('livewire.lahan.index', compact('list_lahan'));
    }
}
