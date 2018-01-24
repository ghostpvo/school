<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$dropdownBlock = <<<HTML
<p><a class="site-hdr-additional-link"> <img alt="" class="site-hdr-additional-pic" src="{{skin url='images/ex/gucci-bags.png'}}" /> <span class="site-hdr-additional-text">New Gucci bags limited colection Hurry up to buy!</span> </a></p>
HTML;

$dropdownBlockLoad = Mage::getModel('cms/block')
    ->load('header_menu_additional', 'identifier');

if ($dropdownBlockLoad->getId()) {
    $dropdownBlockLoad->addData(['content' => $dropdownBlock]);
} else {
    $dropdownBlockLoad->addData([
        'content' => $dropdownBlock,
        'identifier' => 'header_menu_additional',
        'title' => 'Header menu additional',
        'is_active' => 1
    ]);
}

$dropdownBlockLoad->setStores([0,1])->save();

$installer->endSetup();
