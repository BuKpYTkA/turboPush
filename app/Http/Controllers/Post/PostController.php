<?php

namespace App\Http\Controllers\Post;

use App\Models\Post\Post;
use App\Services\BannerImageService\BannerImageService;
use App\Services\MetaTagService\MetaTagService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    /**
     * @var MetaTagService
     */
    private $metaTagService;

    /**
     * @var BannerImageService
     */
    private $bannerImageService;

    /**
     * PostController constructor.
     * @param MetaTagService $metaTagService
     * @param BannerImageService $bannerImageService
     */
    public function __construct(MetaTagService $metaTagService, BannerImageService $bannerImageService)
    {
        $this->metaTagService = $metaTagService;
        $this->bannerImageService = $bannerImageService;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param string $alias
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Request $request, string $alias)
    {
        /**
         * @var Post $post
         */
        $post = Post::query()->where('alias', $alias)->first();
        if (!$post) {
            return abort(404);
        }
        $bannerImageConfig = $this->getBannerImageConfig($post);
        $bannerImage = $this->bannerImageService->getCurrentBannerImage($request, $bannerImageConfig);
        $metaTagConfig = $this->getMetaTagConfig($post);
        $metaTagContent = $this->metaTagService->getCurrentMetaTags($request, $metaTagConfig);
        $randomPost = Post::query()->where('id', '<>', $post->getId())->inRandomOrder()->first();
        return view('dynamic_pages.post', [
            'post' => $post,
            'bannerImage' => $bannerImage,
            'randomPost' => $randomPost,
            'metaTagContent' => $metaTagContent
        ]);
    }

    public function getPosts(Request $request)
    {
        $posts = Post::query()->where([])->paginate(6);
        return view('dynamic_pages.posts', [
            'posts' => $posts
        ]);
    }

    /**
     * @param Post $post
     * @return array
     */
    private function getBannerImageConfig(Post $post)
    {
        return [
            'POST_IMAGE' => $post->getImagePath()
        ];
    }

    /**
     * @param Post $post
     * @return array
     */
    private function getMetaTagConfig(Post $post)
    {
        return [
            'TITLE' => $post->getTitle(),
            'ALIAS' => $post->getAlias(),
            'DESCRIPTION' => $post->getDescription(),
            'CREATED_AT' => $post->getCreatedAt()
        ];
    }
}
