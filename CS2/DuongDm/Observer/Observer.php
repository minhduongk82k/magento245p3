<?php
namespace CS2\DuongDm\Observer;

class Observer implements \Magento\Framework\Event\ObserverInterface
{
    public function __construct()
    {
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $myEventData = $observer->getData('myEventData');
    }
}
