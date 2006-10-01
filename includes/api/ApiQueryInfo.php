<?php


/*
 * Created on Sep 25, 2006
 *
 * API for MediaWiki 1.8+
 *
 * Copyright (C) 2006 Yuri Astrakhan <FirstnameLastname@gmail.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

if (!defined('MEDIAWIKI')) {
	// Eclipse helper - will be ignored in production
	require_once ('ApiQueryBase.php');
}

class ApiQueryInfo extends ApiQueryBase {

	public function __construct($query, $moduleName, $generator = false) {
		parent :: __construct($query, $moduleName, $generator);
	}

	public function execute() {

	}

	protected function getAllowedParams() {
		return array (
			'param' => 'default',
			'enumparam' => array (
				ApiBase::PARAM_DFLT => 'default',
				ApiBase::PARAM_ISMULTI => false,
				ApiBase::PARAM_TYPE => array (
					'a',
					'b'
				)
			)
		);
	}

	protected function getParamDescription() {
		return array ();
	}

	protected function getDescription() {
		return 'module a';
	}

	protected function getExamples() {
		return array (
			'http://...'
		);
	}
}
?>