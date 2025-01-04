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
 * An enumeration that describes different types of medical procedures.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum MedicalProcedureType implements EnumerationInterface
{
    /**
     * A type of medical procedure that involves noninvasive techniques.
     */
    case NoninvasiveProcedure;

    /**
     * A type of medical procedure that involves percutaneous techniques, where access to organs or tissue is achieved via needle-puncture of the skin. For example, catheter-based procedures like stent delivery.
     */
    case PercutaneousProcedure;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
