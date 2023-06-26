<?php

namespace App\Observers;

use App\Models\Subscriber;
use App\Models\TracePalestine;
use App\Models\TraceProcessSubscriber;
use App\Traits\GeneralTrait;
use App\Jobs\ProcessAffiliateCallback;
use App\Jobs\SendSms;
use App\Jobs\CallBack;
use Illuminate\Bus\Batch;
use Illuminate\Support\Facades\Bus;
use App\Repository\Interfaces\SubscriberInterface;

class SubscriberObserver
{
    use GeneralTrait;

    protected $id ;

    /**
     * Handle the Subscriber "created" event.
     */
    public function created(Subscriber $subscriber): void
    {
            $subscriber["type"] = 'sub';
            $this->addToStats((object) $subscriber);

            $subscriber["action"] = 'sub';
            ProcessAffiliateCallback::dispatch((object) $subscriber)->afterCommit();

        if ($subscriber->ProcessingMessage == 0) {
            $this->id = $subscriber->Leads_ID;
            $subscriber['type'] = 'welcome';
            $batch = Bus::batch([
            new CallBack((object) $subscriber),
            new SendSms((object) $subscriber),
            ])->then(function (Batch $batch) {
                $subscriberObject = app(SubscriberInterface::class);
                $subscriberObject->update(['Leads_ID' => $this->id], ['ProcessingMessage' => 1]);
            })->name('send_sms')->onQueue('send_sms')->dispatch();
        }
    }

    /**
     * Handle the Subscriber "updated" event.
     */
    public function updated(Subscriber $subscriber): void
    {
        //
    }

    /**
     * Handle the Subscriber "deleted" event.
     */
    public function deleted(Subscriber $subscriber): void
    {
        //
    }

    /**
     * Handle the Subscriber "restored" event.
     */
    public function restored(Subscriber $subscriber): void
    {
        //
    }

    /**
     * Handle the Subscriber "force deleted" event.
     */
    public function forceDeleted(Subscriber $subscriber): void
    {
        //
    }
}
