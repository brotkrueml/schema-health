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
 * A treatment of people with physical, emotional, or social problems, using purposeful activity to help them overcome or learn to deal with their problems.
 */
#[Type('OccupationalTherapy')]
final class OccupationalTherapy extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'adverseOutcome',
        'alternateName',
        'bodyLocation',
        'code',
        'contraindication',
        'description',
        'disambiguatingDescription',
        'doseSchedule',
        'drug',
        'duplicateTherapy',
        'followup',
        'guideline',
        'howPerformed',
        'identifier',
        'image',
        'legalStatus',
        'mainEntityOfPage',
        'medicineSystem',
        'name',
        'owner',
        'potentialAction',
        'preparation',
        'procedureType',
        'recognizingAuthority',
        'relevantSpecialty',
        'sameAs',
        'seriousAdverseOutcome',
        'status',
        'study',
        'subjectOf',
        'url',
    ];
}
