<?php
declare(strict_types=1);
namespace Soatok\Furator\Core;

use Slim\Psr7\{
    Request,
    Response
};

/**
 * Class Handler
 *
 * Handles an HTTP Request in Furator
 *
 * @package Soatok\Furator\Core
 */
abstract class Handler
{
    abstract public function __invoke(Request $request): Response;
}
