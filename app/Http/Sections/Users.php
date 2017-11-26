<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class Users
 *
 * @property \App\User $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Users extends Section implements Initializable
{
    protected $model = '\App\User';

//   Init class
    public function initialize()
    {
        $this->addToNavigation($priority = 0, function() {
          return \App\User::count();
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
        return trans('Users');
    }

    public function onDisplay()
    {
        return \AdminDisplay::table()
            ->setColumns(
                \AdminColumn::text('id', 'ID')->setWidth('30px'),
                \AdminColumn::text('firstName', 'First Name')->setWidth('100px'),
                \AdminColumn::text('lastName', 'Last Name')->setWidth('100px'),
                \AdminColumn::text('secondName', 'Second Name')->setWidth('100px'),
                \AdminColumn::text('city', 'City')->setWidth('100px'),
                \AdminColumn::text('region', 'Region')->setWidth('100px'),
                \AdminColumn::text('postNumber', 'Post Number')->setWidth('100px'),
                \AdminColumn::text('email', 'Email')->setWidth('100px'),
                \AdminColumn::text('phone', 'Phone')->setWidth('100px'),
                \AdminColumn::text('isAdmin', 'Admin')->setWidth('100px')

            )->paginate(20);
    }

    public function onEdit($id)
    {
        return \AdminForm::panel()->addBody([
            \AdminFormElement::text('firstName', 'First Name')->required(),
            \AdminFormElement::text('lastName', 'Last Name'),
            \AdminFormElement::text('secondName', 'Second Name') ,
            \AdminFormElement::text('city', 'City'),
            \AdminFormElement::text('region', 'Region'),
            \AdminFormElement::text('postNumber', 'Post Number'),
            \AdminFormElement::text('email', 'Email')->required(),
            \AdminFormElement::text('password', 'Password')->required(),
            \AdminFormElement::text('phone', 'Phone'),
            \AdminFormElement::checkbox('isAdmin', 'Admin')
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
