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
 * An infectious disease is a clinically evident human disease resulting from the presence of pathogenic microbial agents, like pathogenic viruses, pathogenic bacteria, fungi, protozoa, multicellular parasites, and prions. To be considered an infectious disease, such pathogens are known to be able to cause this disease.
 */
#[Type('InfectiousDisease')]
final class InfectiousDisease extends AbstractType
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
        'image',
        'infectiousAgent',
        'infectiousAgentClass',
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
        'transmissionMethod',
        'typicalTest',
        'url',
    ];
}
