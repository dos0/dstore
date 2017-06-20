<?php

namespace App\Controller;

use Dos0\Framework\Controller\Controller;

class GoodController extends Controller
{
    public function getAllGoods()
    {

        $params['header'] = 'The page - getAllGoods';
        $params['text'] = 'Text of page';

        return $this->render('good.html.php', $params);
    }

}