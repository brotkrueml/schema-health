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
 * Any physical manifestation of a person's medical condition discoverable by objective diagnostic tests or physical examination.
 */
#[Type('MedicalSign')]
final class MedicalSign extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'associatedAnatomy',
        'cause',
        'code',
        'description',
        'differentialDiagnosis',
        'disambiguatingDescription',
        'drug',
        'epidemiology',
        'expectedPrognosis',
        'guideline',
        'identifier',
        'identifyingExam',
        'identifyingTest',
        'image',
        'legalStatus',
        'mainEntityOfPage',
        'medicineSystem',
        'name',
        'naturalProgression',
        'owner',
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
