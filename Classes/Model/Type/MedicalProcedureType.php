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
 * An enumeration that describes different types of medical procedures.
 * @deprecated This type represents an enumeration, use the specific MedicalProcedureType enum instead.
 */
#[Type('MedicalProcedureType')]
final class MedicalProcedureType extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'description',
        'disambiguatingDescription',
        'identifier',
        'image',
        'mainEntityOfPage',
        'name',
        'potentialAction',
        'sameAs',
        'subjectOf',
        'url',
    ];
}
