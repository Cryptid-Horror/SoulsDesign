<?php
    $marking_icon = 'Uncommon_Metallic';
    $marking_name = 'Metallic';
    $marking_code = 'nMe/MeMe';
    $marking_type = 'Modifier';
    $marking_desc = "A gene that has the claws, horns, spikes, and other 'special' zones of a dragon's design (fur on the elbows of greater emperors, scales on the legs/neck/wings of the Sapiere, etc) to be any color, and shiny, as if they are metallic. Dragons with gene are said to have a special place in their heart for especially shiny things... ";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Metallic',
        'Warden' => 'Warden_Metallic',
        'Greater' => 'Gemp_Metallic',
        'Ravager' => 'Ravager_Metallic',
        'Stalker' => 'Stalker_Metallic',
        'Ridgewalker' => 'Ridgewalker_Range',
        'Abyssal' => 'Abyssal_Range',
    ];

    // Use yes or no
    $edge_solid = 'yes';
    $edge_feathered = 'yes';
    $edge_border = 'no';
    $edge_textured = 'yes';
    $edge_mottled = 'yes';
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
        'metallic_yes',
        'metallic_yes2',
        'metallic_no',
        'metallic_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking.',
        'Can gradient or blend between colors smoothly, or have a solid edge as it presents multiple colors',
        'Metallic is allowed to effect horns, claws, teeth, spikes etc, or One marking.'
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Metallic cannot affect the base coat or color modifiers (i.e. if you effect the base coat with Copper, you cannot apply Metallic to Copper.'
    ];

    $marking_must = [
        'Recessive: Can be up to three colors and affect all special features (horns/etc) AND/OR one marking.',
        'Dominant: Can be up to five colors and affect all special features (horns/etc) AND/OR two markings.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'metal_1', 'alt' => '...', 'label' => 'SB-0822', 'caption' => 'Designer: @Rhith'],
        ['image_name' => 'metal_2', 'alt' => '...', 'label' => 'SB-0988', 'caption' => 'Designer: @FallingFireX'],
        ['image_name' => 'metal_3', 'alt' => '...', 'label' => 'SB-0856', 'caption' => 'Designer: @Xanowa'],
    ];
?>

@include('design_guides.templates._gene_template')