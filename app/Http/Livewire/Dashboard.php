<?php

namespace App\Http\Livewire;

use App\Models\Limit;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Http;


class Dashboard extends Component
{
    public int $click = 0;
    public string $response;

    public function getText()
    {
        /*if($this->click <= 10)
        {
            $response = Http::get('https://baconipsum.com/api/?type=meat-and-filler&paras=5&format=text')->getBody();
            $this->response = $response;
        }*/

        if($this->click === 10)
        {
            $this->dispatchBrowserEvent('swal', [
                'type'      => "error",
                'title'     => "Something went wrong",
                'text'      => "You've already clicked 10 times."
            ]);

            $this->createLimit();

        }
        $this->click++;
    }

    protected function createLimit()
    {
        $id = auth()->user()->id;
        Limit::query()->create([
            'user_id' => $id
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
