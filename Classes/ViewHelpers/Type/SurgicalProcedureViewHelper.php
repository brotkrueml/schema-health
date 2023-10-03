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
 * A medical procedure involving an incision with instruments; performed for diagnose, or therapeutic purposes.
 */
final class SurgicalProcedureViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'SurgicalProcedure';
}
