<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\BLL\FrontEnd\CategoryBLL;
use App\BLL\FrontEnd\ProductFeatureBLL;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $page = ['front.home.index', 'front.home.search-page'];
        
        View::composer($page, function ($view) {
            $male_categories = CategoryBLL::GetMaleCategories();
            $female_categories = CategoryBLL::GetFeMaleCategories();
            $color_values = ProductFeatureBLL::GetFeatureDefaultValue('mau_sac');
            $pattern_values = ProductFeatureBLL::GetFeatureDefaultValue('hoa_tiet');
            $material_values = ProductFeatureBLL::GetFeatureDefaultValue('chat_lieu');
            $param = compact('male_categories', 'female_categories', 'color_values', 'pattern_values', 'material_values');
            return $view->with($param);
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
