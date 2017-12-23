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
class Mods extends Section implements Initializable
{
    protected $model = '\App\Mod';

//   Init class
    public function initialize()
    {
        $this->addToNavigation($priority = 100, function() {
            return DB::table('products')->where('typeID','=', 1)->count() + DB::table('products')->where('typeID','=', 2)->count();
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
        return trans('Mods');
    }

    public function onDisplay()
    {
        $display = \AdminDisplay::table()
            ->setColumns(
                \AdminColumn::text('id', 'ID')->setWidth('30px'),
                \AdminColumn::text('brandID', 'Brand ID')->setWidth('100px'),
                \AdminColumn::text('model', 'Model')->setWidth('100px'),
                \AdminColumn::text('sizes', 'Sizes')->setWidth('100px'),
                \AdminColumn::text('connector', 'Connector')->setWidth('100px'),
                \AdminColumn::text('material', 'Material')->setWidth('100px'),
                \AdminColumn::text('colorID', 'colorId')->setWidth('100px'),
                \AdminColumn::text('price', 'price')->setWidth('100px'),
                \AdminColumn::text('quantity', 'quantity')->setWidth('100px'),
                \AdminColumn::text('description', 'description')->setWidth('100px'),
                \AdminColumn::text('photo', 'photo')->setWidth('100px'),
                \AdminColumn::text('typeID', 'type Id')->setWidth('100px'),
                \AdminColumn::text('power', 'Power')->setWidth('100px'),
                \AdminColumn::text('capacity', 'Capacity')->setWidth('100px')
            )->paginate(20);

        $display->setApply(function ($query) {
            $query->whereIn('typeID', [1,2]);
        });
        return $display;
    }

    public function onEdit($id)
    {
        $colors = Color::getColorsList();
        return \AdminForm::panel()->addBody([
            \AdminFormElement::select('brandID', 'Brand ID', Brand::getBrandList()),
            \AdminFormElement::text('model', 'Model'),
            \AdminFormElement::text('sizes', 'Sizes'),
            \AdminFormElement::text('connector', 'Connector'),
            \AdminFormElement::text('material', 'Material'),
            \AdminFormElement::select('colorID', 'color',$colors),
            \AdminFormElement::text('quantity', 'quantity'),
            \AdminFormElement::text('description', 'description'),
            \AdminFormElement::text('photo', 'photo'),
            \AdminFormElement::select('typeID', 'type Id', array_combine(range(1,2),[1 => 'Mechmod', 2 => 'Boxmod'])),
            \AdminFormElement::text('power', 'Power'),
            \AdminFormElement::text('capacity', 'Capacity'),
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
