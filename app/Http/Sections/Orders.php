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
class Orders extends Section implements Initializable
{
    protected $model = '\App\Order';

//   Init class
    public function initialize()
    {
        $this->addToNavigation($priority = 101, function() {
            return DB::table('orders')->count();
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
        return trans('Orders');
    }

    public function onDisplay()
    {
        $display = \AdminDisplay::table()

            ->setColumns(
                \AdminColumn::text('totalPrice', 'Price')->setWidth('100px'),
                \AdminColumn::text('status', 'Status')->setWidth('100px'),
                \AdminColumn::text('user_id', 'User')->setWidth('100px')
            )->paginate(20);


        return $display;
    }

    public function onEdit($id)
    {
        $brands = Brand::getBrandList();
        return \AdminForm::panel()->addBody([
            \AdminFormElement::select('totalPrice', 'Brand', $brands),
            \AdminFormElement::text('status', 'VG'),
            \AdminFormElement::text('user_id', 'PG'),
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
