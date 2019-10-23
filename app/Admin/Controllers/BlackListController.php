<?php

namespace App\Admin\Controllers;

use App\Models\BlackListItem\BlackListItem;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BlackListController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Черный список';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BlackListItem);

        $grid->column('id', __('Id'));
        $grid->column('ip', __('Ip'));
        $grid->column('additional_information', __('Additional information'));
//        $states = [
//            'on' => ['value' => 1, 'text' => 'on', 'color' => 'success'],
//            'off' => ['value' => 0, 'text' => 'off', 'color' => 'danger'],
//        ];
//        $grid->column('status', __('Access'))->switch($states)->sortable();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->quickCreate(function (Grid\Tools\QuickCreate $create) {
            $create->text('ip', 'IP');
        });
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(BlackListItem::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('ip', __('Ip'));
        $show->field('additional_information', __('Additional information'));

        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BlackListItem);

        $form->text('ip', __('Ip'));
        $form->textarea('additional_information', __('Additional information'));

        return $form;
    }
}
