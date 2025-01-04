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
 * Categories of medical devices, organized by the purpose or intended use of the device.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum MedicalDevicePurpose implements EnumerationInterface
{
    /**
     * A medical device used for diagnostic purposes.
     */
    case Diagnostic;

    /**
     * A medical device used for therapeutic purposes.
     */
    case Therapeutic;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
