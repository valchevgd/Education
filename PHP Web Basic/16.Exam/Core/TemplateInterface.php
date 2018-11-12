<?php

namespace Core;


interface TemplateInterface
{
    public function render(string $template_name, $data = null, $genres = null);
}