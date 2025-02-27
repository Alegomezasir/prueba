<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Hashbar_Countdown{

	/**
     * [$_instance]
     * @var null
     */
    private static $_instance = null;

    /**
     * [instance] Initializes a singleton instance
     * @return [Actions]
     */
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
	 * The Constructor.
	 */
	public function __construct() {
		add_action( 'init', [ $this, 'init' ] );
	}

	public function init(){
		// Return early if this function does not exist.
		if ( ! function_exists( 'register_block_type' ) ) {
			return;
		}

		// Load attributes from block.json.
		ob_start();
		include HASHBAR_BLOCK_PATH . '/src/block/hashbar-countdown/block.json';
		$metadata = json_decode( ob_get_clean(), true );

		register_block_type($metadata['name'],
			array(
				'attributes'  	  => $metadata['attributes'],
				'render_callback' => [ $this, 'render_content' ],
			)
		);

	}

	public function render_content($attr){
		$block_id = get_the_id();
		$attr['countdown_timr_box_width'] = (string)$attr['countdown_timr_box_width'];
		$attr['countdown_box_height']     = $attr['countdown_box_height'] > 0 ? (string)$attr['countdown_box_height'] : "";
		$attr['countdown_box_width'] 	  = $attr['countdown_box_width'] > 0 ? (string)$attr['countdown_box_width']  : "";
		ob_start();
		echo '<div id="hthb-countdown-block-'.esc_attr($block_id).'" class="hthb-countdown">';
			echo hashbar_do_shortcode('hashbar_countdown',$attr); // phpcs:ignore
		echo '</div>';
		?>
			<style type="text/css">
				#hthb-countdown-block-<?php echo esc_attr($block_id); ?>.hthb-countdown{
					text-align: <?php echo esc_attr($attr['countDownPosition']); ?>;
				}
				#hthb-countdown-block-<?php echo esc_attr($block_id); ?>.hthb-countdown .hthb-single-countdown{
					border: <?php echo esc_attr($attr['countdown_timr_border_width']);?>px <?php echo esc_attr($attr['countdown_timr_border']);?>  <?php echo esc_attr($attr['countdown_timr_border_color']);?>;
					border-radius: <?php echo esc_attr($attr['timerBorderRadius']['top']);?><?php echo esc_attr($attr['timerBorderRadius']['unit']);?> <?php echo esc_attr($attr['timerBorderRadius']['right']);?><?php echo esc_attr($attr['timerBorderRadius']['unit']);?> <?php echo esc_attr($attr['timerBorderRadius']['bottom']);?><?php echo esc_attr($attr['timerBorderRadius']['unit']);?> <?php echo esc_attr($attr['timerBorderRadius']['left']);?><?php echo esc_attr($attr['timerBorderRadius']['unit']);?>;
					padding: <?php echo esc_attr($attr['timerPadding']['top']);?><?php echo esc_attr($attr['timerPadding']['unit']);?> <?php echo esc_attr($attr['timerPadding']['right']);?><?php echo esc_attr($attr['timerPadding']['unit']);?> <?php echo esc_attr($attr['timerPadding']['bottom']);?><?php echo esc_attr($attr['timerPadding']['unit']);?> <?php echo esc_attr($attr['timerPadding']['left']);?><?php echo esc_attr($attr['timerPadding']['unit']);?>;
				}
				#hthb-countdown-block-<?php echo esc_attr($block_id); ?>.hthb-countdown .hthb-single-countdown__time{
					border: <?php echo esc_attr($attr['countdown_number_border_width']);?>px <?php echo esc_attr($attr['countdown_number_border']);?>  <?php echo esc_attr($attr['countdown_number_border_color']);?>;
					font-size: <?php echo esc_attr($attr['countdown_timr_font_size']); ?>;
					border-radius: <?php echo esc_attr($attr['numberBorderRadius']['top']);?><?php echo esc_attr($attr['numberBorderRadius']['unit']);?> <?php echo esc_attr($attr['numberBorderRadius']['right']);?><?php echo esc_attr($attr['numberBorderRadius']['unit']);?> <?php echo esc_attr($attr['numberBorderRadius']['bottom']);?><?php echo esc_attr($attr['numberBorderRadius']['unit']);?> <?php echo esc_attr($attr['numberBorderRadius']['left']);?><?php echo esc_attr($attr['numberBorderRadius']['unit']);?>;
					padding: <?php echo esc_attr($attr['numberPadding']['top']);?><?php echo esc_attr($attr['numberPadding']['unit']);?> <?php echo esc_attr($attr['numberPadding']['right']);?><?php echo esc_attr($attr['numberPadding']['unit']);?> <?php echo esc_attr($attr['numberPadding']['bottom']);?><?php echo esc_attr($attr['numberPadding']['unit']);?> <?php echo esc_attr($attr['numberPadding']['left']);?><?php echo esc_attr($attr['numberPadding']['unit']);?>;
				}
				#hthb-countdown-block-<?php echo esc_attr($block_id); ?>.hthb-countdown .hthb-single-countdown__text{
					border: <?php echo esc_attr($attr['countdown_label_border_width']);?>px <?php echo esc_attr($attr['countdown_label_border']);?>  <?php echo esc_attr($attr['countdown_label_border_color']);?>;
					font-size: <?php echo esc_attr($attr['countdownLabelFontSize']); ?>;
					border-radius: <?php echo esc_attr($attr['labelBorderRadius']['top']);?><?php echo esc_attr($attr['labelBorderRadius']['unit']);?> <?php echo esc_attr($attr['labelBorderRadius']['right']);?><?php echo esc_attr($attr['labelBorderRadius']['unit']);?> <?php echo esc_attr($attr['labelBorderRadius']['bottom']);?><?php echo esc_attr($attr['labelBorderRadius']['unit']);?> <?php echo esc_attr($attr['labelBorderRadius']['left']);?><?php echo esc_attr($attr['labelBorderRadius']['unit']);?>;
					padding: <?php echo esc_attr($attr['labelPadding']['top']);?><?php echo esc_attr($attr['labelPadding']['unit']);?> <?php echo esc_attr($attr['labelPadding']['right']);?><?php echo esc_attr($attr['labelPadding']['unit']);?> <?php echo esc_attr($attr['labelPadding']['bottom']);?><?php echo esc_attr($attr['labelPadding']['unit']);?> <?php echo esc_attr($attr['labelPadding']['left']);?><?php echo esc_attr($attr['labelPadding']['unit']);?>;
				}
			</style>
		<?php
		return ob_get_clean();
	}

}

Hashbar_Countdown::instance();