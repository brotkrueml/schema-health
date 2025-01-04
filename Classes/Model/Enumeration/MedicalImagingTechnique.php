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
 * Any medical imaging modality typically used for diagnostic purposes. Enumerated type.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum MedicalImagingTechnique implements EnumerationInterface
{
    /**
     * X-ray computed tomography imaging.
     */
    case CT;

    /**
     * Magnetic resonance imaging.
     */
    case MRI;

    /**
     * Positron emission tomography imaging.
     */
    case PET;

    /**
     * Ultrasound imaging.
     */
    case Ultrasound;

    /**
     * X-ray imaging.
     */
    case XRay;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
