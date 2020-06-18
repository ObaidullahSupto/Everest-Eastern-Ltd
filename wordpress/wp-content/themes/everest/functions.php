<?php
	/*Created For Additional Function Handling*/
	function everest_theme_support()
	{
		add_theme_support('title-tag');//Dynamic title
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(array('primary_menu'=>'Primary Menu'));//Menu Settings
		add_image_size( 'protfolio-post-thumbnail', 250, 250, true );//set_post_thumbnail_size( 250, 250, true );
	}
	add_action('after_setup_theme','everest_theme_support');

  function everest_style(){

  	wp_enqueue_style('google1','//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
  	wp_enqueue_style('google2','//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i|Dosis:300,400,500,600,700');
  	wp_enqueue_style('google3','//fonts.googleapis.com/css?family=Poppins:400,500,700%7CQuattrocento+Sans:400,700');
  	wp_enqueue_style('google4','//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  	wp_enqueue_style('owlcarousel',get_template_directory_uri().'/assets/owlcarousel/css/owl.carousel.css');
  	wp_enqueue_style('theme',get_template_directory_uri().'/assets/owlcarousel/css/owl.theme.css');
  	wp_enqueue_style('prettyPhoto',get_template_directory_uri().'/assets/css/prettyPhoto.css');
  	wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.css');
  	wp_enqueue_style('style',get_template_directory_uri().'/assets/css/main-style.css');
  	wp_enqueue_style('slide',get_template_directory_uri().'/assets/css/slide.css');
  	wp_enqueue_style('portfolio',get_template_directory_uri().'/assets/css/portfolio.css');
  	wp_enqueue_style('everest',get_stylesheet_uri());


  	wp_enqueue_script('jquery');
  	wp_enqueue_script('bootstrap1',get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js','jquery',null,true);
	wp_enqueue_script('custom-js',get_template_directory_uri().'/assets/js/custom.js','jquery',null,true);
	wp_enqueue_script('jquery-appear',get_template_directory_uri().'/assets/js/jquery.appear.js','jquery',null,true);
	wp_enqueue_script('owlcarousel',get_template_directory_uri().'/assets/owlcarousel/js/owl.carousel.min.js','jquery',null,true);
	wp_enqueue_script('form',get_template_directory_uri().'/assets/js/form-contact.js','jquery',null,true);
	wp_enqueue_script('scrolltopcontrol',get_template_directory_uri().'/assets/js/scrolltopcontrol.js','jquery',null,true);
	wp_enqueue_script('wow',get_template_directory_uri().'/assets/js/wow.min.js','jquery',null,true);
	
	
	/*wp_enqueue_script('anim',get_template_directory_uri().'/assets/js/scripts.js','jquery',null,true);*/
	wp_enqueue_script('slide',get_template_directory_uri().'/assets/slide/js/core.min.js','jquery',null,true);
	wp_enqueue_script('progress-bar',get_template_directory_uri().'/assets/js/progressbar.js','jquery',null,true);
	wp_enqueue_script('slide1',get_template_directory_uri().'/assets/slide/js/script.js','jquery',null,true);
	wp_enqueue_script('portfolio',get_template_directory_uri().'/assets/js/portfolio.js','jquery',null,true);
	wp_enqueue_script('prettyPhoto-main',get_template_directory_uri().'/assets/js/jquery.prettyPhoto.js','jquery',null,true);
	wp_enqueue_script('prettyPhoto-customize',get_template_directory_uri().'/assets/js/prettyphotoCustomize.js','jquery',null,true);

	wp_enqueue_script( 'webservices247-google-map-api-js','https://maps.googleapis.com/maps/api/js?key=AIzaSyAAwQpKfrlBiENA5fvNZA4u7VsbK6XlYZc','jquery',null,true);
	wp_enqueue_script('map-customize',get_template_directory_uri().'/assets/js/map.js','jquery',null,true);
	wp_enqueue_script('anim',get_template_directory_uri().'/assets/js/scripts.js','jquery',null,true);

  }
  add_action('wp_enqueue_scripts','everest_style');

//for adding class in <a> tag
function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="page-scroll"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

  function everest_fallback_menu(){?>
		<ul class="nav navbar-nav navbar-right">
			<li><a class="page-scroll" href="#home">Home</a></li>
			<li><a class="page-scroll" href="#about">About Us</a></li>			
			<li><a class="page-scroll" href="#service">services</a></li>
			<li><a class="page-scroll" href="#portfolio">portfolio</a></li>	
			<li><a class="page-scroll" href="#team">Team</a></li>	
			<li><a class="page-scroll" href="#contact">Contact</a></li>
		</ul>

	<?php }

  	// custom post type
 	// Our custom post type function
	function protfolio_posttype()
	{
	 register_post_type( 'protfolio',
	 //CPT Options
		array(
			'labels' => array(
				'name' => 'Protfolios',
				'singular_name' => 'Protfolio'
			),
			'public' => true,
			'has_archive' => true,
			'supports'=>array('title','editor','thumbnail','custom-fields'),
			'rewrite' => array('slug' => 'movies'),
		)
	    );
	}

	// Hooking up our function to theme setup
	add_action( 'init', 'protfolio_posttype' );
	//all cmb2 code goes to here
	add_action( 'cmb2_admin_init', 'custom_metaboxes' );

	function custom_metaboxes(){
		$prefix = '_everest_';

		/**
		 * Initiate the metabox
		 */
		$cmb = new_cmb2_box( array(
			'id'            => 'protfolio_metabox',
			'title'         => __( 'Protfolio Metabox', 'cmb2' ),
			'object_types'  => array( 'protfolio', ), // Post type
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true, // Show field names on the left
		) );

		// Regular text field
		$cmb->add_field( array(
			'name'       => __( 'Project Type:', 'cmb2' ),
			'desc'       => __( 'Please Select Your Desired Project Type', 'cmb2' ),
			'id'         => $prefix . 'project_type',
			'type'       => 'select',
			'show_option_none' => false,
			'default'          => 'all_project',
			'options'          => array(
				'all' => __( 'All Porjects', 'cmb2' ),
				'complete'   => __( 'Complete Projects', 'cmb2' ),
				'ongoing'     => __( 'On Going Projects', 'cmb2' ),
			),
		) );
	}

	require_once  __DIR__ . '/inc/cmb2/init.php';
	require_once __DIR__ . '/inc/redux-framework-master/ReduxCore/framework.php';
  	require_once __DIR__ .'/inc/redux-framework-master/sample/config.php';











