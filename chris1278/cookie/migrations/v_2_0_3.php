<?php
/**
 *
 * Opt-In Cookie Manager. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, Chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\cookie\migrations;

class V_2_0_3 extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\chris1278\cookie\migrations\install_spotify_bbcodes'];
	}

	public function update_data()
	{
		return [
			['config.add',['google_webfont_switch', 0]],
			['config.add',['google_adsense_switch', 0]],
			['config.add',['google_adsense_id', '']],
		/*	['config.add',['add_goal_switch', 0]],
			['config.add',['add_goal_id', '']],*/
		];
	}
}
