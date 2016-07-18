<?php
namespace Razvan\DevTools\Plugin;

class AbstractBlockPlugin
{
    public function __construct()
    {
    }

    /**
     * @param \Magento\Framework\View\Element\AbstractBlock | \Magento\Framework\View\Element\Template $block
     * @param $result
     * @return string
     */
    public function afterToHtml($block, $result)
    {
        $blockName = $block->getNameInLayout();
        $blockTemplate = $block->getTemplateFile();
        $moduleName = $block->getModuleName();

        $cmsData = '';

        if ($moduleName == "Magento_Cms") {
            $cmsData = "\nCms block id: " . $block->getData('block_id');
        }

        $newResult = "\n<!--\nStart block "
            . $blockName
            . "\nTemplate: " . $blockTemplate
            . $cmsData
            . "\n-->\n"
            . $result
            . '<!-- End block ' . $blockName . ' -->';

        return $newResult;
    }
}
