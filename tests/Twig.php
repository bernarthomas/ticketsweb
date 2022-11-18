<?php

use PHPUnit\Framework\TestCase;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

/**
 * Twig fonctionne
 */
class Twig extends TestCase
{
    /**
     * @return void
     */
    public function testTemplate()
    {
        $loader = new  FilesystemLoader(dirname(__DIR__) . '/templates');
        $twig = new Environment($loader);
        $this->assertStringContainsString('<title>Test</title>', $twig->render('test.html.twig'));
    }
}
