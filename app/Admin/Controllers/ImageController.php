<?php

namespace App\Admin\Controllers;

use App\Models\Image\Image;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

/**
 * Class ImageController
 * @package App\Admin\Controllers
 */
class ImageController extends AdminController
{

    CONST IMAGE = 'Изображение';

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Изображения';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Image);
        $grid->column('id', __('Id'))->sortable();
        $grid->column('url', __(self::IMAGE))->image()->copyable();
        $grid->column('alt', __('alt'));
        $grid->quickSearch('url');
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
        $show = new Show(Image::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('url', __(self::IMAGE))->image('', 500, 500);
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Image);
        $form->image('url', __(self::IMAGE));
        $form->text('alt', __('alt'));
        return $form;
    }

}
