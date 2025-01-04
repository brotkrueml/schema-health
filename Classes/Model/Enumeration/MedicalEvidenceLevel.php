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
 * Level of evidence for a medical guideline. Enumerated type.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum MedicalEvidenceLevel implements EnumerationInterface
{
    /**
     * Data derived from multiple randomized clinical trials or meta-analyses.
     */
    case EvidenceLevelA;

    /**
     * Data derived from a single randomized trial, or nonrandomized studies.
     */
    case EvidenceLevelB;

    /**
     * Only consensus opinion of experts, case studies, or standard-of-care.
     */
    case EvidenceLevelC;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
