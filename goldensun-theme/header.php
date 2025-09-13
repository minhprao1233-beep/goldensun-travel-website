<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-brand-light-cream text-brand-dark-gray'); ?>>
<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="<?php echo home_url(); ?>" class="text-3xl font-bold text-amber-500">
            Golden Sun
        </a>
        <nav class="hidden md:flex space-x-8 items-center">
            <a href="#features" class="text-gray-600 hover:text-amber-500 transition">Về Chúng Tôi</a>
            <a href="#ai-planner" class="text-gray-600 hover:text-amber-500 transition">AI Planner</a>
            <a href="#testimonials" class="text-gray-600 hover:text-amber-500 transition">Đánh Giá</a>
            <a href="#contact" class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-2 px-6 rounded-full transition duration-300">Liên Hệ</a>
        </nav>
        <button id="mobile-menu-button" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white">
        <a href="#features" class="block py-2 px-6 text-sm text-gray-700 hover:bg-gray-100">Về Chúng Tôi</a>
        <a href="#ai-planner" class="block py-2 px-6 text-sm text-gray-700 hover:bg-gray-100">AI Planner</a>
        <a href="#testimonials" class="block py-2 px-6 text-sm text-gray-700 hover:bg-gray-100">Đánh Giá</a>
        <a href="#contact" class="block py-2 px-6 text-sm text-gray-700 hover:bg-gray-100">Liên Hệ</a>
    </div>
</header>
