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
        User::class => 'App\Http\Sections\Users',
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
        $this->registerNRoles();
        $this->registerNavigation();
        $this->registerMediaPackages();

    }

    private function registerNavigation()
    {
        AdminNavigation::setFromArray([
            [
                'title' => 'Users',
                'icon' => 'fa fa-group',
                'priority' => 1000,
                'pages' => [
                    (new Page(User::class))->setPriority(0)
                ]
            ]
        ]);
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
