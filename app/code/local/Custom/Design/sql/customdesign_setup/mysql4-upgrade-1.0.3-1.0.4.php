<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$dropdownBlock = <<<HTML
<p><a class="site-hdr-additional-link"> <img alt="" class="site-hdr-additional-pic" src="{{skin url='images/ex/gucci-bags.png'}}" /> <span class="site-hdr-additional-text">New Gucci bags limited colection Hurry up to buy!</span> </a></p>
HTML;
$dropdownBlockData = [
    'content' => $dropdownBlock,
    'identifier' => 'header_menu_additional',
    'title' => 'Header menu additional',
    'is_active' => 1
    ];

Mage::getModel('cms/block')
    ->addData($dropdownBlockData)
    ->setStores([0,1])
    ->save();

$contentBlock = <<<HTML
<div class="homepage-offer"><img alt="" class="homepage-offer-background" src="{{skin url='images/ex/offer-bg.png'}}" />
<h3 class="homepage-offer-title">NEW COLLECTION</h3>
<p class="homepage-offer-description">Lorem Ipsum is placeholder text commonly used in the graphic, print</p>
<div class="homepage-offer-shopnow"><a class="main-btn">SHOP NOW</a></div>
</div>
<div class="products-blk">
<div class="blk-header">
<h3 class="blk-header-title">TRENDING PRODUCTS</h3>
<p class="blk-header-dscr">Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries for</p>
</div>
<ul class="products-blk-list">
<li class="products-blk-item"><a></a><a><img alt="" class="products-blk-itempic" src="{{skin url='images/ex/item7.png"}}" /></a>
<h4 class="products-blk-itemtitle">Red dress</h4>
<a><span class="products-blk-itemprice">25.99$</span></a></li>
<li class="products-blk-item"><a></a><a><img alt="" class="products-blk-itempic" src="{{skin url='images/ex/item8.png"}}" /></a>
<h4 class="products-blk-itemtitle">Dark/blue dress</h4>
<a><span class="products-blk-itemprice">25.99$</span></a></li>
<li class="products-blk-item"><a></a><a><img alt="" class="products-blk-itempic" src="{{skin url='images/ex/item9.png"}}" /></a>
<h4 class="products-blk-itemtitle">Brown dress</h4>
<a><span class="products-blk-itemprice">25.99$</span></a></li>
</ul>
</div>
<div class="products-blk">
<div class="blk-header">
<h3 class="blk-header-title">POPULAR PRODUCTS</h3>
<p class="blk-header-dscr">Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries for</p>
</div>
<ul class="products-blk-list">
<li class="products-blk-item"><a></a><a><img alt="" class="products-blk-itempic" src="{{skin url='images/ex/item1.png"}}" /></a>
<h4 class="products-blk-itemtitle">Red dress</h4>
<a><span class="products-blk-itemprice">25.99$</span></a></li>
<li class="products-blk-item"><a></a><a><img alt="" class="products-blk-itempic" src="{{skin url='images/ex/item2.png"}}" /></a>
<h4 class="products-blk-itemtitle">Dark/blue dress</h4>
<a><span class="products-blk-itemprice">25.99$</span></a></li>
<li class="products-blk-item"><a></a><a><img alt="" class="products-blk-itempic" src="{{skin url='images/ex/item3.png"}}" /></a>
<h4 class="products-blk-itemtitle">Brown dress</h4>
<a><span class="products-blk-itemprice">25.99$</span></a></li>
<li class="products-blk-item"><a></a><a><img alt="" class="products-blk-itempic" src="{{skin url='images/ex/item4.png"}}" /></a>
<h4 class="products-blk-itemtitle">Red dress</h4>
<a><span class="products-blk-itemprice">25.99$</span></a></li>
<li class="products-blk-item"><a></a><a><img alt="" class="products-blk-itempic" src="{{skin url='images/ex/item5.png"}}" /></a>
<h4 class="products-blk-itemtitle">Dark/blue dress</h4>
<a><span class="products-blk-itemprice">25.99$</span></a></li>
<li class="products-blk-item"><a></a><a><img alt="" class="products-blk-itempic" src="{{skin url='images/ex/item6.png"}}" /></a>
<h4 class="products-blk-itemtitle">Brown dress</h4>
<a><span class="products-blk-itemprice">25.99$</span></a></li>
</ul>
</div>
<div class="blog-items">
<div class="blog-items-contens">
<div class="blk-header">
<h3 class="blk-header-title">LATEST FROM THE BLOG</h3>
<p class="blk-header-dscr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
<ul class="blog-items-list">
<li class="blog-items-item">
<h4 class="blog-items-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
<a class="blog-items-link"></a><a class="blog-items-link"><span class="blog-items-date">4 May,2017</span></a>
<p class="blog-items-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</li>
<li class="blog-items-item">
<h4 class="blog-items-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
<a class="blog-items-link"></a><a class="blog-items-link"><span class="blog-items-date">4 May,2017</span></a>
<p class="blog-items-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</li>
<li class="blog-items-item">
<h4 class="blog-items-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
<a class="blog-items-link"></a><a class="blog-items-link"><span class="blog-items-date">4 May,2017</span></a>
<p class="blog-items-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</li>
</ul>
</div>
</div>
HTML;
$contentBlockData = [
    'content' => $contentBlock,
    'identifier' => 'home',
    'title' => 'Home page',
    'root_template' => 'one_column',
    'is_active' => 1
];

Mage::getModel('cms/page')
    ->addData($contentBlockData)
    ->setStores([0,1])
    ->save();

$installer->endSetup();
