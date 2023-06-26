<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Interfaces\EloquentRepositoryInterface;
use App\Repository\Eloquent\BaseRepository;
use App\Repository\Eloquent\OperatorRepository;
use App\Repository\Interfaces\OperatorInterface;
use App\Repository\Eloquent\leadRepository;
use App\Repository\Interfaces\LeadInterface;
use App\Repository\Eloquent\SubServiceRepository;
use App\Repository\Interfaces\SubServiceInterface;
use App\Repository\Eloquent\SubscriberRepository;
use App\Repository\Interfaces\SubscriberInterface;
use App\Repository\Eloquent\MarketingAffiliatesRepository;
use App\Repository\Interfaces\MarketingAffiliatesInterface;
use App\Repository\Eloquent\ServiceRepository;
use App\Repository\Interfaces\ServiceInterface;
use App\Repository\Eloquent\MessagesTemplateRepository;
use App\Repository\Interfaces\MessagesTemplateInterface;
use App\Repository\Eloquent\LandingRepository;
use App\Repository\Interfaces\LandingInterface;
use App\Repository\Eloquent\MondiaPayLeadRepository;
use App\Repository\Interfaces\MondiaPayLeadInterface;
use App\Repository\Eloquent\MondiaPayNotificationRepository;
use App\Repository\Interfaces\MondiaPayNotificationInterface;
use App\Repository\Eloquent\IntegrationRepository;
use App\Repository\Interfaces\IntegrationInterface;
use App\Repository\Eloquent\DashboardRepository;
use App\Repository\Interfaces\DashboardInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->singleton(OperatorInterface::class, OperatorRepository::class);
        $this->app->singleton(LeadInterface::class, leadRepository::class);
        $this->app->singleton(SubServiceInterface::class, SubServiceRepository::class);
        $this->app->singleton(SubscriberInterface::class, SubscriberRepository::class);
        $this->app->singleton(MarketingAffiliatesInterface::class, MarketingAffiliatesRepository::class);
        $this->app->singleton(ServiceInterface::class, ServiceRepository::class);
        $this->app->singleton(MessagesTemplateInterface::class, MessagesTemplateRepository::class);
        $this->app->singleton(LandingInterface::class, LandingRepository::class);
        $this->app->singleton(MondiaPayLeadInterface::class, MondiaPayLeadRepository::class);
        $this->app->singleton(MondiaPayNotificationInterface::class, MondiaPayNotificationRepository::class);
        $this->app->singleton(IntegrationInterface::class, IntegrationRepository::class);
        $this->app->singleton(DashboardInterface::class, DashboardRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
