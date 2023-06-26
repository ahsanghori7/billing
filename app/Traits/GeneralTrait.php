<?php

namespace App\Traits;

use App\Models\Stats;
use App\Models\ShortcodesStats;
use Illuminate\Support\Facades\DB;
use App\Repository\Interfaces\ServiceInterface;
use App\Repository\Interfaces\QueueCallbacksInterface;
use App\Models\Password;
use Illuminate\Support\Facades\Schema;

trait GeneralTrait
{
    public function addToStats($payLoad)
    {
        $date = date("Y-m-d");
        $Month = date('m');
        $Week = date('W');
        $Year = date('Y');

        $conditions = ['Subservice_ID' => $payLoad->subService_ID, 'Date' => $date,
                'Source_ID' => $payLoad->source,'Subsource_ID' => $payLoad->subsource];

        Stats::firstOrCreate($conditions, ['Week' => $Week,'Month' => $Month,'Year' => $Year]);

        switch ($payLoad->type) {
            case 'sub':
                $query = Stats::where($conditions)->update([
                    'CurrentActive' => DB::raw('CurrentActive + 1'),
                    'NewUsers' => DB::raw('NewUsers + 1'),
                ]);
                break;
            case 'unSub':
                $query = Stats::where($conditions)->update([
                    'Unsubscribers' => DB::raw('Unsubscribers + 1'),
                    'CurrentActive' => DB::raw('CurrentActive - 1'),
                ]);
                break;
            case 'newUnSub':
                $query = Stats::where($conditions)->update([
                    'Unsubscribers' => DB::raw('Unsubscribers + 1'),
                    'CurrentActive' => DB::raw('CurrentActive - 1'),
                    'NewUnsubs' => DB::raw('NewUnsubs + 1'),
                ]);
                break;

            case 'firstBilling':
                $query = Stats::where($conditions)->update([
                    'Delivered' => DB::raw('Delivered + 1'),
                    'NewChargedUsers' => DB::raw('NewChargedUsers + 1'),
                    'Failed' => DB::raw('Failed - 1'),
                ]);
                break;
            case 'instantBilling':
                $query = Stats::where($conditions)->update([
                    'Delivered' => DB::raw('Delivered + 1'),
                    'NewChargedUsers' => DB::raw('NewChargedUsers - 1'),
                    'Failed' => DB::raw('Failed - 1'),
                    'InstantCharged' => DB::raw('InstantCharged + 1'),
                ]);
                break;
            case 'pinSend':
                $query = Stats::where($conditions)->update([
                    'PinSent' => DB::raw('PinSent + 1'),
                ]);
                break;
            case 'duplicatePinSend':
                $query = Stats::where($conditions)->update([
                    'DuplicatePinSent' => DB::raw('DuplicatePinSent + 1'),
                ]);
                break;
            case 'delivered':
                $query = Stats::where($conditions)->update([
                    'Delivered' => DB::raw('Delivered + 1'),
                    'Failed' => DB::raw('Failed - 1'),
                ]);
                break;
            case 'sent':
                $query = Stats::where($conditions)->update([
                    'Sent' => DB::raw('Sent + 1'),
                    'Failed' => DB::raw('Failed + 1'),
                ]);
                break;
            return;
        }
        return true;
    }

    public function handleCallback(object $payLoad)
    {
        try {
            $serviceObject = app(ServiceInterface::class);
            $service = $serviceObject->getCallbackURL($payLoad);
            $link = null ;
            if ($service) {
                $link = $service->subService->count() > 0 ? $service->subService[0]->callback_url :
                $service->callback_url;
            }

            return $link;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function addCredentialToText($subscriber, $msisdn, $text)
    {
        if (!strpos($text, '[username]')) {
            return $text;
        }
        $password = Password::where(['subscriber_id' => $subscriber->ID])->first()?->password;
        if (!$password) {
            return $text;
        }

        $text = str_replace("[username]", $msisdn, $text);
        $text = str_replace("[password]", $password, $text);
        return $text;
    }

    public function encode($string, $enc = false)
    {
        if ($enc === true) {
            return '' . implode(unpack('H*', iconv("UTF-8", "UCS-2BE", $string)));
        } else {
            return bin2hex($string);
        }
    }

    public function log(array $data, string $table = 'exceptions', string $conn = null)
    {
        try {
            $conn = $conn ? $conn : env('DB_CONNECTION_INTEGRATION');
            $data = array_merge($data, ["created_at" =>  date('Y-m-d H:i:s')]);
            if ($table !== 'request_life_cycle') {
                if (!Schema::connection($conn)->hasColumn($table, "created_at")) {
                    unset($data['created_at']);
                }
                DB::connection($conn)->transaction(function () use ($table, $data, $conn) {
                    DB::connection($conn)
                    ->table($table)
                    ->insert($data);
                });
            }

            if (env('MONGODB')) {
                DB::connection(env('DB_CONNECTION_MONGO'))
                ->collection($table)
                ->insert($data);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
