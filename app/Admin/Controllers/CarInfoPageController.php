<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 20.09.2019
 * Time: 12:11
 */

namespace App\Admin\Controllers;

use App\Models\CarInfoPage\CarInfoPage;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

/**
 * Class CarInfoPageController
 * @package App\Admin\Controllers
 */
class CarInfoPageController extends AdminController
{
    const PAGE_ALIAS = 'Алиас страницы';

    const BRAND = 'Марка';

    const BRAND_ADDITIONAL = 'Дополнительное название марки';

    const MODELS = 'Модели';

    const MIN_PRICE = 'Стоимость от';

    const MAX_PRICE = 'Стоимость до';

    const STANDARD = 'Стандартный ремонт';

    const CAPITAL = 'Капитальный';

    const IMAGE = 'Логотип';

    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Марки Автомобилей';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CarInfoPage());

        $grid->column('page_alias', __(self::PAGE_ALIAS));
        $grid->column('brand', __(self::BRAND));
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
        $show = new Show(CarInfoPage::findOrFail($id));

        $show->field('page_alias', __(self::PAGE_ALIAS));
        $show->field('brand', __(self::BRAND));
        $show->field('brand_addition', __(self::BRAND_ADDITIONAL));
        $show->field('models', __(self::MODELS));
        $show->field('min_price', __(self::MIN_PRICE));
        $show->field('max_price', __(self::MAX_PRICE));
        $show->field('standard', __(self::STANDARD));
        $show->field('capital', __(self::CAPITAL));
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
        $form = new Form(new CarInfoPage);

        $form->text('page_alias', __(self::PAGE_ALIAS))->required();
        $form->text('brand', __(self::BRAND))->required();
        $form->text('brand_addition', __(self::BRAND_ADDITIONAL))->required();
        $form->textarea('models', __(self::MODELS));
        $form->number('min_price', __(self::MIN_PRICE))->required();
        $form->number('max_price', __(self::MAX_PRICE))->required();
        $form->number('standard', __(self::STANDARD))->required();
        $form->number('capital', __(self::CAPITAL))->required();
        $form->image('image_path', __(self::IMAGE))->required();
        return $form;
    }
}