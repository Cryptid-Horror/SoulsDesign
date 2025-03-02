<?php
    $marking_icon = 'Free_Socks';
    $marking_name = 'Socks';
    $marking_code = 'SO';
    $marking_type = 'Free Marking';
    $marking_desc = "A free marking that can only appear in the zone provided on the legs and membraned wing fingers. Stockings appear as a marking that does not need to cover the feet and ends of the wing fingers.";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Socks',
        'Warden' => 'Warden_Socks',
        'Greater' => 'Gemp_Socks',
        'Ravager' => 'Ravager_Socks',
        'Stalker' => 'Stalker_Socks',
        'Ridgewalker' => 'Ridgewalker_socks',
        'Abyssal' => 'Abyssal_socks',
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
    $edge_gradient = 'sometimes';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'socks_yes1',
        'socks_yes2',
        'socks_yes3',
        'socks_yes4',
        'socks_yes5',
        'socks_no2',
        'socks_no1'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking.',
        'This marking may only have a gradient if it is gradienting into Socks, it cannot gradient into the base or other markings.',
        'Since this is a free marking, appearing like other free markings is ok.',
        'Can lower above or below Socks. Does not have to cover the feet or ends of the wing membranes.',
        'Stockings can haver stripes in it that are vertical, horizontal, etc.'

    ];

    $marking_cannot = [
        'Should not be used to look like other genetics markings that are not in the free section.',
    ];

    $marking_must = [
        'This marking may only appear in the approved regions.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'stock_1', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
        ['image_name' => 'stock_2', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
        ['image_name' => 'stock_3', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
    ];
?>

@include('design_guides.templates._gene_template')