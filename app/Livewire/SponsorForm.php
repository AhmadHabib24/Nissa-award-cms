<?php

namespace App\Livewire;

use Livewire\Component;

class SponsorForm extends Component
{
    public $name;
    public $company;
    public $email;
    public $phone;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'company' => 'nullable|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        \App\Models\SponsorInquiry::create([
            'name' => $this->name,
            'company' => $this->company,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);

        session()->flash('message', 'Thank you for your interest! We will get back to you soon.');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.sponsor-form');
    }
}
