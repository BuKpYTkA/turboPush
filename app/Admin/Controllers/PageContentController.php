<?php

namespace App\Admin\Controllers;

use App\Models\PageContent\PageContent;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PageContentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\PageContent\PageContent';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PageContent);

        $grid->column('id', __('Id'));
        $grid->column('page_id', __('Page id'));
        $grid->column('section', __('Section'));
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
        $show = new Show(PageContent::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('page_id', __('Page id'));
        $show->field('section', __('Section'));
        $show->field('text', __('Text'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PageContent);

        $form->text('section', __('Section'))->disable()->setScript('$("textarea").parent().removeClass("col-sm-6").addClass("col-sm-8")');
        $form->ckeditor('text', __('Text'));
        $form->tools(function (Form\Tools $tools) {
            $tools->disableList();
            $tools->disableDelete();
            $tools->disableView();
        });
        $form->footer(function ($footer) {
            $footer->disableReset();
            $footer->disableViewCheck();
            $footer->disableCreatingCheck();
        });
        $form->saved(function ($form) {
            return redirect('admin-panel/pages/' . $form->model()->page_id);
        });
        return $form;
    }
}
