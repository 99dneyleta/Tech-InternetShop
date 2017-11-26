<?php

namespace App\Http\Sections;

use Illuminate\Support\Facades\DB;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class Atomaizers
 *
 * @property \App\Product $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Atomaizers extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $model = '\App\Atomaizer';

//   Init class
    public function initialize()
    {
        $this->addToNavigation($priority = 100, function() {
            return DB::table('products')->where('typeID','=', 3)->count();
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
        return trans('Atoms');
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
                \AdminColumn::text('volume', 'volume')->setWidth('100px'),
                \AdminColumn::text('crutchsQuantity', 'crutchs Quantity')->setWidth('100px')
            )->paginate(20);

        $display->setApply(function ($query) {
            $query->where('typeID', '=', 3);
        });
        return $display;
    }

    public function onEdit($id)
    {
        return \AdminForm::panel()->addBody([
            \AdminFormElement::text('brandID', 'Brand ID'),
            \AdminFormElement::text('model', 'Model'),
            \AdminFormElement::text('sizes', 'Sizes'),
            \AdminFormElement::text('connector', 'Connector'),
            \AdminFormElement::text('material', 'Material'),
            \AdminFormElement::text('colorID', 'colorId'),
            \AdminFormElement::text('quantity', 'quantity'),
            \AdminFormElement::text('description', 'description'),
            \AdminFormElement::text('photo', 'photo'),
            \AdminFormElement::text('typeID', 'type Id'),
            \AdminFormElement::text('volume', 'volume'),
            \AdminFormElement::text('crutchsQuantity', 'crutchs Quantity'),
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
