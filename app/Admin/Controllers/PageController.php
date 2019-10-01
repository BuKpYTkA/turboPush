<?php

namespace App\Admin\Controllers;

use App\Models\Page\Page;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Редактирование контента страниц';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Page);

        $grid->column('id', __('Id'));
        $grid->column('alias', __('Alias'));
        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableEdit();
        });
        $grid->disableCreateButton();
        $grid->disableExport();
        $grid->disableRowSelector();
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
        $show = new Show(Page::findOrFail($id));

        $show->field('alias', __('Alias'));
        $show->content('Контент Секции', function ($content) {
            $content->resource('/admin-panel/page-contents');
            $content->section();
            $content->disableCreateButton();
            $content->disableExport();
            $content->disableRowSelector();
            $content->disableColumnSelector();
            $content->actions(function ($actions) {
                $actions->disableDelete();
                $actions->disableView();
            });
        });
        $show->panel()
            ->tools(function ($tools) {
                $tools->disableEdit();
                $tools->disableDelete();
            });;
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Page);

        $form->textarea('alias', __('Alias'));

        return $form;
    }
}
