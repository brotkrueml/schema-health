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
 * Categories of physical activity, organized by physiologic classification.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum PhysicalActivityCategory implements EnumerationInterface
{
    /**
     * Physical activity of relatively low intensity that depends primarily on the aerobic energy-generating process; during activity, the aerobic metabolism uses oxygen to adequately meet energy demands during exercise.
     */
    case AerobicActivity;

    /**
     * Physical activity that is of high-intensity which utilizes the anaerobic metabolism of the body.
     */
    case AnaerobicActivity;

    /**
     * Physical activity that is engaged to help maintain posture and balance.
     */
    case Balance;

    /**
     * Physical activity that is engaged in to improve joint and muscle flexibility.
     */
    case Flexibility;

    /**
     * Any physical activity engaged in for recreational purposes. Examples may include ballroom dancing, roller skating, canoeing, fishing, etc.
     */
    case LeisureTimeActivity;

    /**
     * Any physical activity engaged in for job-related purposes. Examples may include waiting tables, maid service, carrying a mailbag, picking fruits or vegetables, construction work, etc.
     */
    case OccupationalActivity;

    /**
     * Physical activity that is engaged in to improve muscle and bone strength. Also referred to as resistance training.
     */
    case StrengthTraining;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
