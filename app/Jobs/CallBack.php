<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Services\ProcessSubscriberService;
use Throwable;
use Illuminate\Bus\Batchable;

class CallBack implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;
    use Batchable;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 5;

     /**
     * The maximum number of unhandled exceptions to allow before failing.
     *
     * @var int
     */
    public $maxExceptions = 3;


    /**
     * The number of seconds to wait before retrying the job.
     *
     * @var int
     */
    public $backoff = 15;
    /**
     * Create a new job instance.
     */
    public function __construct(protected $request)
    {
        $this->onQueue('call_back');

        $this->request = $request;
    }

    /**
     * Execute the job.
     */
    public function handle(ProcessSubscriberService $processSubscriber): void
    {
        $processSubscriber->processCallback($this->request);
    }

     /**
     * Handle a job failure.
     */
    public function failed(Throwable $exception): void
    {
        // Send user notification of failure, etc...
    }
}
