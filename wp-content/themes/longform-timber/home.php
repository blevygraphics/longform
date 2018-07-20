<?php
/* Template Name: Home Page */
$context = Timber::get_context();
$context['post'] = new Timber\Post();

Timber::render( 'home.twig', $context );
?>