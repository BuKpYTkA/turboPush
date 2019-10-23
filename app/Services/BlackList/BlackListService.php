<?php


namespace App\Services\BlackList;

use App\Models\BlackListItem\BlackListItem;
use Illuminate\Http\Request;
use Symfony\Component\Finder\Exception\AccessDeniedException;

/**
 * Class BlackListService
 * @package App\Services\BlackList
 */
class BlackListService
{

    /**
     * @param string $ip
     */
    public function validate(string $ip)
    {
        $allBlackListItems = BlackListItem::all();
        foreach ($allBlackListItems as $blackListItem) {
            $strPos = strpos($ip, str_replace('*', '', $blackListItem->getIp()));
            if ($strPos === 0 && !$blackListItem->getStatus()) {
                abort(403);
            }
        }
    }
}