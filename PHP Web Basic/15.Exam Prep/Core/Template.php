<?php

namespace Core;


class Template implements TemplateInterface
{

    private const DIRECTORY_PATH = "App/Templates/";
    private const FILE_EXTENSION = ".php";

    public function render(string $template_name, $data = null)
    {
        require_once self::DIRECTORY_PATH
        .$template_name
            .self::FILE_EXTENSION;
    }
}