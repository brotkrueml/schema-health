<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_health" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaHealth\Model\Type;

use Brotkrueml\Schema\Core\Model\AbstractType;

/**
 * A medical trial is a type of medical study that uses scientific process used to compare the safety and efficacy of medical therapies or medical procedures. In general, medical trials are controlled and subjects are allocated at random to the different treatment and/or control groups.
 */
final class MedicalTrial extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'alternateName',
        'code',
        'description',
        'disambiguatingDescription',
        'guideline',
        'healthCondition',
        'identifier',
        'image',
        'legalStatus',
        'mainEntityOfPage',
        'medicineSystem',
        'name',
        'potentialAction',
        'recognizingAuthority',
        'relevantSpecialty',
        'sameAs',
        'sponsor',
        'status',
        'study',
        'studyLocation',
        'studySubject',
        'subjectOf',
        'trialDesign',
        'url',
    ];
}
