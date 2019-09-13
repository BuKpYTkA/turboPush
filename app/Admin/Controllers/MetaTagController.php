<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 10.09.2019
 * Time: 11:17
 */

namespace App\Admin\Controllers;

use App\Admin\Modules\Grid;
use App\Models\MetaTag\MetaTag;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Show;

/**
 * Class MetaTagController
 * @package App\Admin\Controllers
 */
class MetaTagController extends AdminController
{

    const PAGE_ALIAS = 'Алиас страницы';

    const UPDATED_BY = 'Последнее действие';

    /**
     * Title for current resource.
     *
     * @var string
     */

    protected $title = 'Редактирование Метатегов';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MetaTag());

        $grid->column('page_alias', __(self::PAGE_ALIAS))->sortable();
        $grid->actions(function ($actions) {
            $actions->disableView();
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(MetaTag::query()->findOrFail($id));
        $show->field('page_alias', __(self::PAGE_ALIAS));
        $show->field('title', __('title'));
        $show->field('description', __('description'));
        $show->field('keywords', __('keywords'));
        $show->field('og_title', __('og title'));
        $show->field('og_description', __('og description'));
        $show->getModel();
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new MetaTag());
        $form->hidden('id')->attribute('id');
        $form->text('page_alias', __(self::PAGE_ALIAS))->attribute('pageAlias')->required();
        $form->divider();
        $form->text('title', __('title'))->attribute('title');
        $form->text('description', __('description'))->attribute('description');
        $form->text('keywords', __('keywords'))->attribute('keywords');
        $form->text('h_1', __('h1'))->attribute('header');
        $form->text('og_title', __('og title'))->attribute('ogTitle');
        $form->text('og_description', __('og description'))->attribute('ogDescription');
        $form->footer(function ($footer) {
            $footer->disableViewCheck();
        });
        $form->tools(function (Form\Tools $tools) {
            $tools->disableView();
        });
        return $form;
    }

}