<?php
/**
 * MslsPostType
 * @author Dennis Ploetner <re@lloc.de>
 * @since 0.9.8
 */

namespace lloc\Msls;

/**
 * Content types: Post types (Pages, Posts, ...)
 * @package Msls
 */
class MslsPostType extends MslsContentTypes {

	/**
	 * Constructor
	 * @uses get_post_types
	 */
	public function __construct() {
		$this->types = array_merge(
			[ 'post', 'page' ], // we don't need attachment, revision or nav_menu_item here
			get_post_types( [ 'public' => true, '_builtin' => false ], 'names', 'and' )
		);

		$_request = $this->get_superglobals( [ 'post_type' ] );
		if ( '' != $_request['post_type'] ) {
			$this->request = esc_attr( $_request['post_type'] );
		}
		else {
			$this->request = get_post_type();
			if ( ! $this->request ) {
				$this->request = 'post';
			}
		}
	}

	/**
	 * Check for post_type
	 * @return bool
	 */
	function is_post_type() {
		return true;
	}

}
