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
class OwnEliquidsPrice extends Section implements Initializable
{
    protected $model = '\App\PriceForSize';

//   Init class
    public function initialize()
    {
        $this->addToNavigation($priority = 100, function() {
            return \App\PriceForSize::count();
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
        return trans('PrisesForCustom');
    }

    public function onDisplay()
    {
        $display = \AdminDisplay::table()
            ->setColumns(
                \AdminColumn::text('size', 'Size')->setWidth('100px'),
                \AdminColumn::text('price', 'Price')->setWidth('100px')
            )->paginate(20);
        return $display;
    }

    public function onEdit($id)
    {
        $colors = Color::getColorsList();
        return \AdminForm::panel()->addBody([
            \AdminFormElement::text('size', 'Price'),
            \AdminFormElement::text('price', 'Price'),
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
