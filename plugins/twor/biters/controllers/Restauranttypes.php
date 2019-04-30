<?php namespace TwoR\Biters\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Restauranttypes Back-end Controller
 */
class Restauranttypes extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('TwoR.Biters', 'biters', 'restauranttypes');
    }
}
