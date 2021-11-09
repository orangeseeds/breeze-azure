<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\ApplicationForm;
use Illuminate\Support\Facades\Mail;
use App\Models\Course;
use App\Models\Consultancy;

class SendApplicationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $details=[];
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        //
        $this->details = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->details['consultancy_name'] = Consultancy::where('id',$this->details['consultancy_id'])->first()->name;
        $this->details['course'] = Course::where('id',$this->details['course_id'])->first()->name;
        $email = new ApplicationForm($this->details);
        Mail::to('test@mail')->send($email);

        //change the sent status of data to yes/true

    }
}
