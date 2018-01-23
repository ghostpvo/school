<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();
$pageContent = <<<HTML
<div class="homepage-offer">
    <h3 class="homepage-offer-title">NEW COLLECTION</h3>
    <p class="homepage-offer-description">Lorem Ipsum is placeholder text commonly used in the graphic, print</p>
    <div class="homepage-offer-shopnow"><a class="main-btn" href="">SHOP NOW</a></div>
</div>
<div class="products-blk">
    <div class="blk-header">
        <h3 class="blk-header-title">TRENDING PRODUCTS</h3>
        <p class="blk-header-dscr">Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries for</p>
    </div>
    <ul class="products-blk-list">
        <li class="products-blk-item"><a href=""><img alt="" class="products-blk-itempic" src="{{media url="wysiwyg/item7.png"}}" />
            <h4 class="products-blk-itemtitle">Red dress</h4>
            <span class="products-blk-itemprice">25.99$</span></a></li>
        <li class="products-blk-item"><a href=""><img alt="" class="products-blk-itempic" src="{{media url="wysiwyg/item8.png"}}" />
            <h4 class="products-blk-itemtitle">Dark/blue dress</h4>
            <span class="products-blk-itemprice">25.99$</span></a></li>
        <li class="products-blk-item"><a href=""><img alt="" class="products-blk-itempic" src="{{media url="wysiwyg/item9.png"}}" />
            <h4 class="products-blk-itemtitle">Brown dress</h4>
            <span class="products-blk-itemprice">25.99$</span></a></li>
    </ul>
</div>
<div class="products-blk">
    <div class="blk-header">
        <h3 class="blk-header-title">POPULAR PRODUCTS</h3>
        <p class="blk-header-dscr">Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries for</p>
    </div>
    <ul class="products-blk-list">
        <li class="products-blk-item"><a href=""><img alt="" class="products-blk-itempic" src="{{media url="wysiwyg/item1.png"}}" />
            <h4 class="products-blk-itemtitle">Red dress</h4>
            <span class="products-blk-itemprice">25.99$</span></a></li>
        <li class="products-blk-item"><a href=""><img alt="" class="products-blk-itempic" src="{{media url="wysiwyg/item2.png"}}" />
            <h4 class="products-blk-itemtitle">Dark/blue dress</h4>
            <span class="products-blk-itemprice">25.99$</span></a></li>
        <li class="products-blk-item"><a href=""><img alt="" class="products-blk-itempic" src="{{media url="wysiwyg/item3.png"}}" />
            <h4 class="products-blk-itemtitle">Brown dress</h4>
            <span class="products-blk-itemprice">25.99$</span></a></li>
        <li class="products-blk-item"><a href=""><img alt="" class="products-blk-itempic" src="{{media url="wysiwyg/item4.png"}}" />
            <h4 class="products-blk-itemtitle">Red dress</h4>
            <span class="products-blk-itemprice">25.99$</span></a></li>
        <li class="products-blk-item"><a href=""><img alt="" class="products-blk-itempic" src="{{media url="wysiwyg/item5.png"}}" />
            <h4 class="products-blk-itemtitle">Dark/blue dress</h4>
            <span class="products-blk-itemprice">25.99$</span></a></li>
        <li class="products-blk-item"><a href=""><img alt="" class="products-blk-itempic" src="{{media url="wysiwyg/item6.png"}}" />
            <h4 class="products-blk-itemtitle">Brown dress</h4>
            <span class="products-blk-itemprice">25.99$</span></a></li>
    </ul>
</div>
<div class="blog-items">
    <div class="blog-items-contens">
        <div class="blk-header">
            <h3 class="blk-header-title">LATEST FROM THE BLOG</h3>
            <p class="blk-header-dscr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
        <ul class="blog-items-list">
            <li class="blog-items-item">
                <a href="" class="blog-items-link">
                    <h4 class="blog-items-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                    <span class="blog-items-date">4 May,2017</span>
                    <p class="blog-items-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </a>
            </li>
            <li class="blog-items-item">
                <a href="" class="blog-items-link">
                    <h4 class="blog-items-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                    <span class="blog-items-date">4 May,2017</span>
                    <p class="blog-items-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </a>
            </li>
            <li class="blog-items-item">
                <a href="" class="blog-items-link">
                    <h4 class="blog-items-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                    <span class="blog-items-date">4 May,2017</span>
                    <p class="blog-items-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </a>
            </li>
        </ul>
    </div>
</div>
HTML;

$page = ['content' => $pageContent];

Mage::getModel('cms/page')
    ->load('home', 'identifier')
    ->addData($page)
    ->save();

$installer->endSetup();
