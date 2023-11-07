<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class DashboardAdmin extends Component
{
    protected $debug = true;


    public $test = 0;

    public function click()
    {
        $this->test++;
        // dd($this->test);
    }

    public function render()
    {
        return view('livewire.admin.dashboard-admin',[
            'test' => $this->test
        ]);
    }
}
