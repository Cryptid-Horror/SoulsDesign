<?php
    $marking_icon = 'Free_Socks';
    $marking_name = 'Socks';
    $marking_code = 'SO';
    $marking_desc = "A free marking that can only appear in the zone provided on the legs and membraned wing fingers. Socks appear as a marking that must cover the ends of the feet and the wing fingers.";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_socks',
        'Warden' => 'Warden_socks',
        'Greater' => 'Gemp_socks',
        'Ravager' => 'Ravager_socks',
        'Stalker' => 'Stalker_socks',
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
        'socks_no2',
        'socks_no1',
        'socks_no3'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking.',
        'Can gradient blend into only stockings if stockings is present on the design.',
        'Socks can sit above or below Stockings.',
        'Since this is a free marking, appearing like other free markings is ok.'

    ];

    $marking_cannot = [
        'Should not be used to look like other genetics markings that are not in the free section.',
        'Cannot gradient into the base coat or any other marking that is not stocking.',
    ];

    $marking_must = [
        'This marking may only appear in the zones allowed.',
        'This marking must cover the required zone in the range images.'
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'socks_1', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
        ['image_name' => 'socks_2', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
        ['image_name' => 'socks_3', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
    ];
?>

@include('design_guides.templates._gene_template')