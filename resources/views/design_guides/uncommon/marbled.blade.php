<?php
    $marking_icon = 'Uncommon_Marbled';
    $marking_name = 'Marbled';
    $marking_code = 'nMar/MarMar';
    $marking_type = 'Variable';
    $marking_desc = "Marbled is a gene that existed among the warden dragons, and appears either like marbled stone or like a sort of 'bubbly' marking on the body.";
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
    $edge_mottled = 'no';
    $edge_soft = 'yes';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'yes';
    $edge_gradient = 'no';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'marbled_yes',
        'marbled_yes2',
        'marbled_no',
        'marbled_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.',
        'May be up to three different colors',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
    ];

    $marking_must = [
        'Recessive: can appear in 3 Zones',
        'Dominant:  Can appear in all zones',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'mar_1', 'alt' => '...', 'label' => 'SB-0027', 'caption' => 'Designer: @Arinatira'],
        ['image_name' => 'mar_2', 'alt' => '...', 'label' => 'SB-0307', 'caption' => 'Designer: @Xanowa'],
        ['image_name' => 'mar_3', 'alt' => '...', 'label' => 'SB-0921', 'caption' => 'Designer: @Xanowa'],
    ];
?>

@include('design_guides.templates._gene_template')