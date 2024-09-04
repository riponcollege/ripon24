<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_66a12c567b58d',
	'title' => 'Module: Goals',
	'fields' => array(
		array(
			'key' => 'field_66cf5cd842162',
			'label' => 'Color',
			'name' => 'color',
			'aria-label' => '',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'tan' => 'Tan',
				'white' => 'White',
			),
			'default_value' => 'white',
			'return_format' => 'value',
			'multiple' => 0,
			'allow_null' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'allow_custom' => 0,
			'search_placeholder' => '',
		),
		array(
			'key' => 'field_66a12cfca8fb5',
			'label' => 'Overall Goal Name',
			'name' => 'goal-name',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '40',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => 'ex. Endowment Growth',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_66a12e0ba8fb9',
			'label' => 'Is Currency',
			'name' => 'currency',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '10',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
			'ui' => 1,
		),
		array(
			'key' => 'field_66a12d1ea8fb6',
			'label' => 'Raised (Progress)',
			'name' => 'raised',
			'aria-label' => '',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '15',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'min' => '',
			'max' => '',
			'placeholder' => '',
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_66a12d46a8fb7',
			'label' => 'Goal (Total)',
			'name' => 'goal',
			'aria-label' => '',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '15',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'min' => '',
			'max' => '',
			'placeholder' => '',
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_66a12d65a8fb8',
			'label' => 'Goal Unit',
			'name' => 'goal-unit',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => 'ex. million',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_66bca17a15a1e',
			'label' => 'Minor Goals',
			'name' => 'minor_goals',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_repeater_stylised_button' => 0,
			'layout' => 'table',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Add Minor Goal',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_66bca1c015a1f',
					'label' => 'Goal Name',
					'name' => 'goal-name',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '40',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_66bca17a15a1e',
				),
				array(
					'key' => 'field_66bca1d715a20',
					'label' => 'Is Currency',
					'name' => 'currency',
					'aria-label' => '',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '10',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 1,
					'ui_on_text' => '',
					'ui_off_text' => '',
					'ui' => 1,
					'parent_repeater' => 'field_66bca17a15a1e',
				),
				array(
					'key' => 'field_66bca1e915a21',
					'label' => 'Raised (Progress)',
					'name' => 'raised',
					'aria-label' => '',
					'type' => 'number',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'min' => '',
					'max' => '',
					'placeholder' => '',
					'step' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_66bca17a15a1e',
				),
				array(
					'key' => 'field_66bca20115a22',
					'label' => 'Goal (Total)',
					'name' => 'goal',
					'aria-label' => '',
					'type' => 'number',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'min' => '',
					'max' => '',
					'placeholder' => '',
					'step' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_66bca17a15a1e',
				),
				array(
					'key' => 'field_66bca22b15a23',
					'label' => 'Goal Unit',
					'name' => 'goal-unit',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_66bca17a15a1e',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'field',
	'hide_on_screen' => '',
	'active' => false,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
	),
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1724865787,
));

endif;