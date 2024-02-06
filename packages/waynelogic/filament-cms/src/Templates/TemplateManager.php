<?php

namespace Waynelogic\FilamentCms\Templates;

class TemplateManager
{

    public static function getList(): array
    {
        $templatePath = app_path('Cms' . DIRECTORY_SEPARATOR . 'Templates');
        $templates = [];
        $files = scandir($templatePath);
        foreach ($files as $file) {
            $class = pathinfo($file, PATHINFO_FILENAME);
            $cassPath = 'App\\Cms\\Templates\\' . $class;
            if (class_exists($cassPath)) {
                $template = new $cassPath();
                $templates[$class] = $template->name;
            }
        }
        return $templates;
    }

    public static function getTemplateView($template) : ?string
    {
        $template = self::getTemplate($template);
        if ($template->view) {
            return $template->view;
        }
        return null;
    }

    public static function getTemplate($templateName)
    {
        $template = 'App\\Cms\\Templates\\' . $templateName;
        if (!class_exists($template)) {
            throw new \Exception('Template not found');
        }
        return new $template();
    }

    public static function getFormSchema(string $template)
    {
        $template = self::getTemplate($template);
        return $template->formSchema();
    }
}
