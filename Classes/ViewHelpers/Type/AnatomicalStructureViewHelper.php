<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_health" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaHealth\ViewHelpers\Type;

use Brotkrueml\Schema\Core\ViewHelpers\AbstractTypeViewHelper;

/**
 * Any part of the human body, typically a component of an anatomical system. Organs, tissues, and cells are all anatomical structures.
 */
final class AnatomicalStructureViewHelper extends AbstractTypeViewHelper
{
    protected string $type = 'AnatomicalStructure';
}
