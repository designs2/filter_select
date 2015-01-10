<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package    MetaModels
 * @subpackage FilterSelect
 * @author     Christian de la Haye <service@delahaye.de>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */

use MetaModels\Filter\Setting\Events\CreateFilterSettingFactoryEvent;
use MetaModels\Filter\Setting\SelectFilterSettingTypeFactory;
use MetaModels\MetaModelsEvents;

return array
(
    MetaModelsEvents::FILTER_SETTING_FACTORY_CREATE => array(
        function (CreateFilterSettingFactoryEvent $event) {
            $event->getFactory()->addTypeFactory(new SelectFilterSettingTypeFactory());
        }
    )
);
