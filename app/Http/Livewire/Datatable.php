<?php

namespace App\Http\Livewire;

use App\Models\BruteForce;
use Livewire\Component;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;

    public $dataArray;
    protected $paginationTheme = 'bootstrap';
    
    public function mount()
    {
        $this->dataArray = BruteForce::select(['log_ip', 'log_domain', 'log_uri', 'log_reason', 'log_user'])->paginate(15); 
    }

    public function render()
    {
        return view('livewire.datatable');
    }
}
