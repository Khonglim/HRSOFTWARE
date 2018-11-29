<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class HREmail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;

    /**

     * Create a new message instance.

     *

     * @return void

     */

    public function __construct( $user)

    {

        $this->user = $user;

    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'no-reply@ngg-co.com';
        $subject = 'เมลล์จากระบบบ';
        $name = 'HR NGG';
        $headerData = [
            'category' => 'category',
            'unique_args' => [
                'variable_1' => 'abc'
            ]
        ];

        $header = $this->asString($headerData);
        
        $this->withSwiftMessage(function ($message) use ($header) {
            $message->getHeaders()
                    ->addTextHeader('X-SMTPAPI', $header);
        });

        return $this->view('emails.HR_NGG')->from($address, $name)
        ->cc($address, $name)
        ->bcc($address, $name)
        ->replyTo($address, $name)
        ->subject($subject)
        ->with([ 'data' => $this->user ]);
    }

    private function asJSON($user)
    {
        $json = json_encode($user);
        $json = preg_replace('/(["\]}])([,:])(["\[{])/', '$1$2 $3', $json);

        return $json;
    }


    private function asString($user)
    {
        $json = $this->asJSON($user);
        
        return wordwrap($json, 76, "\n   ");
    }
}
