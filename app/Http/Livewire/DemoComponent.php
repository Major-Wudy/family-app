<?php

namespace App\Http\Livewire;

use App\Helpers\View\IconHelper;
use Livewire\Component;

class DemoComponent extends Component
{
    // Variables for toast message demo
    public $toastBg, $toastTopic, $toastText;

    public function render()
    {
        return view('livewire.demo.component');
    }

    // Toast message demo
    public function toastMessage($type)
    {
        if ($type == 'success') {
            $this->toastBg = 'bg-success';
            $this->toastTopic = 'success';
            $this->toastText = 'It is a success!';
        } else {
            $this->toastBg = 'bg-danger';
            $this->toastTopic = 'error';
            $this->toastText = 'It is an error!';
        }

        $this->emit('toastMessageEvent');

    }

}
