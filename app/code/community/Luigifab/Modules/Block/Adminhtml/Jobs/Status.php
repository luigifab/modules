<?php
/**
 * Created L/21/07/2014
 * Updated D/31/08/2014
 * Version 3
 *
 * Copyright 2012-2015 | Fabrice Creuzot (luigifab) <code~luigifab~info>
 * https://redmine.luigifab.info/projects/magento/wiki/modules
 *
 * This program is free software, you can redistribute it or modify
 * it under the terms of the GNU General Public License (GPL) as published
 * by the free software foundation, either version 2 of the license, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but without any warranty, without even the implied warranty of
 * merchantability or fitness for a particular purpose. See the
 * GNU General Public License (GPL) for more details.
 */

class Luigifab_Modules_Block_Adminhtml_Jobs_Status extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Options {

	public function render(Varien_Object $row) {
		return '<span class="grid-'.$row->getData('status').'">'.parent::render($row).'</span>';
	}
}