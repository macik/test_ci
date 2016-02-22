<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=search.page.query
[END_COT_EXT]
==================== */

/**
 * Search in system cat. Fix query to enable search in `system`
 *
 * @package search_system
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2016
 * @license Distributed under BSD license.
 * Made with «Extension Template» (https://github.com/macik/cot-extension_template)
 */

defined('COT_CODE') or die('Wrong URL.');

unset($where_and['notcat']);
$where = implode(' AND ', $where_and);
