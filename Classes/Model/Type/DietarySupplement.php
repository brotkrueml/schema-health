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
 * A product taken by mouth that contains a dietary ingredient intended to supplement the diet. Dietary ingredients may include vitamins, minerals, herbs or other botanicals, amino acids, and substances such as enzymes, organ tissues, glandulars and metabolites.
 */
final class DietarySupplement extends AbstractType
{
    protected static $propertyNames = [
        'activeIngredient',
        'additionalType',
        'alternateName',
        'code',
        'description',
        'disambiguatingDescription',
        'guideline',
        'identifier',
        'image',
        'isProprietary',
        'legalStatus',
        'mainEntityOfPage',
        'manufacturer',
        'maximumIntake',
        'mechanismOfAction',
        'medicineSystem',
        'name',
        'nonProprietaryName',
        'potentialAction',
        'proprietaryName',
        'recognizingAuthority',
        'recommendedIntake',
        'relevantSpecialty',
        'safetyConsideration',
        'sameAs',
        'study',
        'subjectOf',
        'targetPopulation',
        'url',
    ];
}
