<?php
namespace asbamboo\template;

/**
 * 模板接口
 *  - 将模板文件转换为嵌入php标记的html脚本
 *
 * @author 李春寅 <licy2013@aliyun.com>
 * @since 2018年7月4日
 */
interface TemplateInterface
{
    /**
     *
     * @param string $path
     * @param array $assign_data
     * @return string
     */
    public function render(string $path, array $assign_data = []) : string;
}