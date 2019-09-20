<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 20.09.2019
 * Time: 17:26
 */

namespace App\Admin\Controllers;

use App\Models\Post\Post;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

/**
 * Class PostsController
 * @package App\Admin\Controllers
 */
class PostsController extends AdminController
{

    const PAGE_ALIAS = 'Алиас страницы';

    const TITLE = 'Заголовок';

    const CONTENT = 'Контент';

    const IMAGE = 'Изображение';

    const CREATED_AT = 'Когда создан';

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Посты';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post());

        $grid->model()->orderBy('created_at');
        $grid->column('id', 'id');
        $grid->column('alias', __(self::PAGE_ALIAS));
        $grid->column('title', __(self::TITLE));
        $grid->column('created_at', __(self::CREATED_AT));
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
        $show = new Show(Post::findOrFail($id));

        $show->field('alias', __(self::PAGE_ALIAS));
        $show->field('title', __(self::TITLE));
        $show->field('content', __(self::CONTENT));
        $show->field('created_at', __(self::CREATED_AT));
        $show->field('image_path', __(self::IMAGE))->image('', 200, 200);
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Post());

        $form->text('title', __(self::TITLE))->required();
        $form->ckeditor('content', __(self::CONTENT))->required();
        $form->text('image_path', __(self::IMAGE))->required();
        return $form;
    }
}