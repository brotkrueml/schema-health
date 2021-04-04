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
 * A muscle is an anatomical structure consisting of a contractile form of tissue that animals use to effect movement.
 */
final class Muscle extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'alternateName',
        'antagonist',
        'associatedPathophysiology',
        'bloodSupply',
        'bodyLocation',
        'code',
        'connectedTo',
        'description',
        'diagram',
        'disambiguatingDescription',
        'guideline',
        'identifier',
        'image',
        'insertion',
        'legalStatus',
        'mainEntityOfPage',
        'medicineSystem',
        'muscleAction',
        'name',
        'nerve',
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
