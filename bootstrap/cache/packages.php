<?php return array (
  'babenkoivan/elastic-client' => 
  array (
    'providers' => 
    array (
      0 => 'Elastic\\Client\\ServiceProvider',
    ),
  ),
  'babenkoivan/elastic-scout-driver' => 
  array (
    'providers' => 
    array (
      0 => 'Elastic\\ScoutDriver\\ServiceProvider',
    ),
  ),
  'imdhemy/laravel-purchases' => 
  array (
    'aliases' => 
    array (
      'Product' => '\\Imdhemy\\Purchases\\Facades\\Product',
      'Subscription' => '\\Imdhemy\\Purchases\\Facades\\Subscription',
    ),
    'providers' => 
    array (
      0 => 'Imdhemy\\Purchases\\ServiceProviders\\LiapServiceProvider',
    ),
  ),
  'intervention/image' => 
  array (
    'aliases' => 
    array (
      'Image' => 'Intervention\\Image\\Facades\\Image',
    ),
    'providers' => 
    array (
      0 => 'Intervention\\Image\\ImageServiceProvider',
    ),
  ),
  'invoiceninja/inspector' => 
  array (
    'aliases' => 
    array (
      'Inspector' => 'InvoiceNinja\\Inspector\\InspectorFacade',
    ),
    'providers' => 
    array (
      0 => 'InvoiceNinja\\Inspector\\InspectorServiceProvider',
    ),
  ),
  'laravel/octane' => 
  array (
    'aliases' => 
    array (
      'Octane' => 'Laravel\\Octane\\Facades\\Octane',
    ),
    'providers' => 
    array (
      0 => 'Laravel\\Octane\\OctaneServiceProvider',
    ),
  ),
  'laravel/scout' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Scout\\ScoutServiceProvider',
    ),
  ),
  'laravel/slack-notification-channel' => 
  array (
    'providers' => 
    array (
      0 => 'Illuminate\\Notifications\\SlackChannelServiceProvider',
    ),
  ),
  'laravel/socialite' => 
  array (
    'aliases' => 
    array (
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
    ),
    'providers' => 
    array (
      0 => 'Laravel\\Socialite\\SocialiteServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'laravel/ui' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Ui\\UiServiceProvider',
    ),
  ),
  'livewire/livewire' => 
  array (
    'aliases' => 
    array (
      'Livewire' => 'Livewire\\Livewire',
    ),
    'providers' => 
    array (
      0 => 'Livewire\\LivewireServiceProvider',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'nunomaduro/termwind' => 
  array (
    'providers' => 
    array (
      0 => 'Termwind\\Laravel\\TermwindServiceProvider',
    ),
  ),
  'nwidart/laravel-modules' => 
  array (
    'aliases' => 
    array (
      'Module' => 'Nwidart\\Modules\\Facades\\Module',
    ),
    'providers' => 
    array (
      0 => 'Nwidart\\Modules\\LaravelModulesServiceProvider',
    ),
  ),
  'sentry/sentry-laravel' => 
  array (
    'aliases' => 
    array (
      'Sentry' => 'Sentry\\Laravel\\Facade',
    ),
    'providers' => 
    array (
      0 => 'Sentry\\Laravel\\ServiceProvider',
      1 => 'Sentry\\Laravel\\Tracing\\ServiceProvider',
    ),
  ),
  'socialiteproviders/manager' => 
  array (
    'providers' => 
    array (
      0 => 'SocialiteProviders\\Manager\\ServiceProvider',
    ),
  ),
  'turbo124/beacon' => 
  array (
    'aliases' => 
    array (
      'Beacon' => 'Turbo124\\Beacon\\CollectorFacade',
    ),
    'providers' => 
    array (
      0 => 'Turbo124\\Beacon\\CollectorServiceProvider',
    ),
  ),
);