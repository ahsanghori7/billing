<?php

namespace App\Services;

use App\Traits\GeneralTrait;
use App\Repository\Interfaces\SubServiceInterface;
use App\HttpRequest\HttpRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProcessSubscriberService extends HttpRequest
{
    use GeneralTrait;

    public function __construct(protected SubServiceInterface $subService)
    {
        $this->subService = $subService;
    }

    public function sendContent(object $subscriber)
    {
        try {
                $where = array(
                    'id' => $subscriber->subService_ID,
                    'welcome_enabled' => 1
                );
                if ($subscriber->type == 'GoodBye') {
                    unset($where['welcome_enabled']);
                }
                $subserviceDetails = $this->subService->findOne(
                    $where,
                    ['*'],
                    ['welcomeMsg', 'integration']
                );
            $msg = null;
            if ($subserviceDetails) {
                if ($subscriber->type == 'Welcome' && $subserviceDetails->welcomeMsg->welcome_enabled) {
                    if ($subserviceDetails->welcomeMsg && $subscriber->FreeCounter != 0) {
                        $msg = $subserviceDetails->welcomeMsg->text ? $subserviceDetails->welcomeMsg->text
                         : $subserviceDetails->welcomeMsg->free_text ;
                         $shortcode = $subserviceDetails->welcomeMsg->shortcode ;
                    } elseif ($subserviceDetails->welcomeMsg) {
                        $msg = $subserviceDetails->welcomeMsg->text ;
                        $shortcode = $subserviceDetails->welcomeMsg->shortcode ;
                    }
                    if ($msg) {
                        $msg = $this->addCredentialToText($subscriber, $subserviceDetails->msisdn, $msg);
                    }
                } elseif ($subscriber->type == 'GoodBye') {
                    $msg = $subserviceDetails->welcomeMsg->exit_text;
                }
                 $messageType = $subserviceDetails->welcomeMsg->type ;
                 $messageEncoded = $subserviceDetails->integration->message_encoded;
                 $userId = $subscriber->Leads_ID;
                 $messageID = uniqid();
                 $type = $subscriber->type ;

                if ($subscriber->free) {
                    $shortcode = $subserviceDetails->free_shortcode;
                    $url = $subserviceDetails->integration->send_free_mt_url;
                } else {
                    $shortcode = $subserviceDetails->shortcode;
                    $url = $subserviceDetails->integration->send_mt_url;
                }

                if ($messageEncoded == 1) {
                    $messageContent = ($messageType == 8) ? $this->encode($msg, true) : $this->encode($msg, false) ;
                } else {
                    $messageContent = $msg;
                }
                $body = array("MSG" => $messageContent,'subscriber' => $subscriber->ID,'shortcode' => $shortcode,
                'MessageType' => $messageType,'UserID' => $userId,'Type' => $type);

                $response = $this->sendRequest('POST', $url, json_encode($body));
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function processCallback(object $subscriber): void
    {
        try {
            $link = $this->handleCallback($subscriber);
            if (!$link) {
                return ;
            }

            $body = [
            'msisdn' => $subscriber->msisdn,
            'user_id' => $subscriber->Leads_ID,
            'action' => $subscriber->action,
            'subservice_id' => $subscriber->subService_ID,
            ];

            if ($subscriber->action == 'sub') {
                $body = array_merge($body, ['password' => Str::random(8)]);
            }

            $this->sendRequest('POST', $link, json_encode($body));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
