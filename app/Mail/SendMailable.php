<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $viewData = [
            'receiver_name' => $this->mailData['receiver_name'] ?? 'Not Given',
            'name' => $this->mailData['name'] ?? 'Not Given',
            'email' => $this->mailData['email'] ?? 'Not Given',
            'father_name' => $this->mailData['father_name'] ?? 'Not Given',
            'gender' => $this->mailData['gender'] ?? 'Not Given',
            'dob' => $this->mailData['dob'] ?? 'Not Given',
            'mobile' => $this->mailData['mobile'] ?? 'Not Given',
            'district' => $this->mailData['district'] ?? 'Not Given',
            'constituency' => $this->mailData['constituency'] ?? 'Not Given'
        ];

        return $this -> view($this->mailData['email_template'])
                    -> from('dikshainfotech16@gmail.com', 'TWBF')
                    // -> cc($this->mailData['cc_email'], $this->mailData['cc_name'])
                    -> subject($this->mailData['subject'])
                    -> with($viewData);
    }
}
