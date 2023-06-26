<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MondiaPay\NotificationService;

class MondiaPayNotificatonController extends Controller
{
    public function __construct(
        protected NotificationService $notification,
    ) {
        $this->notification = $notification;
    }

    public function create(Request $request)
    {
        $this->notification->noticiationCreate((object) $request);
    }
}
