<?php

namespace App\Livewire;

use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactPage extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ];

    public function submit()
    {
        $this->validate();
        $mailData = [
            'subject' => 'Got a new email',
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        ];
        Mail::to('admin@example.com')->send(new ContactEmail($mailData));

        session()->flash('success', 'Thanks for contacing us');

        $this->redirect('/contact');
    }
    public function render()
    {
        return view('livewire.contact-page');
    }
}
