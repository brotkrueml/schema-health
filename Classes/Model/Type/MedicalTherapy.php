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
 * Any medical intervention designed to prevent, treat, and cure human diseases and medical conditions, including both curative and palliative therapies. Medical therapies are typically processes of care relying upon pharmacotherapy, behavioral therapy, supportive therapy (with fluid or nutrition for example), or detoxification (e.g. hemodialysis) aimed at improving or preventing a health condition.
 */
#[Type('MedicalTherapy')]
final class MedicalTherapy extends AbstractType
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
