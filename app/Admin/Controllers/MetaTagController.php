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
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Show;

/**
 * Class MetaTagController
 * @package App\Admin\Controllers
 */
class MetaTagController extends AdminController
{
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

        $grid->column('page_alias', __('Page Alias'))->sortable();
        $grid->column('admin.username', __('Updated By'))->sortable();

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
        $show->field('page_alias', __('Page Alias'));
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
        $form->hidden('updated_by')->attribute('updatedBy')->value(Admin::user()->getAuthIdentifier());
        $form->text('page_alias')->attribute('pageAlias')->required();
        $form->text('title')->attribute('title');
        $form->text('description')->attribute('description');
        $form->text('keywords')->attribute('keywords');
        $form->text('h_1')->attribute('header');
        $form->text('og_title')->attribute('ogTitle');
        $form->text('og_description')->attribute('ogDescription');
        return $form;
    }

}