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
 * Any complaint sensed and expressed by the patient (therefore defined as subjective)  like stomachache, lower-back pain, or fatigue.
 */
#[Type('MedicalSymptom')]
final class MedicalSymptom extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'associatedAnatomy',
        'code',
        'description',
        'differentialDiagnosis',
        'disambiguatingDescription',
        'drug',
        'epidemiology',
        'expectedPrognosis',
        'guideline',
        'identifier',
        'image',
        'legalStatus',
        'mainEntityOfPage',
        'medicineSystem',
        'name',
        'naturalProgression',
        'pathophysiology',
        'possibleComplication',
        'possibleTreatment',
        'potentialAction',
        'primaryPrevention',
        'recognizingAuthority',
        'relevantSpecialty',
        'riskFactor',
        'sameAs',
        'secondaryPrevention',
        'signOrSymptom',
        'stage',
        'status',
        'study',
        'subjectOf',
        'typicalTest',
        'url',
    ];
}
