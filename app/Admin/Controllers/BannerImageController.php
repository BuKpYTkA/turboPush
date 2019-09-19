<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 18.09.2019
 * Time: 11:14
 */

namespace App\Admin\Controllers;

use App\Models\BannerImage\BannerImage;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

/**
 * Class BannerImageController
 * @package App\Admin\Controllers
 */
class BannerImageController extends AdminController
{

    CONST IMAGE = 'Изображение';

    const SMALL_TEXT = 'Текст на баннере';

    const PAGE_ALIAS = 'Алиас страницы';

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
        $grid = new Grid(new BannerImage());
        $grid->column('id', __('Id'))->sortable();
        $grid->column('page_alias', __(self::PAGE_ALIAS));
        $grid->column('image_url', __(self::IMAGE))->image()->copyable();
        $grid->column('small_text', __(self::SMALL_TEXT));
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
        $show = new Show(BannerImage::findOrFail($id));
        $show->field('page_alias', __(self::PAGE_ALIAS));
        $show->field('image_url', __(self::IMAGE))->image('', 500, 500);
        $show->field('small_text', __(self::SMALL_TEXT));
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BannerImage());
        $form->text('page_alias', __(self::PAGE_ALIAS))->required();
        $form->text('image_url', __(self::IMAGE));
        $form->text('small_text', __(self::SMALL_TEXT));
        return $form;
    }
}