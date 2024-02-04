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
 * A patient is any person recipient of health care services.
 */
#[Type('Patient')]
final class Patient extends AbstractType
{
    protected static array $propertyNames = [
        'additionalName',
        'additionalType',
        'address',
        'affiliation',
        'alternateName',
        'alumniOf',
        'audienceType',
        'award',
        'birthDate',
        'birthPlace',
        'brand',
        'children',
        'colleague',
        'contactPoint',
        'deathDate',
        'deathPlace',
        'description',
        'diagnosis',
        'disambiguatingDescription',
        'drug',
        'duns',
        'email',
        'familyName',
        'faxNumber',
        'follows',
        'funder',
        'geographicArea',
        'givenName',
        'globalLocationNumber',
        'hasCertification',
        'hasOccupation',
        'hasOfferCatalog',
        'hasPOS',
        'healthCondition',
        'height',
        'homeLocation',
        'honorificPrefix',
        'honorificSuffix',
        'identifier',
        'image',
        'interactionStatistic',
        'isicV4',
        'knows',
        'mainEntityOfPage',
        'makesOffer',
        'memberOf',
        'naics',
        'name',
        'nationality',
        'netWorth',
        'owns',
        'parent',
        'performerIn',
        'potentialAction',
        'publishingPrinciples',
        'relatedTo',
        'requiredGender',
        'requiredMaxAge',
        'requiredMinAge',
        'sameAs',
        'seeks',
        'sibling',
        'sponsor',
        'spouse',
        'subjectOf',
        'suggestedGender',
        'suggestedMaxAge',
        'suggestedMinAge',
        'taxID',
        'telephone',
        'url',
        'vatID',
        'weight',
        'workLocation',
        'worksFor',
    ];
}
