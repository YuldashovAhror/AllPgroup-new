<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class SendFileEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $filePath;
    public $fileName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($filePath, $fileName)
    {
        $this->filePath = $filePath;
        $this->fileName = $fileName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.letter')
            ->attach($this->filePath, [
                'as' => $this->fileName,
                'mime' => Storage::mimeType($this->filePath),
            ]);
    }
}