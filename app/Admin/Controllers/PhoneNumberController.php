<?php

namespace App\Admin\Controllers;

use App\Models\PhoneNumber\PhoneNumber;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PhoneNumberController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\PhoneNumber\PhoneNumber';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PhoneNumber);

        $grid->column('id', __('Id'));
        $grid->column('phone', __('Phone'));
        $grid->quickCreate(function (Grid\Tools\QuickCreate $create) {
            $create->text('phone', 'Телефон');
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
        $show = new Show(PhoneNumber::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('phone', __('Phone'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PhoneNumber);

        $form->textarea('phone', __('Phone'));

        return $form;
    }
}
