<?php
/**
 *
 */
namespace FishPig\UiDebug\Ui\TemplateEngine\Xhtml;

class Result extends \Magento\Ui\TemplateEngine\Xhtml\Result
{
    /**
     *
     */
    protected function wrapContent($content)
    {
        if (isset($_GET['ui-debug'])) {
            echo sprintf(
                '<pre>%s</pre>',
                print_r(json_decode($content, true), true)
            );
            exit;
        }

        return parent::wrapContent($content);
    }
}