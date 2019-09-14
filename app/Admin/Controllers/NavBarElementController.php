<?php

namespace App\Admin\Controllers;

use App\Models\NavBarElement\NavBarElement;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Show;
use Encore\Admin\Tree;
use Encore\Admin\Widgets\Box;

/**
 * Class NavBarElementController
 * @package App\Admin\Controllers
 */
class NavBarElementController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Навигация';

    public function index(Content $content)
    {
        return $content
            ->title('Навигация')
            ->description(trans('admin.list'))
            ->row(function (Row $row) {
                $row->column(6, $this->treeView()->render());

                $row->column(6, function (Column $column) {
                    $form = new \Encore\Admin\Widgets\Form();
                    $form->action(admin_url('/nav-bar-elements'));
                    $menuModel = NavBarElement::class;
                    $form->select('parent_id', trans('admin.parent_id'))->options($menuModel::selectOptions());
                    $form->text('title', trans('admin.title'))->rules('required');
                    $form->icon('icon', trans('admin.icon'))->default('fa-bars')->rules('required');
                    $form->text('link', trans('admin.uri'));
                    $form->hidden('_token')->default(csrf_token());
                    $column->append((new Box(trans('admin.new'), $form))->style('success'));
                });
            });
    }

    /**
     * @return \Encore\Admin\Tree
     */
    protected function treeView()
    {
        $menuModel = NavBarElement::class;

        return $menuModel::tree(function (Tree $tree) {
            $tree->disableCreate();

            $tree->branch(function ($branch) {
                $payload = "<i class='fa {$branch['icon']}'></i>&nbsp;<strong>{$branch['title']}</strong>";
                    if (url()->isValidUrl($branch['link'])) {
                        $link = $branch['uri'];
                    } else {
                        $link = url($branch['link']);
                    }
                    $payload .= "&nbsp;&nbsp;&nbsp;<a href=\"$link\" class=\"dd-nodrag\">$link</a>";
                return $payload;
            });
        });
    }

    /**
     * Help message for icon field.
     *
     * @return string
     */
    protected function iconHelp()
    {
        return 'For more icons please see <a href="http://fontawesome.io/icons/" target="_blank">http://fontawesome.io/icons/</a>';
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new NavBarElement);

        $grid->column('id', __('Id'));
        $grid->column('title', __('Text'));
        $grid->column('parent_id', __('Parent id'));
        $grid->column('icon', __('Icon'));
        $grid->column('link', __('Link'));
        $grid->column('order', __('Order'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(NavBarElement::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Text'));
        $show->field('parent_id', __('Parent id'));
        $show->field('icon', __('Icon'));
        $show->field('link', __('Link'));
        $show->field('order', __('Order'));
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new NavBarElement);

        $form->textarea('title', __('Заголовок'));
//        $form->number('parent_id', __('Id Родительского Элемента'));
        $menuModel = NavBarElement::class;
        $form->select('parent_id', trans('admin.parent_id'))->options($menuModel::selectOptions());
        $form->icon('icon', __('Иконка'));
        $form->textarea('link', __('Ссылка'));
        $form->number('order', __('Порядок'));
        $form->footer(function ($footer) {
            $footer->disableViewCheck();
        });
        $form->tools(function (Form\Tools $tools) {
            $tools->disableView();
        });
        return $form;
    }
}
