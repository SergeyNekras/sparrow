<?php

/*добавляем действие add_action в момент когда 
выполняется вывод файлов и скриптов это wp_enqueue_scripts
подключаем стили нашей темы - style_theme*/


add_action('wp_enqueue_scripts', 'style_theme');

/* add_action добавляем действие - подключаем скрипты через функцию
scripts_theme() по нашему хуку wp_footer() в файле footer.php 
*/
add_action('wp_footer', 'scripts_theme');

function style_theme()  {
 /* wp_enqueue_style()Правильно добавляет файл CSS стилей. Регистрирует 
 файл стилей, если он еще не был зарегистрирован.
 get_template_directory_uri() возвращает путь до папки с темой
 get_stylesheet_uri() возвращает путь до папки с темой (и подставляет файл style.css)
 
 */   
 
 wp_enqueue_style('style', get_stylesheet_uri());
 wp_enqueue_style ('default', get_template_directory_uri().'/assets/css/default.css');
 wp_enqueue_style ('layout', get_template_directory_uri().'/assets/css/layout.css');
 wp_enqueue_style ('media_queries', get_template_directory_uri().'/assets/css/media-queries.css');
}

/* Создаем новую функцию scripts_theme()
*/

function scripts_theme() /* определяем новую функцию*/
 {
    /* wp_enqueue_script() - Правильно подключает скрипт (JavaScript файл) на страницу.
     подключаем скрипт init*/
    wp_enqueue_script('init', get_template_directory_uri(). '/assets/js/init.js');
  wp_enqueue_script('init', get_template_directory_uri(). '/assets/js/modernizr.js');
 }