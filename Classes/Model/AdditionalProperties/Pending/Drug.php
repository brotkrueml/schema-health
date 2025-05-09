<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_health" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaHealth\Model\AdditionalProperties\Pending;

use Brotkrueml\Schema\Core\AdditionalPropertiesInterface;

/**
 * The defined additional properties have been available as official
 * but were moved because of reasons to pending.
 * These properties are registered again to avoid
 * breaking changes.
 *
 * @internal
 * @todo Remove with schema 4.0.0
 */
final class Drug implements AdditionalPropertiesInterface
{
    public function getType(): string
    {
        return 'Drug';
    }

    public function getAdditionalProperties(): array
    {
        return [
            'depth',
            'height',
            'weight',
            'width',
        ];
    }
}
