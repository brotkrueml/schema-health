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
 * Any medical imaging modality typically used for diagnostic purposes. Enumerated type.
 */
final class MedicalImagingTechniqueViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'MedicalImagingTechnique';
}
