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
 * Any object used in a medical capacity, such as to diagnose or treat a patient.
 */
#[Type('MedicalDevice')]
final class MedicalDevice extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'adverseOutcome',
        'alternateName',
        'code',
        'contraindication',
        'description',
        'disambiguatingDescription',
        'guideline',
        'identifier',
        'image',
        'legalStatus',
        'mainEntityOfPage',
        'medicineSystem',
        'name',
        'owner',
        'postOp',
        'potentialAction',
        'preOp',
        'procedure',
        'recognizingAuthority',
        'relevantSpecialty',
        'sameAs',
        'seriousAdverseOutcome',
        'study',
        'subjectOf',
        'url',
    ];
}
