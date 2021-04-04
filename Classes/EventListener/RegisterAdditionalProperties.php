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
use Brotkrueml\Schema\Model\Type;
use Brotkrueml\SchemaPending\Model\Type as PendingType;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

final class RegisterAdditionalProperties
{
    public function __invoke(RegisterAdditionalTypePropertiesEvent $event): void
    {
        if ($event->getType() === Type\Dentist::class) {
            $event->registerAdditionalProperty('medicalSpecialty');
        }
        if ($event->getType() === Type\ExerciseAction::class) {
            $event->registerAdditionalProperty('diet');
            $event->registerAdditionalProperty('exercisePlan');
            $event->registerAdditionalProperty('exerciseRelatedDiet');
            $event->registerAdditionalProperty('exerciseType');
        }
        if ($event->getType() === Type\Hospital::class) {
            $event->registerAdditionalProperty('availableService');
            $event->registerAdditionalProperty('medicalSpecialty');
        }
        if ($event->getType() === Type\MedicalOrganization::class) {
            $event->registerAdditionalProperty('medicalSpecialty');
        }
        if ($event->getType() === Type\ParentAudience::class) {
            $event->registerAdditionalProperty('healthCondition');
        }
        if ($event->getType() === Type\PeopleAudience::class) {
            $event->registerAdditionalProperty('healthCondition');
        }
        if ($event->getType() === Type\Pharmacy::class) {
            $event->registerAdditionalProperty('medicalSpecialty');
        }
        if ($event->getType() === Type\Physician::class) {
            $event->registerAdditionalProperty('availableService');
            $event->registerAdditionalProperty('hospitalAffiliation');
            $event->registerAdditionalProperty('medicalSpecialty');
        }
        if (ExtensionManagementUtility::isLoaded('schema_pending')) {
            if ($event->getType() === PendingType\CovidTestingFacility::class) {
                $event->registerAdditionalProperty('availableService');
                $event->registerAdditionalProperty('medicalSpecialty');
            }
        }
    }
}
