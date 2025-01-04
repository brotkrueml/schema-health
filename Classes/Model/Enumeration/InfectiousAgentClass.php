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
 * Classes of agents or pathogens that transmit infectious diseases. Enumerated type.
 * @experimental This enum is considered experimental and may change at any time until it is declared stable.
 */
enum InfectiousAgentClass implements EnumerationInterface
{
    /**
     * Pathogenic bacteria that cause bacterial infection.
     */
    case Bacteria;

    /**
     * Pathogenic fungus.
     */
    case Fungus;

    /**
     * Multicellular parasite that causes an infection.
     */
    case MulticellularParasite;

    /**
     * A prion is an infectious agent composed of protein in a misfolded form.
     */
    case Prion;

    /**
     * Single-celled organism that causes an infection.
     */
    case Protozoa;

    /**
     * Pathogenic virus that causes viral infection.
     */
    case Virus;

    public function canonical(): string
    {
        return 'https://schema.org/' . $this->name;
    }
}
