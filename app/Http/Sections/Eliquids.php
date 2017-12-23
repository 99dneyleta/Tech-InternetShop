<?php

namespace App\Http\Sections;

use App\Brand;
use App\PriceForSize;
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
class Eliquids extends Section implements Initializable
{
    protected $model = '\App\Eliquid';

//   Init class
    public function initialize()
    {
        $this->addToNavigation($priority = 101, function() {
            return DB::table('eliquids')->count();
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
        return trans('Eliquids');
    }

    public function onDisplay()
    {
        $display = \AdminDisplay::table()
            ->setColumns(
                \AdminColumn::text('brandID', 'Brand')->setWidth('100px'),
                \AdminColumn::text('vg', 'VG')->setWidth('100px'),
                \AdminColumn::text('pg', 'PG')->setWidth('100px'),
                \AdminColumn::text('nicotine', 'Nicotine')->setWidth('100px'),
                \AdminColumn::text('quantity', 'Quantity')->setWidth('100px'),
                \AdminColumn::text('description', 'Description')->setWidth('100px'),
                \AdminColumn::text('isFlavour', 'IsFlavour')->setWidth('100px'),
                \AdminColumn::text('photo', 'Photo')->setWidth('100px'),
                \AdminColumn::text('price', 'Price')->setWidth('100px')
            )->paginate(20);


        return $display;
    }

    public function onEdit($id)
    {
        $brands = Brand::getBrandList();
        return \AdminForm::panel()->addBody([
            \AdminFormElement::select('brandID', 'Brand', $brands),
            \AdminFormElement::text('vg', 'VG'),
            \AdminFormElement::text('pg', 'PG'),
            \AdminFormElement::text('nicotine', 'Nicotine'),
            \AdminFormElement::text('quantity', 'Quantity'),
            \AdminFormElement::text('description', 'Description'),
            \AdminFormElement::select('isFlavour', 'IsFlavour',array_combine(range(1,0),[0 => 'No', 2 => 'Yes'])),
            \AdminFormElement::text('photo', 'Photo'),
            \AdminFormElement::text('price', 'Price')

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
