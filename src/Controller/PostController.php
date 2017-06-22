<?php

namespace App\Controller;

use App\Model\PostModel;
use Dos0\Framework\Controller\Controller;
use Dos0\Framework\Model\Exception\ModelIsNotFoundException;

/**
 * Class PostController
 * @package App\Controller
 */
class PostController extends Controller
{
    private $metaTitle = 'PostController';

    /**
     * Index action
     *
     * @return string
     */
    public function index(): string
    {
        /* @var PostModel $post */
        $post = new PostModel();
        $posts = $post->findAll();
        $posts = print_r($posts, true);

        $text =         '<h3> Method:' . __METHOD__ . '</h3>';
        $text .=        '<p><b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>';

        $params = [
            'metaTitle' => $this->metaTitle,
            'header'    => 'This is ' . __CLASS__,
            'text'      => $text,
            'posts'     => $posts,
        ];

        return $this->render('blog/list.html.php', $params);
    }

    /**
     * GetOnePost action
     *
     * @param int $id
     * @return string
     */
    public function getOnePost(int $id): string
    {
        $model = $this->getModelByPk($id);

        return $this->render('blog/post.html.php', $model);
    }

    /**
     * Gets model by Pk
     *
     * @param int $id
     * @return array|mixed
     * @throws ModelIsNotFoundException
     */
    private function getModelByPk(int $id)
    {
        $model = (new PostModel())->findByPk($id);

        if (empty($model)) {
            throw new ModelIsNotFoundException('Model pk=' . $id . ' Is Not Found Exception');
        }

        return $model;
    }

}