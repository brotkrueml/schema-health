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
 * Systems of medical practice.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum MedicineSystem implements EnumerationInterface
{
    /**
     * A system of medicine that originated in India over thousands of years and that focuses on integrating and balancing the body, mind, and spirit.
     */
    case Ayurvedic;

    /**
     * A system of medicine focused on the relationship between the body's structure, mainly the spine, and its functioning.
     */
    case Chiropractic;

    /**
     * A system of medicine based on the principle that a disease can be cured by a substance that produces similar symptoms in healthy people.
     */
    case Homeopathic;

    /**
     * A system of medicine focused on promoting the body's innate ability to heal itself.
     */
    case Osteopathic;

    /**
     * A system of medicine based on common theoretical concepts that originated in China and evolved over thousands of years, that uses herbs, acupuncture, exercise, massage, dietary therapy, and other methods to treat a wide range of conditions.
     */
    case TraditionalChinese;

    /**
     * The conventional Western system of medicine, that aims to apply the best available evidence gained from the scientific method to clinical decision making. Also known as conventional or Western medicine.
     */
    case WesternConventional;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
