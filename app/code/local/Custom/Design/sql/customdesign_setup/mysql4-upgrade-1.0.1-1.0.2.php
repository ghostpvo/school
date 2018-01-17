<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

Mage::getModel('core/config')
    ->saveConfig('design/header/logo_src', 'images/logo.png', 'default', 0);

Mage::getModel('core/config')
    ->saveConfig('design/footer/copyright', '&copy; 2017 Store.', 'default', 0);

$footerInformation = <<<HTML
<div class="footer-menu-group">
<h4 class="footer-menu-title">INFORMATION</h4>
<ul class="footer-menu-list">
<li class="footer-menu-item"><a href="{{store url=""}}about-magento-demo-store/">About</a></li>
<li class="footer-menu-item"><a href="{{store url=""}}delivery-information/">Delivery information</a></li>
<li class="footer-menu-item"><a href="{{store url=""}}privacy-policy/">Privacy Policy</a></li>
<li class="footer-menu-item"><a href="{{store url=""}}terms-and-conditions/">Terms &amp; Conditions</a></li>
</ul>
</div>
HTML;
$footerInfoData = [
    'content' => $footerInformation,
    'identifier' => 'footer_second_info',
    'title' => 'Footer INFORMATION',
    'is_active' => 1
    ];

Mage::getModel('cms/block')
    ->addData($footerInfoData)
    ->setStores([0,1])
    ->save();

$footerCustomer = <<<HTML
<div class="footer-menu-group">
<h4 class="footer-menu-title">CUSTOMER SERVICE</h4>
<ul class="footer-menu-list">
<li class="footer-menu-item"><a href="{{store url=""}}contact/">Contact</a></li>
<li class="footer-menu-item"><a href="{{store url=""}}returns/">Returns</a></li>
<li class="footer-menu-item"><a href="{{store url=""}}site-map/">Site Map</a></li>
<li class="footer-menu-item"><a href="{{store url=""}}brands/">Brands</a></li>
<li class="footer-menu-item"><a href="{{store url=""}}gift-vouchers/">Gift Vouchers</a></li>
</ul>
</div>
HTML;
$footerCustomerData = [
    'content' => $footerCustomer,
    'identifier' => 'footer_second_customserv',
    'title' => 'Footer CUSTOMER SERVICE',
    'is_active' => 1
];

Mage::getModel('cms/block')
    ->addData($footerCustomerData)
    ->setStores([0,1])
    ->save();

Mage::getModel('core/config')->reinit();

$installer->endSetup();
