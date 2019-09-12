<?php

namespace App\Admin\Controllers;

use App\Admin\Modules\Actions;
use App\Models\Image\Image;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Storage;

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
        $grid->quickSearch('url');
        $grid->disableExport();
        $grid->actions(function ($actions) {
            $actions->disableDelete();
        });
        $grid->disableBatchActions();
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
//        $form->multipleImage('url');
        $form->image('url', __(self::IMAGE));
        $form->deleting(function () {
            $this->deleteImageFromStorage();
        });
        return $form;
    }

    /**
     * @return void
     */
    private function deleteImageFromStorage()
    {
        $pathInfo = request()->getPathInfo();
        $elements = explode('/', $pathInfo);
        $imageId = array_pop($elements);
        /**
         * @var $image Image
         */
        $image = Image::query()->find($imageId);
        $url = $image->getUrl();
        Storage::disk('admin')->delete($url);
    }
}
