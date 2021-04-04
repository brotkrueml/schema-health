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
 * A chemical or biologic substance, used as a medical therapy, that has a physiological effect on an organism. Here the term drug is used interchangeably with the term medicine although clinical knowledge make a clear difference between them.
 */
final class Drug extends AbstractType
{
    protected static $propertyNames = [
        'activeIngredient',
        'additionalType',
        'administrationRoute',
        'alcoholWarning',
        'alternateName',
        'availableStrength',
        'breastfeedingWarning',
        'clinicalPharmacology',
        'code',
        'description',
        'disambiguatingDescription',
        'dosageForm',
        'doseSchedule',
        'drugClass',
        'drugUnit',
        'foodWarning',
        'guideline',
        'identifier',
        'image',
        'interactingDrug',
        'isAvailableGenerically',
        'isProprietary',
        'labelDetails',
        'legalStatus',
        'mainEntityOfPage',
        'manufacturer',
        'maximumIntake',
        'mechanismOfAction',
        'medicineSystem',
        'name',
        'nonProprietaryName',
        'overdosage',
        'potentialAction',
        'pregnancyCategory',
        'pregnancyWarning',
        'prescribingInfo',
        'prescriptionStatus',
        'proprietaryName',
        'recognizingAuthority',
        'relatedDrug',
        'relevantSpecialty',
        'sameAs',
        'study',
        'subjectOf',
        'url',
        'warning',
    ];
}
