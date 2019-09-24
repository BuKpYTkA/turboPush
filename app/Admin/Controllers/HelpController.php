<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 24.09.2019
 * Time: 15:25
 */

namespace App\Admin\Controllers;


use App\Http\Controllers\Controller;
use Encore\Admin\Layout\Content;

class HelpController extends Controller
{

    public function getHelp(Content $content)
    {
        $content->title('Помощь');
        $content->view('admin.help',[]);
        return $content;
    }
}