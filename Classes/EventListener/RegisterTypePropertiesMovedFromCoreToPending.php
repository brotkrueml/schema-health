<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_health" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaHealth\EventListener;

use Brotkrueml\Schema\Event\RegisterAdditionalTypePropertiesEvent;
use Brotkrueml\SchemaHealth\Model\Type;

/**
 * The following properties has be available in core
 * but were moved because of reasons to pending again.
 * These properties are registered again to avoid
 * breaking changes.
 */
final class RegisterTypePropertiesMovedFromCoreToPending
{
    /**
     * @var array<class-string>
     */
    private $providerTypes = [
        Type\Diet::class,
        Type\ExercisePlan::class,
        Type\MedicalScholarlyArticle::class,
        Type\MedicalWebPage::class,
    ];

    public function __invoke(RegisterAdditionalTypePropertiesEvent $event): void
    {
        $type = $event->getType();

        if (\in_array($type, $this->providerTypes, true)) {
            // from official to pending in schema version 14.0
            $event->registerAdditionalProperty('provider');
        }
    }
}
