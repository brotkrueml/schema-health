<?php
defined('TYPO3_MODE') or die();

(function() {
    if (!(new Brotkrueml\Schema\Compatibility\Compatibility)->isPsr14EventDispatcherAvailable()) {
        $signalSlotDispatcher = TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
            TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class
        );
        $signalSlotDispatcher->connect(
            Brotkrueml\Schema\Core\Model\AbstractType::class,
            'registerAdditionalTypeProperties',
            Brotkrueml\SchemaHealth\EventListener\RegisterAdditionalProperties::class,
            '__invoke'
        );
    }

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['schema'][] = 'Brotkrueml\\SchemaHealth\\ViewHelpers';
})();
