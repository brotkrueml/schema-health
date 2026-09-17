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
 * A product taken by mouth that contains a dietary ingredient intended to supplement the diet. Dietary ingredients may include vitamins, minerals, herbs or other botanicals, amino acids, and substances such as enzymes, organ tissues, glandulars and metabolites.
 */
#[Type('DietarySupplement')]
final class DietarySupplement extends AbstractType
{
    protected static array $propertyNames = [
        'activeIngredient',
        'additionalProperty',
        'additionalType',
        'aggregateRating',
        'alternateName',
        'audience',
        'award',
        'brand',
        'category',
        'code',
        'color',
        'countryOfAssembly',
        'countryOfLastProcessing',
        'countryOfOrigin',
        'depth',
        'description',
        'disambiguatingDescription',
        'funding',
        'gtin12',
        'gtin13',
        'gtin14',
        'gtin8',
        'guideline',
        'hasCertification',
        'hasEnergyConsumptionDetails',
        'hasGS1DigitalLink',
        'hasMeasurement',
        'hasMerchantReturnPolicy',
        'height',
        'identifier',
        'image',
        'inProductGroupWithID',
        'isAccessoryOrSparePartFor',
        'isConsumableFor',
        'isFamilyFriendly',
        'isProprietary',
        'isRelatedTo',
        'isSimilarTo',
        'isVariantOf',
        'itemCondition',
        'keywords',
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
        'negativeNotes',
        'nonProprietaryName',
        'nsn',
        'offers',
        'owner',
        'pattern',
        'positiveNotes',
        'potentialAction',
        'productID',
        'productionDate',
        'proprietaryName',
        'purchaseDate',
        'recognizingAuthority',
        'recommendedIntake',
        'releaseDate',
        'relevantSpecialty',
        'review',
        'safetyConsideration',
        'sameAs',
        'size',
        'sku',
        'slogan',
        'study',
        'subjectOf',
        'targetPopulation',
        'url',
        'weight',
        'width',
    ];
}
