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
 * Rigid connective tissue that comprises up the skeletal structure of the human body.
 */
final class Bone extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'alternateName',
        'associatedPathophysiology',
        'bodyLocation',
        'code',
        'connectedTo',
        'description',
        'diagram',
        'disambiguatingDescription',
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
        'study',
        'subStructure',
        'subjectOf',
        'url',
    ];
}
