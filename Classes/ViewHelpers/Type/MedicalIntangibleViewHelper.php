<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_health" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaHealth\ViewHelpers\Type;

use Brotkrueml\Schema\Core\ViewHelpers\AbstractTypeViewHelper;

/**
 * A utility class that serves as the umbrella for a number of 'intangible' things in the medical space.
 */
final class MedicalIntangibleViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'MedicalIntangible';
}
