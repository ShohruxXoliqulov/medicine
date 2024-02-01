<?php

namespace App\Providers;

use App\Repositories\AptekaRepository;
use App\Repositories\AuthRepository;
use App\Repositories\DoctorRepository;
use App\Repositories\EmployeeRepository;
use App\Repositories\Interfaces\AptekaInterface;
use App\Repositories\Interfaces\AuthInterface;
use App\Repositories\Interfaces\DoctorInterface;
use App\Repositories\Interfaces\EmployeeInterface;
use App\Repositories\Interfaces\MeetingInterface;
use App\Repositories\Interfaces\ProductInterface;
use App\Repositories\Interfaces\ProductTypeInterface;
use App\Repositories\Interfaces\RegionInterface;
use App\Repositories\Interfaces\WarehouseInterface;
use App\Repositories\MeetingRepository;
use App\Repositories\ProductRepository;
use App\Repositories\ProductTypeRepository;
use App\Repositories\RegionRepository;
use App\Repositories\WarehouseRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AptekaInterface::class, AptekaRepository::class);
        $this->app->bind(AuthInterface::class, AuthRepository::class);
        $this->app->bind(DoctorInterface::class, DoctorRepository::class);
        $this->app->bind(EmployeeInterface::class, EmployeeRepository::class);
        $this->app->bind(MeetingInterface::class, MeetingRepository::class);
        $this->app->bind(ProductInterface::class, ProductRepository::class);
        $this->app->bind(ProductTypeInterface::class, ProductTypeRepository::class);
        $this->app->bind(RegionInterface::class, RegionRepository::class);
        $this->app->bind(WarehouseInterface::class, WarehouseRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
