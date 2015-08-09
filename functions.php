<?php
  function theme_styles () {
    // Open sans bold
    wp_enqueue_style('opensans_font', 'http://fonts.googleapis.com/css?family=Open+Sans:400,800,700' );
    // Bootstrap core CSS
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    // fonts awesome
    wp_enqueue_style('fontsawesome_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
    // page styles
    wp_enqueue_style('ecoficiencia_css', get_template_directory_uri() . '/style.css' );
  }
  add_action('wp_enqueue_scripts', 'theme_styles');

  function theme_js () {

    global $wp_scripts;

    wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', ''. false);
    wp_register_script('respondjs', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', ''. false);

    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20150726', true );

  }
  add_action( 'wp_enqueue_scripts', 'theme_js' );

  function register_theme_menus() {
    register_nav_menus(
      array(
        'header-menu' => __('Header Menu')
      )
    );
  }
  add_action('init', 'register_theme_menus');

  require_once dirname( __FILE__ ) . '/menu-item-custom-fields/menu-item-custom-fields.php';
  //require_once dirname( __FILE__ ) . '/inc/custom-walker.php';
  require_once dirname( __FILE__ ) . '/inc/wp_bootstrap_navwalker.php';

  // custom fields for menu Nav
  class Menu_Item_Custom_Fields_Example {

  	/**
  	 * Holds our custom fields
  	 *
  	 * @var    array
  	 * @access protected
  	 * @since  Menu_Item_Custom_Fields_Example 0.2.0
  	 */
  	protected static $fields = array();


  	/**
  	 * Initialize plugin
  	 */
  	public static function init() {
  		add_action( 'wp_nav_menu_item_custom_fields', array( __CLASS__, '_fields' ), 10, 4 );
  		add_action( 'wp_update_nav_menu_item', array( __CLASS__, '_save' ), 10, 3 );
  		add_filter( 'manage_nav-menus_columns', array( __CLASS__, '_columns' ), 99 );

  		self::$fields = array(
  			'field-description' => __( 'Description', 'menu-item-custom-fields-example' ),
  			//'field-02' => __( 'Custom Field #2', 'menu-item-custom-fields-example' ),
  		);
  	}


  	/**
  	 * Save custom field value
  	 *
  	 * @wp_hook action wp_update_nav_menu_item
  	 *
  	 * @param int   $menu_id         Nav menu ID
  	 * @param int   $menu_item_db_id Menu item ID
  	 * @param array $menu_item_args  Menu item data
  	 */
  	public static function _save( $menu_id, $menu_item_db_id, $menu_item_args ) {
  		if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
  			return;
  		}

  		check_admin_referer( 'update-nav_menu', 'update-nav-menu-nonce' );

  		foreach ( self::$fields as $_key => $label ) {
  			$key = sprintf( '_menu_item_%s', $_key );

  			// Sanitize
  			if ( ! empty( $_POST[ $key ][ $menu_item_db_id ] ) ) {
  				// Do some checks here...
  				$value = $_POST[ $key ][ $menu_item_db_id ];
  			}
  			else {
  				$value = null;
  			}

  			// Update
  			if ( ! is_null( $value ) ) {
  				update_post_meta( $menu_item_db_id, $key, $value );
  			}
  			else {
  				delete_post_meta( $menu_item_db_id, $key );
  			}
  		}
  	}


  	/**
  	 * Print field
  	 *
  	 * @param object $item  Menu item data object.
  	 * @param int    $depth  Depth of menu item. Used for padding.
  	 * @param array  $args  Menu item args.
  	 * @param int    $id    Nav menu ID.
  	 *
  	 * @return string Form fields
  	 */
  	public static function _fields( $id, $item, $depth, $args ) {
  		foreach ( self::$fields as $_key => $label ) :
  			$key   = sprintf( '_menu_item_%s', $_key );
  			$id    = sprintf( 'edit-%s-%s', $key, $item->ID );
  			$name  = sprintf( '%s[%s]', $key, $item->ID );
  			$value = get_post_meta( $item->ID, $key, true );
  			$class = sprintf( 'field-%s', $_key );
  			?>
  				<p class="description description-wide <?php echo esc_attr( $class ) ?>">
  					<?php printf(
  						'<label for="%1$s">%2$s<br /><input type="text" id="%1$s" class="widefat %1$s" name="%3$s" value="%4$s" /></label>',
  						esc_attr( $id ),
  						esc_html( $label ),
  						esc_attr( $name ),
  						esc_attr( $value )
  					) ?>
  				</p>
  			<?php
  		endforeach;
  	}


  	/**
  	 * Add our fields to the screen options toggle
  	 *
  	 * @param array $columns Menu item columns
  	 * @return array
  	 */
  	public static function _columns( $columns ) {
  		$columns = array_merge( $columns, self::$fields );

  		return $columns;
  	}
  }
  Menu_Item_Custom_Fields_Example::init();
?>
