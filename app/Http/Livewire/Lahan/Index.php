<?php

namespace App\Http\Livewire\Lahan;

use App\Models\Lahan;
use Livewire\Component;

class Index extends Component
{
    public $search;
    protected $queryString = ['search'=> ['except' => '']];
    public $limitPerPage = 10;
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
        $list_lahan = Lahan::latest()->paginate($this->limitPerPage);
        
        if ($this->search !== null){
            $list_lahan = Lahan::where('dokumen','like','%' . $this->search . '%')
            ->latest()->paginate($this->limitPerPage);
        }
        $this->emit('lahanStore');
        // $list_lahan = Lahan::query();
        // $list_lahan = $list_lahan->paginate(10);
        return view('livewire.lahan.index', ['list_lahan' => $list_lahan]);
        // return view('livewire.lahan.index', compact('list_lahan'));
    }

}
