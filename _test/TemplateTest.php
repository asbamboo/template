<?php
namespace asbamboo\template\_test;

use PHPUnit\Framework\TestCase;
use asbamboo\template\Template;

/**
 * 模板测试
 *
 * @author 李春寅 <licy2013@aliyun.com>
 * @since 2018年7月4日
 */
class TemplateTest extends TestCase
{
    public function testRender()
    {
        $Template   = new Template(implode(DIRECTORY_SEPARATOR, [__DIR__, 'fixtures', 'view']), implode(DIRECTORY_SEPARATOR, [__DIR__, 'fixtures', 'cache']));
        $content    = $Template->render('test.html.twig', ['test' => 'test']);
        $this->assertEquals('test', $content);
    }
}
