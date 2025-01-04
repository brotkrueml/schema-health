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
 * The status of a medical study. Enumerated type.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum MedicalStudyStatus implements EnumerationInterface
{
    /**
     * Active, but not recruiting new participants.
     */
    case ActiveNotRecruiting;

    /**
     * Completed.
     */
    case Completed;

    /**
     * Enrolling participants by invitation only.
     */
    case EnrollingByInvitation;

    /**
     * Not yet recruiting.
     */
    case NotYetRecruiting;

    /**
     * Recruiting participants.
     */
    case Recruiting;

    /**
     * Results are available.
     */
    case ResultsAvailable;

    /**
     * Results are not available.
     */
    case ResultsNotAvailable;

    /**
     * Suspended.
     */
    case Suspended;

    /**
     * Terminated.
     */
    case Terminated;

    /**
     * Withdrawn.
     */
    case Withdrawn;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
