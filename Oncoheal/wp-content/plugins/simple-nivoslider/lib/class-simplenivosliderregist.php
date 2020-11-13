<?php
/**
 * Simple NivoSlider
 *
 * @package    Simple NivoSlider
 * @subpackage SimpleNivoSliderRegist registered in the database
/*
	Copyright (c) 2014- Katsushi Kawamori (email : dodesyoswift312@gmail.com)
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; version 2 of the License.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

$simplenivosliderregist = new SimpleNivoSliderRegist();

/** ==================================================
 * registered in the database
 */
class SimpleNivoSliderRegist {

	/** ==================================================
	 * Construct
	 *
	 * @since 5.04
	 */
	public function __construct() {

		add_action( 'admin_init', array( $this, 'register_settings' ) );

	}

	/** ==================================================
	 * Settings register
	 *
	 * @since 1.0
	 */
	public function register_settings() {

		if ( ! get_option( 'simplenivoslider_settings' ) ) {
			$settings_tbl = array(
				'theme' => 'default',
				'effect' => 'random',
				'slices' => 15,
				'boxCols' => 8,
				'boxRows' => 4,
				'animSpeed' => 500,
				'pauseTime' => 3000,
				'startSlide' => 0,
				'directionNav' => 'true',
				'controlNav' => 'true',
				'controlNavThumbs' => null,
				'thumbswidth' => 40,
				'pauseOnHover' => 'true',
				'manualAdvance' => null,
				'prevText' => 'Prev',
				'nextText' => 'Next',
				'randomStart' => null,
			);
			update_option( 'simplenivoslider_settings', $settings_tbl );
		}

	}

}


