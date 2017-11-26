<?php

namespace App\Http\Sections;

use AdminNavigation;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class Products
 *
 * @property \App\Product $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Products extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */

    public function initialize()
    {
        AdminNavigation::setFromArray([
            [
                'title' => 'Products',
                'icon' => 'fa fa-sitemap',
                'pages' => [
                    [
                        'title' => 'BoxMods',
                        'url' => '/mods'
       ],
       [
           'title' => 'Atom',
           'url' => '/atoms'
       ],
     ]
   ],
            $this->creating(function($config, \Illuminate\Database\Eloquent\Model $model) {

            })
]);
        /*$this->addToNavigation($priority = 500, function() {
            return \App\Product::count();
        });
        $this->creating(function($config, \Illuminate\Database\Eloquent\Model $model) {

        });*/
    }

    public function getIcon()
    {
        return 'fa fa-sitemap';
    }

    /**
     * @return string|\Symfony\Component\Translation\TranslatorInterface
     */
    public function getTitle()
    {
        return trans('Products');
    }

    public function onDisplay()
    {
        return \AdminDisplay::table()
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
                \AdminColumn::text('capacity', 'capacity')->setWidth('100px'),
                \AdminColumn::text('volume', 'volume')->setWidth('100px'),
                \AdminColumn::text('crutchsQuantity', 'crutchs Quantity')->setWidth('100px')
            )->paginate(20);
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
            \AdminFormElement::text('power', 'Power'),
            \AdminFormElement::text('capacity', 'capacity'),
            \AdminFormElement::text('volume', 'volume'),
            \AdminFormElement::text('crutchsQuantity', 'crutchs Quantity'),
            \AdminFormElement::checkbox('isAdmin', 'Admin')
        ]);
    }


    /**
     * @var string
     */


    /**
     * @var string
     */


    /**
     * @return DisplayInterface
     */


    /**
     * @param int $id
     *
     * @return FormInterface
     */


    /**
     * @return FormInterface
     */
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
