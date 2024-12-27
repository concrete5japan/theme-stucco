<?php

namespace Stucco\Attribute\Context;

use Concrete\Core\Attribute\Context\FrontendFormContext as BaseFrontendFormContext;
use Concrete\Core\Filesystem\TemplateLocator;

class FrontendFormContext extends BaseFrontendFormContext
{
    public function __construct()
    {
        parent::__construct();
        $this->preferTemplateIfAvailable('stucco', 'theme_stucco');
    }

    public function setLocation(TemplateLocator $locator)
    {
        $locator->setTemplate(['stucco', 'theme_stucco']);
        return $locator;
    }
}
