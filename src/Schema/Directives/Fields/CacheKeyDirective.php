<?php

namespace Nuwave\Lighthouse\Schema\Directives\Fields;

use Nuwave\Lighthouse\Support\Contracts\Directive;

class CacheKeyDirective implements Directive
{
    /**
     * Name of the directive.
     *
     * @return string
     */
    public function name(): string
    {
        return 'cacheKey';
    }
}
