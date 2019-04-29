<?php namespace TwoR\Biters;

use Backend;
use System\Classes\PluginBase;

/**
 * Biters Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Biters',
            'description' => 'No description provided yet...',
            'author'      => 'TwoR',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'TwoR\Biters\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'twor.biters.some_permission' => [
                'tab' => 'Biters',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'biters' => [
                'label'       => 'Biters',
                'url'         => Backend::url('twor/biters/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['twor.biters.*'],
                'order'       => 500,
            ],
        ];
    }
}
