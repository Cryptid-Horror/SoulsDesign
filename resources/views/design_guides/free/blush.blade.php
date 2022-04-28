<?php
    $marking_icon = 'Free_Blush';
    $marking_name = 'Blush';
    $marking_code = 'BL';
    $marking_type = 'Free Marking';
    $marking_desc = "A free marking that can appear in the designated area. It appears as a blush like spot on the face.";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Blush',
        'Warden' => 'Warden_Blush',
        'Greater' => 'Gemp_Blush',
        'Ravager' => 'Ravager_Blush',
        'Stalker' => 'Stalker_Blush',
        'Ridgewalker' => 'Ridgewalker_Blush',
        'Abyssal' => 'Abyssal_Blush',
    ];

    // Use yes or no
    $edge_solid = 'yes';
    $edge_feathered = 'yes';
    $edge_border = 'yes';
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
        'blush_yes1',
        'blush_yes2',
        'blush_yes3',
        'blush_no2',
        'blush_no1'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking.',
        'Can blend into the base.',
        'Since this is a free marking, appearing like other free markings is ok.',
        'Can come off the provided sliders in this guide, be any natural color, or can be a shade of the base/marking color beneath it.'

    ];

    $marking_cannot = [
        'Should not be used to look like other genetics markings that are not in the free section.',
    ];

    $marking_must = [
        'This marking must only appear in the region allowed.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'blush_1', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
        ['image_name' => 'blush_2', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
        ['image_name' => 'blush_3', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
    ];
?>

@include('design_guides.templates._gene_template')