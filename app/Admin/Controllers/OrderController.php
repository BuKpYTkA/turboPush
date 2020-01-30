<?php

namespace App\Admin\Controllers;

use App\Models\Order\Order;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

/**
 * Class OrderController
 * @package App\Admin\Controllers
 */
class OrderController extends AdminController
{

    const NAME = 'Имя';

    const EMAIL = 'Email';

    const CREATED_AT = 'Когда создана';

    const IS_MODERATED = 'Заявка выполнена';

    const MESSAGE = 'Текст сообщения';

    const PHONE = 'Телефон';

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Заявки';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order);

        $grid->model()->orderBy('is_moderated')->orderBy('created_at', 'desc');
        $grid->column('id', __('Id'))->sortable();
        $grid->column('made_by', __(self::NAME))->sortable();
        $grid->column('phone', __(self::PHONE));
        $grid->column('message', 'Марка машины');
        $grid->column('created_at', __(self::CREATED_AT))->sortable();
        $states = [
            'on' => ['value' => 1, 'text' => 'да', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'нет', 'color' => 'danger'],
        ];
        $grid->column('is_moderated', __(self::IS_MODERATED))->switch($states)->sortable();
        $grid->column('source', ('Источник'));
        $grid->actions(function ($actions) {
            $actions->disableEdit();
        });
        $grid->disableCreateButton();
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
        $show = new Show(Order::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('made_by', __(self::NAME));
        $show->field('phone', __(self::PHONE));
        $show->field('created_at', __(self::CREATED_AT));
        $show->field('message', __(self::MESSAGE));
        $show->panel()
            ->tools(function ($tools) {
                $tools->disableEdit();
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
        $form = new Form(new Order);

        $form->textarea('made_by', __('Made by'));
        $form->textarea('phone', __('Phone'));
        $form->textarea('message', __('Message'));
        $form->switch('is_moderated', __('Is moderated'));
        $form->switch('is_resolved', __('Is resolved'));

        return $form;
    }
}
