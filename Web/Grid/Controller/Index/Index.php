<?php

namespace Web\Grid\Controller\Index;

use Magento\Framework\App\Action\Action;
use Web\Grid\Model\NewsFactory;

class Index extends Action
{


    public function execute()
    {

        $objectManager =  \Magento\Framework\App\ObjectManager::getInstance();
        $classmates = $objectManager->create('Web\Grid\Model\Grid')->getCollection();
        $data = $classmates->getData();
        for ($i = 0; $i < count($data); $i++) {
            echo $data[$i]['title']."\n";
            echo $data[$i]['last_name']."\n";;
            echo $data[$i]['age']."<br>";
        }


    }
}