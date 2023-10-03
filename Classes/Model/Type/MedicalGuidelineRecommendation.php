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
 * A guideline recommendation that is regarded as efficacious and where quality of the data supporting the recommendation is sound.
 */
#[Type('MedicalGuidelineRecommendation')]
final class MedicalGuidelineRecommendation extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'code',
        'description',
        'disambiguatingDescription',
        'evidenceLevel',
        'evidenceOrigin',
        'guideline',
        'guidelineDate',
        'guidelineSubject',
        'identifier',
        'image',
        'legalStatus',
        'mainEntityOfPage',
        'medicineSystem',
        'name',
        'potentialAction',
        'recognizingAuthority',
        'recommendationStrength',
        'relevantSpecialty',
        'sameAs',
        'study',
        'subjectOf',
        'url',
    ];
}
