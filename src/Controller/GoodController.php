<?php

namespace App\Controller;

use Dos0\Framework\Controller\Controller;

/**
 * Class GoodController
 * @package App\Controller
 */
class GoodController extends Controller
{
    private $metaTitle = 'GoodController';

    /**
     * @return string
     */
    public function getAllGoods(): string
    {
        $params['metaTitle'] =  $this->metaTitle;
        $params['header'] =     'The page - getAllGoods';
        $params['text'] =       'Text of page';


        return $this->render('good.html.php', $params);
    }

}