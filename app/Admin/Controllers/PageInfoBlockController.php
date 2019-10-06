<?php

namespace App\Admin\Controllers;

use App\Models\PageInfoBlock\PageInfoBlock;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PageInfoBlockController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Дополнительные Блоки';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PageInfoBlock);

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableView();
        });
        $grid->disableCreateButton();
        $grid->disableExport();
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
        $show = new Show(PageInfoBlock::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('alias', __('Alias'));
        $show->field('text', __('Text'));
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
        $form = new Form(new PageInfoBlock);

        $form->text('alias', __('Alias'))->setScript('$("textarea").parent().removeClass("col-sm-6").addClass("col-sm-8")')->disable();
        $form->text('name', __('Alias'));
        $form->ckeditor('text', __('Content'));
        $form->tools(function (Form\Tools $tools) {
            $tools->disableDelete();
            $tools->disableView();
        });
        $form->footer(function ($footer) {
            $footer->disableReset();
            $footer->disableViewCheck();
            $footer->disableCreatingCheck();
        });
        return $form;
    }
}
