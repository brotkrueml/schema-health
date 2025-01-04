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
 * Enumerated categories of medical drug costs.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum DrugCostCategory implements EnumerationInterface
{
    /**
     * The drug's cost represents the maximum reimbursement paid by an insurer for the drug.
     */
    case ReimbursementCap;

    /**
     * The drug's cost represents the retail cost of the drug.
     */
    case Retail;

    /**
     * The drug's cost represents the wholesale acquisition cost of the drug.
     */
    case Wholesale;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
