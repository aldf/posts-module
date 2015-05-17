<?php namespace Anomaly\PostsModule\Http\Controller;

use Anomaly\PostsModule\Post\Contract\PostRepositoryInterface;
use Anomaly\Streams\Platform\Http\Controller\PublicController;

/**
 * Class TagsController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\PostsModule\Http\Controller
 */
class TagsController extends PublicController
{

    /**
     * Return an index of tag posts.
     *
     * @param PostRepositoryInterface $posts
     * @param                         $tag
     * @return \Illuminate\View\View
     */
    public function posts(PostRepositoryInterface $posts, $tag)
    {
        $posts = $posts->findManyByTag($tag);

        return view('anomaly.module.posts::tags/posts', compact('posts', 'tag'));
    }
}