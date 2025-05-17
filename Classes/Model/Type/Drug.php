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
 * A chemical or biologic substance, used as a medical therapy, that has a physiological effect on an organism. Here the term drug is used interchangeably with the term medicine although clinical knowledge makes a clear difference between them.
 */
#[Type('Drug')]
final class Drug extends AbstractType
{
    protected static array $propertyNames = [
        'activeIngredient',
        'additionalProperty',
        'additionalType',
        'administrationRoute',
        'aggregateRating',
        'alcoholWarning',
        'alternateName',
        'audience',
        'availableStrength',
        'award',
        'brand',
        'breastfeedingWarning',
        'category',
        'clinicalPharmacology',
        'code',
        'color',
        'countryOfOrigin',
        'depth',
        'description',
        'disambiguatingDescription',
        'dosageForm',
        'doseSchedule',
        'drugClass',
        'drugUnit',
        'foodWarning',
        'gtin12',
        'gtin13',
        'gtin14',
        'gtin8',
        'guideline',
        'hasCertification',
        'height',
        'identifier',
        'image',
        'interactingDrug',
        'isAccessoryOrSparePartFor',
        'isAvailableGenerically',
        'isConsumableFor',
        'isFamilyFriendly',
        'isProprietary',
        'isRelatedTo',
        'isSimilarTo',
        'isVariantOf',
        'itemCondition',
        'keywords',
        'labelDetails',
        'legalStatus',
        'logo',
        'mainEntityOfPage',
        'manufacturer',
        'material',
        'maximumIntake',
        'mechanismOfAction',
        'medicineSystem',
        'model',
        'mpn',
        'name',
        'nonProprietaryName',
        'offers',
        'overdosage',
        'potentialAction',
        'pregnancyCategory',
        'pregnancyWarning',
        'prescribingInfo',
        'prescriptionStatus',
        'productID',
        'productionDate',
        'proprietaryName',
        'purchaseDate',
        'recognizingAuthority',
        'relatedDrug',
        'releaseDate',
        'relevantSpecialty',
        'review',
        'sameAs',
        'sku',
        'slogan',
        'study',
        'subjectOf',
        'url',
        'warning',
        'weight',
        'width',
    ];
}
