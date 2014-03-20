<?php

/**
 * This file is part of the Kdyby (http://www.kdyby.org)
 *
 * Copyright (c) 2008 Filip Procházka (filip@prochazka.su)
 *
 * For the full copyright and license information, please view the file license.txt that was distributed with this source code.
 */

namespace Kdyby\Translation;

/**
 * @author Josef Kříž <pepakriz@gmail.com>
 */
class Package extends \Venne\Packages\Package
{

	public function getVersion()
	{
		return '1.1.2';
	}


	public function getConfiguration()
	{
		return array(
			'extensions' => array(
				'translation' => 'Kdyby\Translation\DI\TranslationExtension',
			),
		);
	}

}
