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
 * Design models for medical trials. Enumerated type.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum MedicalTrialDesign implements EnumerationInterface
{
    /**
     * A trial design in which neither the researcher nor the patient knows the details of the treatment the patient was randomly assigned to.
     */
    case DoubleBlindedTrial;

    /**
     * An international trial.
     */
    case InternationalTrial;

    /**
     * A trial that takes place at multiple centers.
     */
    case MultiCenterTrial;

    /**
     * A trial design in which the researcher knows the full details of the treatment, and so does the patient.
     */
    case OpenTrial;

    /**
     * A placebo-controlled trial design.
     */
    case PlaceboControlledTrial;

    /**
     * A randomized trial design.
     */
    case RandomizedTrial;

    /**
     * A trial design in which the researcher knows which treatment the patient was randomly assigned to but the patient does not.
     */
    case SingleBlindedTrial;

    /**
     * A trial that takes place at a single center.
     */
    case SingleCenterTrial;

    /**
     * A trial design in which neither the researcher, the person administering the therapy nor the patient knows the details of the treatment the patient was randomly assigned to.
     */
    case TripleBlindedTrial;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
