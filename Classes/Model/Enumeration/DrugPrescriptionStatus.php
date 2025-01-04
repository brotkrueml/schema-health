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
 * Indicates whether this drug is available by prescription or over-the-counter.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum DrugPrescriptionStatus implements EnumerationInterface
{
    /**
     * The character of a medical substance, typically a medicine, of being available over the counter or not.
     */
    case OTC;

    /**
     * Available by prescription only.
     */
    case PrescriptionOnly;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
