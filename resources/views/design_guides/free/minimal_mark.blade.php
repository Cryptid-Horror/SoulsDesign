<?php
    $marking_icon = 'Free_Minimal_Mark';
    $marking_name = 'Minimal Mark';
    $marking_code = 'MM';
    $marking_type = 'Free Marking';
    $marking_desc = "A free marking that can only cover up to 15% of the body. Minimal Marking is a free flowing marking that can create many types of shapes. Such as splotches on the snout, claws, horns, or small marks on the body.";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Range',
        'Warden' => 'Warden_Range',
        'Greater' => 'Gemp_Range',
        'Ravager' => 'Ravager_Range',
        'Stalker' => 'Stalker_Range',
        'Ridgewalker' => 'Ridgewalker_Range',
        'Abyssal' => 'Abyssal_Range',
    ];

    // Use yes or no
    $edge_solid = 'yes';
    $edge_feathered = 'yes';
    $edge_border = 'no';
    $edge_textured = 'yes';
    $edge_mottled = 'yes';
    $edge_soft = 'yes';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'yes';
    $edge_gradient = 'yes';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'free_mark',
        'minm_yes1',
        'minm_yes2',
        'minm_yes3',
        'minm_yes4',
        'minm_yes5',
        'minm_yes6',
        'minm_yes7',
        'minm_yes8',
        'minm_yes9',
        'minm_no2',
        'minm_no1',
        'minm_no3',
        'minm_no4',
        'minm_no5',
        'minm_no6',

    ];

    // You can use html!
    

    $marking_can = [
        '<b>Value and Saturation Gradient Blend</b> = Yes; 12 Points.<br>
        ♦ Since this is a free marking, appearing like other <b>free</b> markings is ok. <br>
        ♦ Minimal Mark is allowed to be modified by color modifiers and special modifiers.<br>
        ♦ Minimal Mark can be the same color as a marking it is "attached" to. See what it cannot do for the limitations on this.',

    ];

    $marking_cannot = [
        'You may not recreate non-free markings with this marking. This means you cannot make your minimal mark look dusted or shaped. Single shapes are ok but multiple shapes are not. <br>
        ♦ While it may be attached to a marking, You may not use minimal mark to extend another marking into its dominant zone, or beyond where that markings is allowed to go.<br>
        ♦ <i>Be especially cautious of mimicing masked, which is defined by the marking covering the eye. While minmark can border the eye or create an accent around it, it should not be larger than the eye itself, nor should it connect across the face.</i>',
    ];

    $marking_must = [
        '<b>Maximum Coverage:</b> 15% of the body.<br>
        ♦ <b>Minimum Coverage:</b> There is no minimum coverage.',
    ];



    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'minm_1', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
        ['image_name' => 'minm_2', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
        ['image_name' => 'minm_3', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
    ];
?>

@include('design_guides.templates._gene_template')