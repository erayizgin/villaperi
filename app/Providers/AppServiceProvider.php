<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('includes/adminsidebar', function ($view) {
            $menu = DB::select('select menu.id as m_id, menu.name as m_name,menu.icon as m_icon,menusub.id as s_id, menusub.name as s_name,
                                         menusub.icon as s_icon, action
                                from menu join menusub on menu.id = menusub.main_id where menu.active = 1');
            //$siteInfo=SiteInfo::first();
            $view->with(['menus' => $menu]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
