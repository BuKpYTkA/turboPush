<?php
/**
 * Created by PhpStorm.
 * User: a.neposedov
 * Date: 13.09.2019
 * Time: 10:57
 */

namespace App\Services\StorageService;

use Illuminate\Support\Facades\Storage;

/**
 * Class StorageService
 * @package App\Services\StorageService
 */
class AdminStorageService
{

    /**
     * @var string
     */
    private $basePath;

    /**
     * @var string
     */
    private $diskType;

    /**
     * StorageService constructor.
     * @param string $basePath
     * @param string $diskType
     */
    public function __construct(string $basePath, string $diskType)
    {
        $this->basePath = $basePath;
        $this->diskType = $diskType;
    }

    /**
     * @param string $url
     * @return string
     */
    public function getFullUrl(string $url)
    {
        return $this->basePath . '/' . $url;
    }

    /**
     * @param string $path
     */
    public function delete(string $path)
    {
        if (Storage::disk($this->diskType)->exists($path)) {
            Storage::disk($this->diskType)->delete($path);
        }
    }
}