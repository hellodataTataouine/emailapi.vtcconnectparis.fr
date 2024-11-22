<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Data for the email
    public $files; // Files to be attached

    public function __construct($data, $files)
    {
        $this->data = $data;
        $this->files = $files; // Expecting an array of file paths
    }

    public function build()
    {
        $email = $this->view('emails.my_view')
                      ->with(['data' => $this->data]);

        // Attach each file
        foreach ($this->files as $file) {
            $email->attach(storage_path('app/' . $file)); // Adjust the path as necessary
        }

        return $email;
    }
}
