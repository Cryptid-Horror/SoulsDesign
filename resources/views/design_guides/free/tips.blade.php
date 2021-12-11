<?php
    $marking_icon = 'Free_Tips';
    $marking_name = 'Tips';
    $marking_code = 'TI';
    $marking_desc = "A free marking that can only cover a specified range on wings, feathers, and other small features. Tips is used as a small marking to accent edges of feathers and limbs.";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Tips',
        'Warden' => 'Warden_Tips',
        'Greater' => 'Gemp_Tips',
        'Ravager' => 'Ravager_Tips',
        'Stalker' => 'Stalker_Tips',
        'Ridgewalker' => 'Ridgewalker_Tips',
        'Abyssal' => 'Abyssal_Tips',
    ];

    // Use yes or no
    $edge_solid = 'yes';
    $edge_feathered = 'yes';
    $edge_border = 'no';
    $edge_textured = 'yes';
    $edge_mottled = 'no';
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
        'tips_yes1',
        'tips_yes2',
        'tips_yes3',
        'tips_yes4',
        'tips_no2',
        'tips_no1'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking.',
        'Can blend into the base.',
        'Since this is a free marking, appearing like other free markings is ok.'

    ];

    $marking_cannot = [
        'Should not be used to look like other genetics markings that are not in the free section.',
        'Be especially careful not to make this marking look like rimmed or points.',
    ];

    $marking_must = [
        'This marking must only appear in the allowed zones.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'tips_1', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
        ['image_name' => 'tips_2', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
        ['image_name' => 'tips_3', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
    ];
?>

@include('design_guides.templates._gene_template')