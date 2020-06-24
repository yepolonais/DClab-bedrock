<?php
/**
 * MslsContentTypes
 * @author Dennis Ploetner <re@lloc.de>
 * @since 0.9.8
 */

namespace lloc\Msls;

/**
 * Supported content types
 * @package Msls
 */
class MslsContentTypes extends MslsRegistryInstance {

	/**
	 * Request
	 * @var string
	 */
	protected $request;

	/**
	 * Types
	 * @var array
	 */
	protected $types = [];

	/**
	 * Factory method
	 *
	 * @codeCoverageIgnore
	 *
	 * @return MslsContentTypes
	 */
	public static function create() {
		$_request = ( new MslsContentTypes() )->get_superglobals( [ 'taxonomy' ] );

		if ( '' != $_request['taxonomy'] ) {
			return MslsTaxonomy::instance();
		}

		return MslsPostType::instance();
	}

	/**
	 * Check for post_type
	 * @return bool
	 */
	public function is_post_type() {
		return false;
	}

	/**
	 * Check for taxonomy
	 * @return bool
	 */
	public function is_taxonomy() {
		return false;
	}

	/**
	 * Check if the current user can manage this content type
	 *
	 * Returns name of the content type if the user has access or an empty
	 * string if the user can not access
	 *
	 * @return string
	 */
	public function acl_request() {
		return '';
	}

	/**
	 * Getter
	 * @return array
	 */
	public function get() {
		return (array) apply_filters('msls_supported_post_types', $this->types);
	}

	/**
	 * Gets the request if it is an allowed content type
	 * @return string
	 */
	public function get_request() {
		$types =  apply_filters('msls_supported_post_types', $this->types );

		return in_array( $this->request, $types ) ? $this->request : '';
	}

	public function get_superglobals( $arr ) {
		$options = MslsOptions::instance();
		$plugin  = new MslsPlugin( $options );

		return $plugin->get_superglobals( $arr );
	}

}
