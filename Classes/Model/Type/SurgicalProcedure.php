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
 * A medical procedure involving an incision with instruments; performed for diagnose, or therapeutic purposes.
 */
#[Type('SurgicalProcedure')]
final class SurgicalProcedure extends AbstractType
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
        'owner',
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
