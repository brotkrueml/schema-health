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
 * A facility, often associated with a hospital or medical school, that is devoted to the specific diagnosis and/or healthcare. Previously limited to outpatients but with evolution it may be open to inpatients as well.
 */
#[Type('MedicalClinic')]
final class MedicalClinic extends AbstractType
{
    protected static array $propertyNames = [
        'acceptedPaymentMethod',
        'additionalProperty',
        'additionalType',
        'address',
        'aggregateRating',
        'alternateName',
        'alumni',
        'amenityFeature',
        'areaServed',
        'availableService',
        'award',
        'branchCode',
        'brand',
        'companyRegistration',
        'contactPoint',
        'containedInPlace',
        'containsPlace',
        'currenciesAccepted',
        'department',
        'description',
        'disambiguatingDescription',
        'dissolutionDate',
        'duns',
        'email',
        'employee',
        'event',
        'faxNumber',
        'founder',
        'foundingDate',
        'foundingLocation',
        'funder',
        'geo',
        'geoContains',
        'geoCoveredBy',
        'geoCovers',
        'geoCrosses',
        'geoDisjoint',
        'geoEquals',
        'geoIntersects',
        'geoOverlaps',
        'geoTouches',
        'geoWithin',
        'globalLocationNumber',
        'hasCertification',
        'hasMap',
        'hasMemberProgram',
        'hasOfferCatalog',
        'hasPOS',
        'identifier',
        'image',
        'interactionStatistic',
        'isAccessibleForFree',
        'isicV4',
        'keywords',
        'latitude',
        'legalAddress',
        'legalName',
        'legalRepresentative',
        'leiCode',
        'location',
        'logo',
        'longitude',
        'mainEntityOfPage',
        'makesOffer',
        'maximumAttendeeCapacity',
        'medicalSpecialty',
        'member',
        'memberOf',
        'naics',
        'name',
        'numberOfEmployees',
        'openingHours',
        'openingHoursSpecification',
        'owns',
        'parentOrganization',
        'paymentAccepted',
        'photo',
        'potentialAction',
        'priceRange',
        'publicAccess',
        'publishingPrinciples',
        'review',
        'sameAs',
        'seeks',
        'skills',
        'slogan',
        'smokingAllowed',
        'specialOpeningHoursSpecification',
        'sponsor',
        'subOrganization',
        'subjectOf',
        'taxID',
        'telephone',
        'url',
        'vatID',
    ];
}
