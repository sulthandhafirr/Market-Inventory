<?php

namespace App\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Index extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = '10';
    public $search = '';
    public function render()
    {
        $data = array(
            'user' => User::where('name','like','%'.$this->search.'%')
                ->orWhere('email','like','%'.$this->search.'%')
                ->orWhere('role','like','%'.$this->search.'%')
                ->orderBy('role','asc')->paginate($this->paginate),
        );
        return view('livewire.admin.user.index', $data);
    }
}
