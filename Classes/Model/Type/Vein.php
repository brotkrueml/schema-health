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
 * A type of blood vessel that specifically carries blood to the heart.
 */
#[Type('Vein')]
final class Vein extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'associatedPathophysiology',
        'bodyLocation',
        'code',
        'connectedTo',
        'description',
        'diagram',
        'disambiguatingDescription',
        'drainsTo',
        'guideline',
        'identifier',
        'image',
        'legalStatus',
        'mainEntityOfPage',
        'medicineSystem',
        'name',
        'owner',
        'partOfSystem',
        'potentialAction',
        'recognizingAuthority',
        'regionDrained',
        'relatedCondition',
        'relatedTherapy',
        'relevantSpecialty',
        'sameAs',
        'study',
        'subStructure',
        'subjectOf',
        'tributary',
        'url',
    ];
}
