<?php
/**
 * Created by PhpStorm.
 * User: valchevgd
 * Date: 11/4/2018
 * Time: 11:55 AM
 */

namespace App\Http;


use Core\TemplateInterface;

class HttpHandlerAbstract
{

    /**
     * @var TemplateInterface
     */
    protected $template;

    public function __construct(TemplateInterface $template)
    {
        $this->template = $template;
    }

    public function redirect($url)
    {
        header("Location: $url");
        exit;
    }
}