<?php
    $marking_icon = 'Free_Freckles';
    $marking_name = 'Freckles';
    $marking_code = 'FL';
    $marking_desc = "A free marking that can only appear in specific zones. It appears as freckles, and unlike dusted cannot be all over the body and must be clustered close together.";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_freckles',
        'Warden' => 'Warden_freckles',
        'Greater' => 'Gemp_freckles',
        'Ravager' => 'Ravager_freckles',
        'Stalker' => 'Stalker_freckles',
    ];

    // Use yes or no
    $edge_solid = 'yes';
    $edge_feathered = 'no';
    $edge_border = 'no';
    $edge_textured = 'no';
    $edge_mottled = 'no';
    $edge_soft = 'yes';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'no';
    $edge_gradient = 'sometimes';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'freckles_yes1',
        'freckles_yes2',
        'freckles_no2',
        'freckles_no1'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking.',
        'Freckles is allowed a lioght gradient beneath the freckles themselves.',
        'Freckles can be densly, or lightly, clustered in their zones.',
        'Since this is a free marking, appearing like other free markings is ok.'

    ];

    $marking_cannot = [
        'Should not be used to look like other genetics markings that are not in the free section, especially dusted.',
        'Cannot appear outside of their zones, but can take up the whole zone.'
    ];

    $marking_must = [
        'This marking must only appear in clusters in the zones in this guide.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'freckles_1', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
        ['image_name' => 'freckles_2', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
        ['image_name' => 'freckles_3', 'alt' => '...', 'label' => 'SB-???', 'caption' => 'Designer: @//'],
    ];
?>

@include('design_guides.templates._gene_template')