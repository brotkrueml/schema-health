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
 * Target audiences types for medical web pages. Enumerated type.
 * @deprecated This type represents an enumeration, use the enum with the {f:constant()} ViewHelper instead (available since Fluid 2.12).
 */
final class MedicalAudienceTypeViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'MedicalAudienceType';
}
