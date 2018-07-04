<?php
namespace asbamboo\template;

/**
 * 基于twig/twig完成的模板
 *
 * @see https://twig.symfony.com
 * @author 李春寅 <licy2013@aliyun.com>
 * @since 2018年7月4日
 */
class Template implements TemplateInterface
{
    /**
     *
     * @var \Twig_Environment
     */
    private $Twig;

    public function __construct($template_dir = [], $cache_dir = false)
    {
        $Loader     = new \Twig_Loader_Filesystem($template_dir);
        $this->Twig = new \Twig_Environment($Loader, ['cache' => $cache_dir]);
    }

    /**
     *
     * {@inheritDoc}
     * @see \asbamboo\template\TemplateInterface::render()
     */
    public function render(string $path, array $assign_data = []): string
    {
        $Template   = $this->Twig->load($path);
        return $Template->render($assign_data);
    }
}