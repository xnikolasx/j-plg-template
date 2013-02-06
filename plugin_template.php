<?php

/**
 * @version		0.1
 * @package		Plugin_template
 * @author    Jookolas
 * @copyright	Copyright (c) 2013. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.plugin.plugin');
if (version_compare(JVERSION, '1.6.0', 'ge')) {
    jimport('joomla.html.parameter');
}

class plgSystemPlugin_template extends JPlugin {

    function plgSystemPlugin_template(&$subject, $params) {
        parent::__construct($subject, $params);
    }

    function onAfterInitialise() {
        $app = &JFactory::getApplication();
    }

}
