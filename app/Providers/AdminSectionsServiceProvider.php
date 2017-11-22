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

        $this->registerNavigation();


    }

    private function registerNavigation()
    {

    }


    private function registerNRoles()
    {
        $this->app['router']->group(['prefix' => config('sleeping_owl.url_prefix'), 'middleware' => config('sleeping_owl.middleware')], function ($router) {
            $router->get('', ['as' => 'admin.dashboard', function () {
                $content = 'Define your dashboard here.';
                return AdminSection::view($content, 'Dashboard');
            }]);
        });
    }

    private function registerMediaPackages()
    {
        PackageManager::add('front.controllers')
            ->js(null, asset('js/controllers.js'));
    }

}
