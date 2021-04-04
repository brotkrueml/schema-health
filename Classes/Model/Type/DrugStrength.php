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
 * A specific strength in which a medical drug is available in a specific country.
 */
final class DrugStrength extends AbstractType
{
    protected static $propertyNames = [
        'activeIngredient',
        'additionalType',
        'alternateName',
        'availableIn',
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
        'strengthUnit',
        'strengthValue',
        'study',
        'subjectOf',
        'url',
    ];
}
