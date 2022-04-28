<?php
    $marking_icon = 'Free_Minimal_Mark';
    $marking_name = 'Minimal Mark';
    $marking_code = 'MM';
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
        'free_mark'
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
    $marking_must = [
        'This marking must only cover up to 15% of the body.',
    ];

    $marking_can = [
        'Allowed up to a 12 point value and saturation point gradient difference inside the marking. <br>
         Can blend into the base.
         Since this is a free marking, appearing like other free markings is ok.',

    ];

    $marking_cannot = [
        'Should not be used to look like other genetics markings that are not in the free section.
        Be especially catious not to create a marking on the face that appears like masked.'
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