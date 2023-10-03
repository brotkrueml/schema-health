<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_health" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaHealth\Model\Type;

use Brotkrueml\Schema\Attributes\Type;
use Brotkrueml\Schema\Core\Model\AbstractType;

/**
 * A stage of a medical condition, such as 'Stage IIIa'.
 */
#[Type('MedicalConditionStage')]
final class MedicalConditionStage extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'code',
        'description',
        'disambiguatingDescription',
        'guideline',
        'identifier',
        'image',
        'legalStatus',
        'mainEntityOfPage',
        'medicineSystem',
        'name',
        'potentialAction',
        'recognizingAuthority',
        'relevantSpecialty',
        'sameAs',
        'stageAsNumber',
        'study',
        'subStageSuffix',
        'subjectOf',
        'url',
    ];
}
