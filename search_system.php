<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=search.page.catlist
[END_COT_EXT]
==================== */

/**
 * Search in system cat. Adds `system` to form field
 *
 * @package search_system
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2016
 * @license Distributed under BSD license.
 */

defined('COT_CODE') or die('Wrong URL.');

$cat = 'system';
if (cot_auth('page', $cat, 'R'))
{
	$x = $structure['page'][$cat];
	$pages_cat_list[$cat] = $x['tpath'];
	$pag_catauth[] = $db->prep($cat);
}

