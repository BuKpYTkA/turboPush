<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 11.09.2019
 * Time: 16:54
 */

namespace App\Admin\Extensions\Form;


use Encore\Admin\Form\Field;

class CKEditor extends Field
{

    /**
     * @var array
     */
    public static $js = [
        '/vendor/ckeditor/ckeditor.js',
        '/vendor/ckeditor/adapters/jquery.js',
    ];

    /**
     * @var string
     */
    protected $view = 'admin.ckeditor';

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function render()
    {
        $this->script = "$('textarea.{$this->getElementClassString()}').ckeditor();";
        return parent::render();
    }
}