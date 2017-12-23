<?php

namespace App\Http\Sections;

use App\Brand;
use Illuminate\Support\Facades\DB;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;
use App\Color;

/**
 * Class Mods
 *
 * @property \App\Mod $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Brands extends Section implements Initializable
{
    protected $model = '\App\Brand';

//   Init class
    public function initialize()
    {
        $this->addToNavigation($priority = 100, function() {
            return \App\Brand::count();
        });
        $this->creating(function($config, \Illuminate\Database\Eloquent\Model $model) {

        });
    }

    public function getIcon()
    {
        return 'fa fa-group';
    }

    /**
     * @return string|\Symfony\Component\Translation\TranslatorInterface
     */
    public function getTitle()
    {
        return trans('Brands');
    }

    public function onDisplay()
    {
        $display = \AdminDisplay::table()
            ->setColumns(
                \AdminColumn::text('name', 'Name')->setWidth('100px'),
                \AdminColumn::text('country', 'Country')->setWidth('100px')
            )->paginate(20);
        return $display;
    }

    public function onEdit($id)
    {
        $colors = Color::getColorsList();
        return \AdminForm::panel()->addBody([
            \AdminFormElement::text('name', 'Name'),
            \AdminFormElement::text('country', 'Country'),
        ]);
    }
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
