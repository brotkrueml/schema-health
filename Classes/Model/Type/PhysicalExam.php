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
 * A type of physical examination of a patient performed by a physician.
 * @deprecated This type represents an enumeration, use the specific PhysicalExam enum instead.
 */
#[Type('PhysicalExam')]
final class PhysicalExam extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'bodyLocation',
        'code',
        'description',
        'disambiguatingDescription',
        'followup',
        'guideline',
        'howPerformed',
        'identifier',
        'image',
        'legalStatus',
        'mainEntityOfPage',
        'medicineSystem',
        'name',
        'potentialAction',
        'preparation',
        'procedureType',
        'recognizingAuthority',
        'relevantSpecialty',
        'sameAs',
        'status',
        'study',
        'subjectOf',
        'url',
    ];
}
