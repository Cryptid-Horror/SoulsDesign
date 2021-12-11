<?php
    $marking_icon = 'Uncommon_Dapple';
    $marking_name = 'Dapple';
    $marking_code = 'nDl/nDl';
    $marking_desc = "The appeal for this marking comes from the similarities it holds with the dapple gene on horses. Bokeh appears as circles of different shades of color from the base coat, in varying sizes or minor shape differences. ";
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
    $edge_solid = 'no';
    $edge_feathered = 'yes';
    $edge_border = 'no';
    $edge_textured = 'yes';
    $edge_mottled = 'no';
    $edge_soft = 'no';
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
        'dapple_yes',
        'dapple_yes2',
        'dapple_no',
        'dapple_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 20 point value and saturation point gradient difference inside the marking.',
        'Is allowed, and expected, to fade into the base coat, or other markings like stained.',
    ];

    $marking_cannot = [
        'Create dark gradients like stained (often seen in examples of horses with dappling)',
    ];

    $marking_must = [
        'Recessive: appears in all zones',
        'Dominant: Appears in all zones, but also can be any single color aside from natural colors or darker/lighter of the base.'
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'dapple_1', 'alt' => '...', 'label' => 'SB-0540', 'caption' => 'Designer: @FallingFireX'],
        ['image_name' => 'dapple_2', 'alt' => '...', 'label' => 'SB-0125', 'caption' => 'Designer: @The-Shellcat'],
        ['image_name' => 'dapple_3', 'alt' => '...', 'label' => 'SB-0055', 'caption' => 'Designer: @TeachMeToLearn'],
    ];
?>

@include('design_guides.templates._gene_template')