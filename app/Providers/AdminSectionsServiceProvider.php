<?php

namespace App\Providers;

use AdminNavigation;
use App\User;
use SleepingOwl\Admin\Navigation\Page;
use AdminSection;
use PackageManager;
use App\Http\Sections\Users;
use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        \App\User::class => 'App\Http\Sections\Users',
        \App\Product::class => 'App\Http\Sections\Products'
    ];

    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);



    }

    private function registerNavigation()
    {

    }


    private function registerNRoutes()
    {

    }

    private function registerMediaPackages()
    {

    }

}
