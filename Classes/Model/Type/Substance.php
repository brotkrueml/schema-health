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
 * Any matter of defined composition that has discrete existence, whose origin may be biological, mineral or chemical.
 */
#[Type('Substance')]
final class Substance extends AbstractType
{
    protected static array $propertyNames = [
        'activeIngredient',
        'additionalType',
        'alternateName',
        'code',
        'description',
        'disambiguatingDescription',
        'guideline',
        'identifier',
        'image',
        'legalStatus',
        'mainEntityOfPage',
        'maximumIntake',
        'medicineSystem',
        'name',
        'potentialAction',
        'recognizingAuthority',
        'relevantSpecialty',
        'sameAs',
        'study',
        'subjectOf',
        'url',
    ];
}
