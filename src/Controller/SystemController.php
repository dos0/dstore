<?php

namespace App\Controller;

use App\Model\Foo;
use Dos0\Framework\Controller\Controller;
use Dos0\Framework\DI\DIInjector;
use Dos0\Framework\Validator\Validator;

/**
 * Class SystemController
 * @package App\Controller
 */
class SystemController extends Controller
{
    private $metaTitle = 'SystemController';

    public function getValid()
    {
        $model = new Foo();

        return $this->getValidContent($model);
    }

    public function getInvalid()
    {
        $model = new Foo();

        // Fill incorrect data
        $model->price = 99999999999;
        $model->email = 'inCorect';
        $model->code = 'akjsebf32434';

        return $this->getValidContent($model);
    }

    private function getValidContent($model)
    {
        $validator = new Validator($model, $model->getRules());

        $validationResult = 'Validation result: ';

        if ($validator->validate()) {
            $validationResult .= 'All is Valid';
            $preCodeError = '';
        } else {
            $validationResult .= 'We have invalid params';
            $preCodeError = $validator->getErrors();
        }

        $params = [
            'metaTitle'             => $this->metaTitle,
            'header'                => 'This is ' . __CLASS__,
            'validationResult'      => $validationResult,
            'model'               => print_r($model, true),
            'preCodeError'          => print_r($preCodeError, true),
        ];

        return $this->render('system/valid.html.php', $params);
    }




    /**
     * getServices action
     *
     * @return string
     */
    public function getServices(): string
    {
        return $this->getContent(
            DIInjector::getServices(), __METHOD__);
    }

    /**
     * getConfig action
     *
     * @return string
     */
    public function getConfig(): string
    {
        return $this->getContent(
            DIInjector::getConfig(), __METHOD__);
    }

    /**
     * getRoute action
     *
     * @return string
     */
    public function getRoute(): string
    {
        return $this->getContent(
            DIInjector::get('Route'), __METHOD__);
    }

    /**
     * getRouter action
     *
     * @return string
     */
    public function getRouter(): string
    {
        return $this->getContent(
            DIInjector::get('Router'), __METHOD__);
    }

    /**
     * Gets content with print_r wrap
     *
     * @param $preCode
     * @param $method
     * @return string
     */
    private function getContent($preCode, $method): string
    {
        $text = '<h3> Method:' . $method . '</h3>';

        $params = [
            'metaTitle' => $this->metaTitle,
            'header'    => 'This is ' . __CLASS__,
            'text'      => $text,
            'preCode'   => print_r($preCode, true),
        ];

        return $this->render('system/main.html.php', $params);
    }

}