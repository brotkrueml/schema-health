<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_health" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaHealth\Model\AdditionalProperties;

use Brotkrueml\Schema\Core\AdditionalPropertiesInterface;

final class IndividualPhysician implements AdditionalPropertiesInterface
{
    public function getType(): string
    {
        return 'IndividualPhysician';
    }

    public function getAdditionalProperties(): array
    {
        return [
            'availableService',
            'hospitalAffiliation',
            'medicalSpecialty',
        ];
    }
}
