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
    protected $Twig;

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

    /**
     * 如果调用的方法这个类不存在，默认在成员变量$twig里面查找。
     *
     * @param string $method
     * @param array|null $arguments
     * @return mixed
     */
    public function __call($method, $arguments)
    {
        if(method_exists($this->Twig, $method)){
            return $this->Twig->{$method}(...$arguments);
        }
    }
}