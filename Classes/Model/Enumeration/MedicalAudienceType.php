<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_health" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaHealth\Model\Enumeration;

use Brotkrueml\Schema\Core\Model\EnumerationInterface;

/**
 * Target audiences types for medical web pages. Enumerated type.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum MedicalAudienceType implements EnumerationInterface
{
    /**
     * Medical clinicians, including practicing physicians and other medical professionals involved in clinical practice.
     */
    case Clinician;

    /**
     * Medical researchers.
     */
    case MedicalResearcher;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
