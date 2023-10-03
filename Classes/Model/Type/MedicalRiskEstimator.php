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
 * Any rule set or interactive tool for estimating the risk of developing a complication or condition.
 */
#[Type('MedicalRiskEstimator')]
final class MedicalRiskEstimator extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'code',
        'description',
        'disambiguatingDescription',
        'estimatesRiskOf',
        'guideline',
        'identifier',
        'image',
        'includedRiskFactor',
        'legalStatus',
        'mainEntityOfPage',
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
