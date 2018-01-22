<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$drapdownBlock = <<<HTML
<p><a class="site-hdr-additional-link"> <img alt="" class="site-hdr-additional-pic" src="{{media url="wysiwyg/gucci-bags.png"}}" /> <span class="site-hdr-additional-text">New Gucci bags limited colection Hurry up to buy!</span> </a></p>
HTML;
$blockData = [
    'content' => $drapdownBlock,
    'identifier' => 'header_menu_additional',
    'title' => 'Header menu additional',
    'is_active' => 1
    ];

Mage::getModel('cms/block')
    ->addData($blockData)
    ->setStores([0,1])
    ->save();

Mage::getModel('core/config')->reinit();

$installer->endSetup();
