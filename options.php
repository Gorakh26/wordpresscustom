
<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */
 
/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */
function optionsframework_options() {
	// Test data
	$options[] = array(
		'name' => __('Top Hader', 'options_check'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Phone Number','options_check'),
		'desc' => __('Phone Number','options_check'),
		'id'   => 'phone-number',
		'std'  => 'Phone number',
		'type' => 'text');

	$options[] = array(
		'name' => __('Email Id','options_check'),
		'desc' => __('Email id','options_check'),
		'id'   => 'email',
		'std'  => 'email id',
		'type' => 'text');

	$options[] = array(
		'name' => __('Address','options_check'),
		'desc' => __('Address','options_check'),
		'id'   => 'address',
		'std'  => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Social Site', 'options_check'),
		'type' => 'heading');
	$options[] = array(
		'name' => __('Facebook','options_check'),
		'desc' => __('Facebook','options_check'),
		'id'   => 'facebook',
		'std'  => 'facebook',
		'type' => 'text');
	$options[] = array(
		'name' => __('Twitter','options_check'),
		'desc' => __('Twitter','options_check'),
		'id'   => 'twitter',
		'std'  => 'twitter',
		'type' => 'text');

	$options[] = array(
		'name' => __('Instagram','options_check'),
		'desc' => __('Instagram','options_check'),
		'id'   => 'instagram',
		'std'  => 'instagram',
		'type' => 'text');

	$options[] = array(
		'name' => __('Linkedin','options_check'),
		'desc' => __('Linkedin','options_check'),
		'id'   => 'linkedin',
		'std'  => 'linkedin',
		'type' => 'text');

	$options[] = array(
		'name' => __('Youtube ','options_check'),
		'desc' => __('Youtube ','options_check'),
		'id'   => 'youtube',
		'std'  => 'youtube',
		'type' => 'text');


	$options[] = array(
		'name' => __('F About Company', 'options_check'),
		'type' => 'heading');



	$options[] = array(
		'name' => __('F About text','options_check'),
		'desc' => __('F About text','options_check'),
		'id'   => 'f-about-text',
		'std'  => 'About Company ',
		'type' => 'textarea');

		$options[] = array(
			'name' => __('CopyRight','options_check'),
			'desc' => __('CopyRight','options_check'),
			'id'   => 'copyright',
			'std'  => 'Copy Right ',
			'type' => 'text');

		return $options;
}