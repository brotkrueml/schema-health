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
 * A type of physical examination of a patient performed by a physician.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum PhysicalExam implements EnumerationInterface
{
    /**
     * Abdomen clinical examination.
     */
    case Abdomen;

    /**
     * Appearance assessment with clinical examination.
     */
    case Appearance;

    /**
     * Cardiovascular system assessment with clinical examination.
     */
    case CardiovascularExam;

    /**
     * Ear function assessment with clinical examination.
     */
    case Ear;

    /**
     * Eye or ophthalmological function assessment with clinical examination.
     */
    case Eye;

    /**
     * Genitourinary system function assessment with clinical examination.
     */
    case Genitourinary;

    /**
     * Head assessment with clinical examination.
     */
    case Head;

    /**
     * Lung and respiratory system clinical examination.
     */
    case Lung;

    /**
     * Musculoskeletal system clinical examination.
     */
    case MusculoskeletalExam;

    /**
     * Neck assessment with clinical examination.
     */
    case Neck;

    /**
     * Neurological system clinical examination.
     */
    case Neuro;

    /**
     * Nose function assessment with clinical examination.
     */
    case Nose;

    /**
     * Skin assessment with clinical examination.
     */
    case Skin;

    /**
     * Throat assessment with  clinical examination.
     */
    case Throat;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
