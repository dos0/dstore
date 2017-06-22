<?php

namespace App\Controller;

use App\Model\BlogModel;
use App\Model\UserModel;
use Dos0\Framework\Controller\Controller;

class BlogController extends Controller
{
    public function index()
    {
        /* @var BlogModel $blog */
        $blog = new BlogModel();
        /* @var UserModel $user */
        $username = new UserModel();

        debug($blog->findAll());
        debug($username->findAll());



        //return $this->render('blog/list.html', ['articles' => $model->get()]);
    }

}