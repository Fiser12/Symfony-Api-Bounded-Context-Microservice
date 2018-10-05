<?php

/*
 * This file is part of the Php DDD Standard project.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Infrastructure\Symfony\HttpAction;

use Symfony\Component\HttpFoundation\JsonResponse;

class HomeAction
{
    private $parameter;

    public function __construct(string $parameter)
    {
        $this->parameter = $parameter;
    }

    public function __invoke() : JsonResponse
    {
        return new JsonResponse(['message' => 'Hello world! ' . $this->parameter]);
    }
}
