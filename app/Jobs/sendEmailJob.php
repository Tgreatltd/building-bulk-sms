<?php

namespace App\Jobs;

use App\Mail\sendEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class sendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $data;
    public function __construct($data)
    {
        $this->data =$data;
        $this->data =$data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to('olamoyeguntimothy@gmail.com')->send(new sendEmail($this->data));
    }
}
