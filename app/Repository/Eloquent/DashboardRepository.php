<?php

namespace App\Repository\Eloquent;

use App\Models\Subscriber;
use App\Models\Leads;
use App\Repository\Interfaces\DashboardInterface;
use Illuminate\Database\Eloquent\Model;

class DashboardRepository extends BaseRepository implements DashboardInterface
{
    public function __construct(protected Subscriber $subscriber, protected Leads $lead)
    {
        $this->subscriber = $subscriber;
        $this->lead = $lead;
    }

    public function get()
    {
        return $this->subscriber
            ->selectRaw('count(subscribers.ID) as number_of_sub, Country_ID as country_id, country_name')
            ->join('countries_v2', 'countries_v2.id', '=', 'subscribers.Country_ID')
            ->groupby('Country_ID')
            ->get();
    }

    public function getLeads()
    {
        return $this->lead->latest("ID")->limit(10)->get();
    }
}
