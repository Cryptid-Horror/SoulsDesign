<?php
    $marking_icon = 'Common_Rimmed';
    $marking_name = 'Rimmed';
    $marking_code = 'nRi/RiRi';
    $marking_desc = "A marking that appears on the legs, tail, wings, and muzzle of the dragon. It borders these parts of the dragons, creating a nice rim on the limbs.";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Rimmed',
        'Warden' => 'Warden_Rimmed',
        'Greater' => 'Gemp_Rimmed',
        'Ravager' => 'Ravager_Rimmed',
        'Stalker' => 'Stalker_Rimmed',
        'Ridgewalker' => 'Ridgewalker_Rimmed',
        'Abyssal' => 'Abyssal_Rimmed',
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
        'rimmed_yes',
        'rimmed_yes2',
        'rimmed_no',
        'rimmed_no2'
    ];

    // You can use html!
    $marking_can = [
        'Can have a 12 point value or saturation gradient.',
        'Can fade into the base coat or the marking it sits over.',
        'Can be the same color as marking like blanket or underbelly, to create a look that these markings are "extending".',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing like inkwell or other markings.',
    ];

    $marking_must = [
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'rim_1', 'alt' => '...', 'label' => 'SB-0996', 'caption' => 'Designer: @FlawedEmperor'],
        ['image_name' => 'rim_2', 'alt' => '...', 'label' => 'SB-0934', 'caption' => 'Designer: @GlacialFalls'],
        ['image_name' => 'rim_3', 'alt' => '...', 'label' => 'SB-0824', 'caption' => 'Designer: @FlawedEmperor'],
    ];
?>

@include('design_guides.templates._gene_template')