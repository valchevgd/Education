<?php

namespace App\Http;


use App\Data\UserDTO;
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
    }


    public function render(string $templateName, $data = null)
    {
        $this->template->render($templateName, $data);
    }
}