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
 * A medical procedure intended primarily for diagnostic, as opposed to therapeutic, purposes.
 */
final class DiagnosticProcedure extends AbstractType
{
    protected static $propertyNames = [
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
