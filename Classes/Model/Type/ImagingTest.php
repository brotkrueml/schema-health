<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_health" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaHealth\Model\Type;

use Brotkrueml\Schema\Core\Model\AbstractType;

/**
 * Any medical imaging modality typically used for diagnostic purposes.
 */
final class ImagingTest extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'affectedBy',
        'alternateName',
        'code',
        'description',
        'disambiguatingDescription',
        'guideline',
        'identifier',
        'image',
        'imagingTechnique',
        'legalStatus',
        'mainEntityOfPage',
        'medicineSystem',
        'name',
        'normalRange',
        'potentialAction',
        'recognizingAuthority',
        'relevantSpecialty',
        'sameAs',
        'signDetected',
        'study',
        'subjectOf',
        'url',
        'usedToDiagnose',
        'usesDevice',
    ];
}
