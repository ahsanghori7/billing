<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Repository\Interfaces\DashboardInterface;

class DashboardController extends Controller
{
    public function __construct(
        protected DashboardInterface $dashboard
    ) {
        $this->dashboard = $dashboard;
    }

    public function subcriberByCountry()
    {
        $data = $this->dashboard->get();

        if ($data) {
            return self::return($data, 200);
        }
        return self::return(['success' => false,  'message' => "no recode found"], 404);
    }

    public function latestLeads()
    {
        $data = $this->dashboard->getLeads();

        if ($data) {
            return self::return($data, 200);
        }
        return self::return(['success' => false,  'message' => "no recode found"], 404);
    }


    public static function return($data, $code)
    {
        return response()->json($data, $code);
    }
}
