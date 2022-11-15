<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use App\Models\Announcement;
use App\Models\Banner;
use App\Models\Category;
use App\Models\City;
use App\Models\Comment;
use App\Models\Company;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\District;
use App\Models\Faq;
use App\Models\Favorite;
use App\Models\Language;
use App\Models\Menu;
use App\Models\MenuItem;
use App\Models\Metro;
use App\Models\News;
use App\Models\Option;
use App\Models\Page;
use App\Models\Permission;
use App\Models\PromoCode;
use App\Models\Region;
use App\Models\Role;
use App\Models\Setting;
use App\Models\Status;
use App\Models\Target;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Village;

use App\Observers\AnnouncementObserver;
use App\Observers\BannerObserver;
use App\Observers\CategoryObserver;
use App\Observers\CityObserver;
use App\Observers\CommentObserver;
use App\Observers\CompanyObserver;
use App\Observers\CountryObserver;
use App\Observers\CurrencyObserver;
use App\Observers\CustomerObserver;
use App\Observers\DistrictObserver;
use App\Observers\FaqObserver;
use App\Observers\FavoriteObserver;
use App\Observers\LanguageObserver;
use App\Observers\MenuObserver;
use App\Observers\MenuItemObserver;
use App\Observers\MetroObserver;
use App\Observers\NewsObserver;
use App\Observers\OptionObserver;
use App\Observers\PageObserver;
use App\Observers\PermissionObserver;
use App\Observers\PromoCodeObserver;
use App\Observers\RegionObserver;
use App\Observers\RoleObserver;
use App\Observers\SettingObserver;
use App\Observers\StatusObserver;
use App\Observers\TargetObserver;
use App\Observers\TransactionObserver;
use App\Observers\UserObserver;
use App\Observers\VillageObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    protected $observers = [
        Announcement::class => [AnnouncementObserver::class],
        Banner::class => [BannerObserver::class],
        Category::class => [CategoryObserver::class],
        City::class => [CityObserver::class],
        Comment::class => [CommentObserver::class],
        Company::class => [CompanyObserver::class],
        Country::class => [CountryObserver::class],
        Currency::class => [CurrencyObserver::class],
        Customer::class => [CustomerObserver::class],
        District::class => [DistrictObserver::class],
        Faq::class => [FaqObserver::class],
        Favorite::class => [FavoriteObserver::class],
        Language::class => [LanguageObserver::class],
        Menu::class => [MenuObserver::class],
        MenuItem::class => [MenuItemObserver::class],
        Metro::class => [MetroObserver::class],
        News::class => [NewsObserver::class],
        Option::class => [OptionObserver::class],
        Page::class => [PageObserver::class],
        Permission::class => [PermissionObserver::class],
        PromoCode::class => [PromoCodeObserver::class],
        Region::class => [RegionObserver::class],
        Role::class => [RoleObserver::class],
        Setting::class => [SettingObserver::class],
        Status::class => [StatusObserver::class],
        Target::class => [TargetObserver::class],
        Transaction::class => [TransactionObserver::class],
        User::class => [UserObserver::class],
        Village::class => [VillageObserver::class]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
