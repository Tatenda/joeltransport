<?php
/*
   Plugin Name: Booking Form
   Plugin URI: https://mmogomedia.com/wordpress/plugins/mmogo-booking
   description: Custom Mmogo Booking
   Version: 1.2
   Author: Mmogo Media
   Author URI: https://mmogomedia.com
   License: MIT License

*/

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}

global $jt_db_version;
$jt_db_version = '1.0';

function jt_survey_form() {
   require __DIR__.'/templates/steps.php';

   if (!empty($_REQUEST['step'])) {

      if ($_REQUEST['step'] == 2) {

         require __DIR__.'/templates/two.php';

      } else if ($_REQUEST['step'] == 3) {
         require __DIR__.'/templates/three.php';

      } else if ($_REQUEST['step'] == 4) {
         require __DIR__.'/templates/four.php';

      } else if ($_REQUEST['step'] == 5) {
         require __DIR__.'/templates/five.php';

      } else if ($_REQUEST['step'] == 'done') {
         require __DIR__.'/templates/done.php';

      } else {
         require __DIR__.'/templates/one.php';
      }
   }else {
      require __DIR__.'/templates/one.php';
   }
}

add_shortcode('jt_survey', 'jt_survey_form');

function jt_register_styles() {
   $version = wp_get_theme()->get('Version');
   wp_enqueue_style('jt-custom', plugins_url($plugin = 'joel-booking/assets/css/style.css'), array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'jt_register_styles');

function jt_booking_register_scripts() {
   $version = wp_get_theme()->get('Version');
   wp_enqueue_script('mmogo-custom', plugins_url($plugin = 'joel-booking/assets/js/main.js'), array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'jt_booking_register_scripts');


function jt_quotes_table() {
   global $wpdb;
   global $jt_db_version;
   require_once ABSPATH . 'wp-admin/includes/upgrade.php';

   $charset_collate = $wpdb->get_charset_collate();
   $table_name = $wpdb->prefix . 'quotes';
   $sql = "CREATE TABLE $table_name (
      id int(11) NOT NULL AUTO_INCREMENT,
      created_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
      email varchar(100) DEFAULT '' NOT NULL,
      PRIMARY KEY  (id)
   ) $charset_collate;";
   dbDelta($sql);

   $table_name = $wpdb->prefix . 'moving_details';
   $moving_details_sql = "CREATE TABLE $table_name (
      id int(11) NOT NULL AUTO_INCREMENT,
      created_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
      size varchar(100) DEFAULT '' NOT NULL,
      moving_date varchar(100) DEFAULT '' NOT NULL,,
      loading_street_address varchar(100) DEFAULT '' NOT NULL,
      loading_complex_name varchar(100) DEFAULT '' NOT NULL,
      loading_city varchar(100) DEFAULT '' NOT NULL,
      loading_postcode varchar(100) DEFAULT '' NOT NULL,
      loading_country varchar(100) DEFAULT '' NOT NULL,
      delivery_street_address varchar(100) DEFAULT '' NOT NULL,
      delivery_complex_name varchar(100) DEFAULT '' NOT NULL,
      delivery_city varchar(100) DEFAULT '' NOT NULL,
      delivery_postcode varchar(100) DEFAULT '' NOT NULL,
      delivery_country varchar(100) DEFAULT '' NOT NULL,
      form int(11) DEFAULT 0 NOT NULL,
      PRIMARY KEY  (id)
   ) $charset_collate;";
   dbDelta($moving_details_sql);

   $table_name = $wpdb->prefix . 'inventory';
   $inventory_sql = "CREATE TABLE $table_name (
      id int(11) NOT NULL AUTO_INCREMENT,
      created_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
      title varchar(100) DEFAULT '' NOT NULL,
      room varchar(100) DEFAULT '' NOT NULL,
      size varchar(1) DEFAULT '' NOT NULL,
      scale DECIMAL(9, 4) DEFAULT 0.0 NOT NULL,
      count int(100) DEFAULT 0 NOT NULL,
      form int(11) DEFAULT 0 NOT NULL,
      PRIMARY KEY  (id)
   ) $charset_collate;";
   dbDelta($inventory_sql);

   $table_name = $wpdb->prefix . 'optional_services';
   $optional_services_sql = "CREATE TABLE $table_name (
      id int(11) NOT NULL AUTO_INCREMENT,
      created_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
      title varchar(255) DEFAULT '' NOT NULL,
      category varchar(255) DEFAULT '' NOT NULL,
      preferred_date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
      alternative_date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
      require BOOLEAN NOT NULL,
      notes text DEFAULT '' NOT NULL,
      form int(11) DEFAULT 0 NOT NULL,
      PRIMARY KEY  (id)
   ) $charset_collate;";
   dbDelta($optional_services_sql);

   // $table_name = $wpdb->prefix . 'specialized_services';
   // $sql = "CREATE TABLE $table_name (
   //    id mediumint(9) NOT NULL AUTO_INCREMENT,
   //    created_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
   //    email varchar(100) DEFAULT '' NOT NULL,
   //    PRIMARY KEY  (id)
   // ) $charset_collate;";

   // $table_name = $wpdb->prefix . 'contact_details';
   // $sql = "CREATE TABLE $table_name (
   //    id mediumint(9) NOT NULL AUTO_INCREMENT,
   //    created_at datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
   //    email varchar(100) DEFAULT '' NOT NULL,
   //    PRIMARY KEY  (id)
   // ) $charset_collate;";

   add_option('jt_db_version', $jt_db_version);
}


register_activation_hook( __FILE__, 'jt_quotes_table' );


add_action( 'phpmailer_init', 'mailer_config', 10, 1);
function mailer_config(PHPMailer $mailer){
  $mailer->IsSMTP();
  $mailer->Host = "smtp.gmail.com"; // your SMTP server
  $mailer->Port = 587;
  $mailer->SMTPDebug = 2; // write 0 if you don't want to see client/server communication in page
  $mailer->CharSet  = "utf-8";
}
add_action('wp_mail_failed', 'log_mailer_errors', 10, 1);
function log_mailer_errors( $wp_error ){
  $fn = ABSPATH . '/mail.log'; // say you've got a mail.log file in your server root
  $fp = fopen($fn, 'a');
  fputs($fp, "Mailer Error: " . $wp_error->get_error_message() ."\n");
  fclose($fp);
}
