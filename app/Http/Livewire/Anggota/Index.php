<?php

namespace App\Http\Livewire\Anggota;

use App\Models\Anggota;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'anggotaDeleted'
    ];

    public function anggotaDeleted(){
        $this->dispatchBrowserEvent('show-message', [
            "type"=>"success",
            "message" => "Lahan Berhasil Di Hapus"
        ]);
    }

    public function render()
    {
        $list_anggota = Anggota::query();
        $list_anggota = $list_anggota->paginate(10);
        return view('livewire.anggota.index', compact('list_anggota'));
    }
}
