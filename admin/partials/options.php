<?php

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
// Exit if accessed
function sales_addon_template_options()
{
    $base_url = '//nicheaddons.com/demos/sales-page/';
    $thumbnail_dir = SALES_PAGE_ADDON_PLUGIN_ADMIN_URL . '/partials/thumbnails/';
    $elementor_free_template_dir = SALES_PAGE_ADDON_PLUGIN_ADMIN_PATH . '/partials/templates/elementor/free/';
    $beaver_free_template_dir = SALES_PAGE_ADDON_PLUGIN_ADMIN_PATH . '/partials/templates/beaver/free/';
    $options = array();
    $options = array(
        'e-book'                      => array(
        'name'         => 'E Book',
        'type'         => 'free',
        'categories'   => array(
        'elementor',
        'beaver',
        'free',
        'landing',
        'e-book'
    ),
        'thumbnail'    => $thumbnail_dir . 'e-book/e-book-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => false,
        'download_url' => array(
        'elementor' => $elementor_free_template_dir . 'e-book.json',
        'beaver'    => $beaver_free_template_dir . 'e-book.json',
    ),
        'demo_url'     => array(
        'free' => $base_url . 'e-book',
        'pro'  => '',
    ),
    ),
        'webinar'                     => array(
        'name'         => 'Webinar',
        'type'         => 'free',
        'categories'   => array(
        'elementor',
        'beaver',
        'free',
        'landing',
        'webinar'
    ),
        'thumbnail'    => $thumbnail_dir . 'webinar/webinar-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => false,
        'download_url' => array(
        'elementor' => $elementor_free_template_dir . 'webinar.json',
        'beaver'    => $beaver_free_template_dir . 'webinar.json',
    ),
        'demo_url'     => array(
        'free' => $base_url . 'webinar',
        'pro'  => '',
    ),
    ),
        'seo-inbound-marketing'       => array(
        'name'         => 'SEO - Inbound Marketing',
        'type'         => 'free',
        'categories'   => array(
        'elementor',
        'beaver',
        'free',
        'landing',
        'seo'
    ),
        'thumbnail'    => $thumbnail_dir . 'seo-inbound-marketing/seo-inbound-marketing-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => true,
        'download_url' => array(
        'elementor' => $elementor_free_template_dir . 'seo-inbound-marketing.json',
        'beaver'    => $beaver_free_template_dir . 'seo-inbound-marketing.json',
    ),
        'demo_url'     => array(
        'free' => $base_url . 'seo-inbound-marketing/seo-inbound-marketing-free-version',
        'pro'  => $base_url . 'seo-inbound-marketing',
    ),
    ),
        'seo-inbound-marketing-popup' => array(
        'name'         => 'SEO - Inbound Marketing Popup',
        'type'         => 'pro',
        'categories'   => array(
        'elementor',
        'pro',
        'landing',
        'seo',
        'popup'
    ),
        'thumbnail'    => $thumbnail_dir . 'seo-inbound-marketing/seo-inbound-marketing-popup-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => false,
        'download_url' => array(
        'elementor' => '',
        'beaver'    => '',
    ),
        'demo_url'     => array(
        'free' => '',
        'pro'  => $base_url . 'seo-inbound-marketing',
    ),
    ),
        'social-media-course'         => array(
        'name'         => 'Social Media Course',
        'type'         => 'free',
        'categories'   => array(
        'elementor',
        'beaver',
        'free',
        'landing',
        'course'
    ),
        'thumbnail'    => $thumbnail_dir . 'social-media-course/social-media-course-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => true,
        'download_url' => array(
        'elementor' => $elementor_free_template_dir . 'social-media-course.json',
        'beaver'    => $beaver_free_template_dir . 'social-media-course.json',
    ),
        'demo_url'     => array(
        'free' => $base_url . 'social-media-course/social-media-course-free-version',
        'pro'  => $base_url . 'social-media-course',
    ),
    ),
        'python-course'               => array(
        'name'         => 'Python Course',
        'type'         => 'free',
        'categories'   => array(
        'elementor',
        'beaver',
        'free',
        'landing',
        'course'
    ),
        'thumbnail'    => $thumbnail_dir . 'python-course/python-course-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => true,
        'download_url' => array(
        'elementor' => $elementor_free_template_dir . 'python-course.json',
        'beaver'    => $beaver_free_template_dir . 'python-course.json',
    ),
        'demo_url'     => array(
        'free' => $base_url . 'python-course/python-course-free-version',
        'pro'  => $base_url . 'python-course',
    ),
    ),
        'financi'                     => array(
        'name'         => 'Financial Advisor',
        'type'         => 'free',
        'categories'   => array(
        'elementor',
        'beaver',
        'free',
        'landing',
        'financial'
    ),
        'thumbnail'    => $thumbnail_dir . 'financi/financi-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => true,
        'download_url' => array(
        'elementor' => $elementor_free_template_dir . 'financi.json',
        'beaver'    => $beaver_free_template_dir . 'financi.json',
    ),
        'demo_url'     => array(
        'free' => $base_url . 'financi/financi-free-version',
        'pro'  => $base_url . 'financi',
    ),
    ),
        'gym-protein'                 => array(
        'name'         => 'Gym Protein',
        'type'         => 'free',
        'categories'   => array(
        'elementor',
        'beaver',
        'free',
        'landing',
        'health'
    ),
        'thumbnail'    => $thumbnail_dir . 'gym-protein/gym-protein-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => true,
        'download_url' => array(
        'elementor' => $elementor_free_template_dir . 'gym-protein.json',
        'beaver'    => $beaver_free_template_dir . 'gym-protein.json',
    ),
        'demo_url'     => array(
        'free' => $base_url . 'gym-protein/gym-protein-free-version',
        'pro'  => $base_url . 'gym-protein',
    ),
    ),
        'art-drawings'                => array(
        'name'         => 'Art Drawings',
        'type'         => 'free',
        'categories'   => array(
        'elementor',
        'beaver',
        'free',
        'landing',
        'art'
    ),
        'thumbnail'    => $thumbnail_dir . 'art-drawings/art-drawings-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => true,
        'download_url' => array(
        'elementor' => $elementor_free_template_dir . 'art-drawings.json',
        'beaver'    => $beaver_free_template_dir . 'art-drawings.json',
    ),
        'demo_url'     => array(
        'free' => $base_url . 'art-drawings/art-drawings-free-version',
        'pro'  => $base_url . 'art-drawings',
    ),
    ),
        'herbal-skin-care'            => array(
        'name'         => 'Herbal Skin Care',
        'type'         => 'free',
        'categories'   => array(
        'elementor',
        'beaver',
        'free',
        'landing',
        'health'
    ),
        'thumbnail'    => $thumbnail_dir . 'herbal-skin-care/herbal-skin-care-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => true,
        'download_url' => array(
        'elementor' => $elementor_free_template_dir . 'herbal-skin-care.json',
        'beaver'    => $beaver_free_template_dir . 'herbal-skin-care.json',
    ),
        'demo_url'     => array(
        'free' => $base_url . 'herbal-skin-care/herbal-skin-care-free-version',
        'pro'  => $base_url . 'herbal-skin-care',
    ),
    ),
        'construction'                => array(
        'name'         => 'Construction',
        'type'         => 'pro',
        'categories'   => array(
        'elementor',
        'pro',
        'landing',
        'construction'
    ),
        'thumbnail'    => $thumbnail_dir . 'construction/construction-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => false,
        'download_url' => array(
        'elementor' => '',
        'beaver'    => '',
    ),
        'demo_url'     => array(
        'free' => '',
        'pro'  => $base_url . 'construction',
    ),
    ),
        'psycho-doctor'               => array(
        'name'         => 'Psycho Doctor',
        'type'         => 'pro',
        'categories'   => array(
        'elementor',
        'pro',
        'landing',
        'health'
    ),
        'thumbnail'    => $thumbnail_dir . 'psycho-doctor/psycho-doctor-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => false,
        'download_url' => array(
        'elementor' => '',
        'beaver'    => '',
    ),
        'demo_url'     => array(
        'free' => '',
        'pro'  => $base_url . 'psycho-doctor',
    ),
    ),
        'yoga'                        => array(
        'name'         => 'Yoga',
        'type'         => 'pro',
        'categories'   => array(
        'elementor',
        'pro',
        'landing',
        'health'
    ),
        'thumbnail'    => $thumbnail_dir . 'yoga/yoga-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => false,
        'download_url' => array(
        'elementor' => '',
        'beaver'    => '',
    ),
        'demo_url'     => array(
        'free' => '',
        'pro'  => $base_url . 'yoga',
    ),
    ),
        'web-design-agency'           => array(
        'name'         => 'Web Design Agency',
        'type'         => 'pro',
        'categories'   => array(
        'elementor',
        'pro',
        'landing',
        'web-design-agency'
    ),
        'thumbnail'    => $thumbnail_dir . 'web-design-agency/web-design-agency-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => false,
        'download_url' => array(
        'elementor' => '',
        'beaver'    => '',
    ),
        'demo_url'     => array(
        'free' => '',
        'pro'  => $base_url . 'web-design-agency',
    ),
    ),
        'stock-broker'                => array(
        'name'         => 'Stock Broker',
        'type'         => 'free',
        'categories'   => array(
        'elementor',
        'free',
        'landing',
        'stock-broker'
    ),
        'thumbnail'    => $thumbnail_dir . 'stock-broker/stock-broker-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => true,
        'download_url' => array(
        'elementor' => $elementor_free_template_dir . 'stock-broker.json',
        'beaver'    => '',
    ),
        'demo_url'     => array(
        'free' => $base_url . 'stock-broker/stock-broker-free-version',
        'pro'  => $base_url . 'stock-broker',
    ),
    ),
        'crypto'                      => array(
        'name'         => 'Crypto',
        'type'         => 'pro',
        'categories'   => array(
        'elementor',
        'pro',
        'landing',
        'crypto'
    ),
        'thumbnail'    => $thumbnail_dir . 'crypto/crypto-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => false,
        'download_url' => array(
        'elementor' => '',
        'beaver'    => '',
    ),
        'demo_url'     => array(
        'free' => '',
        'pro'  => $base_url . 'crypto',
    ),
    ),
        'software-analytics'          => array(
        'name'         => 'Software Analytics',
        'type'         => 'free',
        'categories'   => array(
        'beaver',
        'free',
        'landing',
        'software'
    ),
        'thumbnail'    => $thumbnail_dir . 'software-analytics/software-analytics-thumb.jpg',
        'full_img'     => '',
        'upgradeable'  => true,
        'download_url' => array(
        'elementor' => '',
        'beaver'    => $beaver_free_template_dir . 'software-analytics.json',
    ),
        'demo_url'     => array(
        'free' => $base_url . 'software-analytics/software-analytics-free-version',
        'pro'  => $base_url . 'software-analytics',
    ),
    ),
    );
    return apply_filters( 'sales_addon_templates', $options );
}
