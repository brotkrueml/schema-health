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
 * The anatomical location at which two or more bones make contact.
 */
#[Type('Joint')]
final class Joint extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'associatedPathophysiology',
        'biomechnicalClass',
        'bodyLocation',
        'code',
        'connectedTo',
        'description',
        'diagram',
        'disambiguatingDescription',
        'functionalClass',
        'guideline',
        'identifier',
        'image',
        'legalStatus',
        'mainEntityOfPage',
        'medicineSystem',
        'name',
        'partOfSystem',
        'potentialAction',
        'recognizingAuthority',
        'relatedCondition',
        'relatedTherapy',
        'relevantSpecialty',
        'sameAs',
        'structuralClass',
        'study',
        'subStructure',
        'subjectOf',
        'url',
    ];
}
