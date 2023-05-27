<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\Feedback as ModelsFeedback;
use App\Models\Vacancy;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Feedback extends Component
{
    use WithFileUploads;
    
    public $first_name1, $phone1, $clients1, $photo1, $discription1;
    public $first_name2, $phone2, $clients2, $photo2, $discription2;
    public $first_name3, $phone3, $photo3, $discription3, $vacancy;

    public function feedback1()
    {
        // dd($this->discription1);
        $feedback = new ModelsFeedback();
        $feedback->client_id = $this->clients1;
        $feedback->name = $this->first_name1;
        $feedback->phone = $this->phone1;
        $feedback->discription = $this->discription1;

        // dd($this->photo1);
        if(!empty($this->photo1)){
            $img_name = Str::random(10).'.'.$this->photo1->getClientOriginalExtension();
            $this->photo1->storeAs('/image/feedback/', $img_name);
            $feedback->photo = '/image/feedback/'.$img_name;
        }
        $feedback->save();

        $this->resetVariables1();

    }

    function resetVariables1(){
        $this->first_name1 = '';
        $this->phone1 = '';
        $this->photo1 = '';
        $this->discription1 = '';
    }

    public function feedback2()
    {
        // dd($this->discription1);
        $feedback = new ModelsFeedback();
        $feedback->client_id = $this->clients2;
        $feedback->name = $this->first_name2;
        $feedback->phone = $this->phone2;
        $feedback->discription = $this->discription2;

        // dd($this->photo1);
        if(!empty($this->photo2)){
            $img_name = Str::random(10).'.'.$this->photo2->getClientOriginalExtension();
            $this->photo2->storeAs('/image/feedback/', $img_name);
            $feedback->photo = '/image/feedback/'.$img_name;
        }
        $feedback->save();

        $this->resetVariables2();

    }

    function resetVariables2(){
        $this->first_name2 = '';
        $this->phone2 = '';
        $this->photo2 = '';
        $this->discription2 = '';
    }


    public function feedback3()
    {
        // dd($this->discription1);
        $feedback = new ModelsFeedback();
        $feedback->name = $this->first_name3;
        $feedback->phone = $this->phone3;
        $feedback->discription = $this->discription3;
        $feedback->vacancy_number = $this->vacancy;

        // dd($this->photo1);
        if(!empty($this->photo3)){
            $img_name = Str::random(10).'.'.$this->photo3->getClientOriginalExtension();
            $this->photo3->storeAs('/image/feedback/', $img_name);
            $feedback->photo = '/image/feedback/'.$img_name;
        }
        $feedback->save();

        $this->resetVariables3();

    }

    function resetVariables3(){
        $this->first_name3 = '';
        $this->phone3 = '';
        $this->photo3 = '';
        $this->discription3 = '';
        $this->vacancy = '';
    }



    public function render()
    {
        $vacancies = Vacancy::orderBy('id', 'desc')->get();
        $clients = Client::orderBy('id', 'desc')->get();
        return view('livewire.feedback', [
            'vacancies'=>$vacancies,
            'clients'=>$clients,
            
        ]);
    }
}
