<?php
declare(strict_types=1);

namespace Develo\Forum\Ui\Component\Listing\Column;

class ColorShow extends \Magento\Ui\Component\Listing\Columns\Column
{


    public function __construct(
        \Magento\Framework\View\Element\UiComponent\ContextInterface $context,
        \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                if (isset($item['post_id'])) {
                    $result = '<div style="width:max-content; border: 1px solid #514943; padding: 2px"><div style="width: 16px; height: 16px; background-color: '.$item['post_hex'].';"></div></div>';
                    $item['post_color_show'] = $result;
                }
            }
        }

        return $dataSource;
    }
}
