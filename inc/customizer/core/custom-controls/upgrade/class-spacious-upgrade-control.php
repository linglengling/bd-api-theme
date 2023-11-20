<?php
/**
 * Customize Upgrade control class.
 *
 * @package spacious
 *
 * @since   1.4.6
 * @see     WP_Customize_Control
 * @access  public
 */

/**
 * Class Spacious_Customize_Heading_Control
 */
class Spacious_Upgrade_Control extends Spacious_Customize_Base_Additional_Control {

	/**
	 * Customize control type.
	 *
	 * @access public
	 * @var    string
	 */
	public $type = 'spacious-upgrade';

	/**
	 * Custom links for this control.
	 *
	 * @var array
	 */
	public $url = '';

	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @see WP_Customize_Control::to_json()
	 */
	public function to_json() {

		parent::to_json();

		$this->json['default'] = $this->setting->default;
		if ( isset( $this->default ) ) {
			$this->json['default'] = $this->default;
		}
		$this->json['url'] = esc_url( $this->url );

	}

	/**
	 * Renders the Underscore template for this control.
	 *
	 * @see    WP_Customize_Control::print_template()
	 * @access protected
	 * @return void
	 */

	protected function content_template() {
		?>
		<p class="description upgrade-description">{{{ data.description }}}</p>

		<span>
            <a href="{{{data.url}}}" class="button button-primary" target="_blank">
                {{ data.label }}
            </a>
		</span>
		<?php
	}

	/**
	 * Render content is still called, so be sure to override it with an empty function in your subclass as well.
	 */
	protected function render_content() {

	}

}