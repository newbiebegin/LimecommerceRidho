<?php

namespace Lime\Sample\Observer;
use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Data\Tree\Node;
use Magento\Framework\Event\ObserverInterface;

class Topmenu implements ObserverInterface
{
    public function execute(EventObserver $observer)
    {
        $menu = $observer->getMenu();
        $tree = $menu->getTree();
        $data = [
            'name'		=> __('Home'),
            'id'        => 'lime_sample_menu_home',
            'url'       => '/',
			'has_active'=> false,
            'is_active' => false
        ];
		$node = new Node($data, 'id', $tree, $menu);
        $menu->addChild($node);
        
		$data2 = [
            'name'		=> __('Product Slider'),
            'id'        => 'lime_sample_menu_product_slider',
            'url'       => 'slider/index/display',
			'has_active'=> false,
            'is_active' => false
        ];
        $node2 = new Node($data2, 'id', $tree, $menu);
        $menu->addChild($node2);
        
		return $this;
    }
}

?>