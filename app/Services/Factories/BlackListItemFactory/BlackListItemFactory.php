<?php


namespace App\Services\Factories\BlackListItemFactory;

use App\Models\BlackListItem\BlackListItem;
use Illuminate\Http\Request;

/**
 * Class BlackListItemFactory
 * @package App\Services\Factories\BlackListItemFactory
 */
class BlackListItemFactory
{

    /**
     * @param Request $request
     * @return BlackListItem
     */
    public function makeFromRequest(Request $request)
    {
        return new BlackListItem([
            'ip' => $request->ip(),
            'additional_information' => $request->userAgent()
        ]);
    }
}