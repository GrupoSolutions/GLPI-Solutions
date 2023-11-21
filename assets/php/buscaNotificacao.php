<?php


use Glpi\Application\View\TemplateRenderer;

TemplateRenderer::getInstance()->display('layout/parts/notification_header.html.twig', [
    'qtd' => 32,
]);
?>