<?php

namespace Core;


class Template implements TemplateInterface
{
    const TEMPLATE_DIRECTORY = "App/Templates/";
    const TEMPLATE_EXTENSION = ".php";

    public function render(string $template_name, $data = null)
    {
        require_once self::TEMPLATE_DIRECTORY
        .$template_name
            .self::TEMPLATE_EXTENSION;
    }
}