<?php

namespace App\Controller;

use Dos0\Framework\Controller\Controller;
use Dos0\Framework\DI\DIInjector;

/**
 * Class SystemController
 * @package App\Controller
 */
class SystemController extends Controller
{
    private $metaTitle = 'SystemController';

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