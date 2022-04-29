<?php
    $marking_icon = 'Rare_Petal';
    $marking_name = 'Petal';
    $marking_code = 'nPl/PlPl';
    $marking_type = 'Variable';
    $marking_desc = "This gene presents as tear drops, petal, or flower shapes on the body.";
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
    $edge_border = 'yes';
    $edge_textured = 'yes';
    $edge_mottled = 'no';
    $edge_soft = 'yes';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'no';
    $edge_gradient = 'no';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'petal_yes',
        'petal_yes2',
        'petal_no',
        'petal_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. It can blend into the base.',
        'This marking can fade into the base coat/marking it sits over.',
        'Petal can be iridescent in color, or flat in color.',
        'Petal can have as many colors necessary to create the iridescent effect, and multiple patches can be different sets of colors. It can also be affected by color modifiers.',
        'Petal may have a thin border that can fade.',
        'Petal can create flower shapes with the individual petals. However, it cannot create leaves or leaf looking markings.',

    ];

    $marking_cannot = [
        'Petal cannot mimic other markings.',
    ];

    $marking_must = [
        'Recessive: Can appear in all zones and up to three individual colors (i.e. 1 petal is green, but another is purple, and a third one might be yellow).',
        'Dominant: Can appear in all zones as well be any number of colors per petal. (i.e. 1 petal is green, but another is purple, and a third one might be yellow, but a fourth can be orange, and so on.)',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'petal_1', 'alt' => '...', 'label' => 'SB-0655', 'caption' => 'Designer: @Lich-ARPG'],
        ['image_name' => 'petal_2', 'alt' => '...', 'label' => 'SB-0028', 'caption' => 'Designer: @StarsySpirit + Desert-Wyvern'],
        ['image_name' => 'petal_3', 'alt' => '...', 'label' => 'SB-0775', 'caption' => 'Designer: @@Cameil'],
    ];
?>

@include('design_guides.templates._gene_template')