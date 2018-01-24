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
$footerInformationLoad = Mage::getModel('cms/block')
    ->load('footer_second_info', 'identifier');

if ($footerInformationLoad->getId()) {
    $footerInformationLoad->addData(['content' => $footerInformation]);
} else {
    $footerInformationLoad->addData([
        'content' => $footerInformation,
        'identifier' => 'footer_second_info',
        'title' => 'Footer info',
        'is_active' => 1
    ]);
}

$footerInformationLoad->setStores([0,1])->save();

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
$footerCustomerLoad = Mage::getModel('cms/block')
    ->load('footer_second_customserv', 'identifier');

if ($footerCustomerLoad->getId()) {
    $footerCustomerLoad->addData(['content' => $footerCustomer]);
} else {
    $footerCustomerLoad->addData([
        'content' => $footerCustomer,
        'identifier' => 'footer_second_customserv',
        'title' => 'Footer customer service',
        'is_active' => 1
    ]);
}

$footerCustomerLoad->setStores([0,1])->save();

$installer->endSetup();