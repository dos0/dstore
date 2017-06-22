<?php

namespace App\Controller;

use Dos0\Framework\Controller\Controller;

/**
 * Class IndexController
 * @package App\Controller
 */
class IndexController extends Controller
{
    private $metaTitle = 'IndexController';

    /**
     * Index action
     *
     * @return string
     */
    public function index(): string
    {
        $text =             '<h3> Method:' . __METHOD__ . '</h3>';
        $text .=            '<p><b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>';

        $params = [
            'metaTitle' => $this->metaTitle,
            'header'    => 'This is ' . __CLASS__,
            'text'      => $text
        ];

        return $this->render('index.html.php', $params);
    }

}