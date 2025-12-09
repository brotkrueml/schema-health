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
 * A simple system that adds up the number of risk factors to yield a score that is associated with prognosis, e.g. CHAD score, TIMI risk score.
 */
#[Type('MedicalRiskScore')]
final class MedicalRiskScore extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'algorithm',
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
        'owner',
        'potentialAction',
        'recognizingAuthority',
        'relevantSpecialty',
        'sameAs',
        'study',
        'subjectOf',
        'url',
    ];
}
