<?php
// HEADER
get_header(); ?>

<?php
// EXAMPLE SECTION CENTRAL
$sectionParams = array(
    'sectionTitle' => __("Potencia tus capacidades con el poder de tu mente", 'daimensa'),
    'sectionDescription' => __("Lorem ipsum blah blah blah", 'daimensa')
);
load_section('central', $sectionParams);
?>

<?php
// EXAMPLE SECTION COLUMNS
$sectionParams = array(
    'sectionSupratitle' => __("No son sólo los activadores", 'daimensa'),
    'sectionTitle' => __("¿Cómo funciona?", 'daimensa'),
    'sectionDescription' => lorem_ipsum_placeholder(140),
    'columns' => array(
        array(
            'title' => __("El Ritual", 'daimensa'),
            'icon' => "street-view",
            'description' => lorem_ipsum_placeholder(80)
        ),
        array(
            'title' => __("El Contexto Temporal", 'daimensa'),
            'icon' => "calendar",
            'description' => lorem_ipsum_placeholder(80)
        ),
        array(
            'title' => __("La Intencionalidad", 'daimensa'),
            'icon' => "level-up",
            'description' => lorem_ipsum_placeholder(80)
        ),
        array(
            'title' => __("La Comunidad", 'daimensa'),
            'icon' => "group",
            'description' => lorem_ipsum_placeholder(80)
        )
    )
);
load_section('columns', $sectionParams);
?>

<?php
// FOOTER
get_footer();