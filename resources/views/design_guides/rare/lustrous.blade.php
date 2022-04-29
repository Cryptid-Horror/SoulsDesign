<?php
    $marking_icon = 'Rare_Lustrous';
    $marking_name = 'Lustrous';
    $marking_code = 'nLs/LsLs';
    $marking_type = 'Variable';
    $marking_desc = "A marking that appears as an iridescent patch with a border. Its behavior is seen on ducks and other similar birds.";
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
    $edge_blurred = 'yes';
    $edge_gradient = 'yes';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'lustrous_yes',
        'lustrous_yes2',
        'lustrous_no',
        'lustrous_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. It can blend into the base.',
        'This marking can fade into the base coat/marking it sits over.',
        'This marking creates a patch of iridescent color, the shape of the patch can be irregular or geometric in shape.',
        'Lustrous can have as many colors necessary to create the iridescent effect, and multiple patches can be different sets of colors. It can also be affected by color modifiers.',
        'Lustrous has an optional border which can be darker or lighter than the iridescent patch. The border does not have to cover the whole marking.',
        'Lustrous can be dark or bright iridescence.',

    ];

    $marking_cannot = [
        'Lustrous cannot affect the whole body or to make a whole section covered (like the entire wing for example.)',
        'Lustrous may not mimic any other marking.',
    ];

    $marking_must = [
        'Recessive: Can appear in two zones.',
        'Dominant: Can appear in all zones',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'lust_1', 'alt' => '...', 'label' => 'SB-0937', 'caption' => 'Designer: @ModernBeatnik'],
        ['image_name' => 'lust_2', 'alt' => '...', 'label' => 'SB-0794', 'caption' => 'Designer: @FlawedEmperor'],
        ['image_name' => 'lust_3', 'alt' => '...', 'label' => 'SB-0734', 'caption' => 'Designer: @Xanowa'],
    ];
?>

@include('design_guides.templates._gene_template')