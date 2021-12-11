<?php
    $marking_icon = 'Uncommon_Plasma';
    $marking_name = 'Plasma';
    $marking_code = 'nPs/PsPs';
    $marking_desc = "Plasma is said to be gifted to dragons who harness the power of lightning, or have been struck by lightning. The marking appears as a think cracking marking along the dragon's body, spreading out like a lightning strike.";
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
    $edge_blurred = 'no';
    $edge_gradient = 'no';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'plasma_yes',
        'plasma_yes2',
        'plasma_no',
        'plasma_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking.',
        'Plasma may gradient into the base.',
        'Plasma can start in up to three starting locations, or can extend from one zone into the next one freely',
        'Thickness and thinness of the marking can vary.',
        'Plasma can appear as lightning, spiderweb, or water ripple patterns. This means it can connect together and weave throughout the design creating sort of like "holes" throughout the pattern.',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'The marking cannot be used to mimic trailing, banded, or pigeon.',
    ];

    $marking_must = [
        'Recessive may appear in all zones',
        'Dominant may appear in all zones, as well as be any single color without a color modifier gene present',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'plasma_1', 'alt' => '...', 'label' => 'SB-0931', 'caption' => 'Designer: @Aarushii'],
        ['image_name' => 'plasma_2', 'alt' => '...', 'label' => 'SB-0487', 'caption' => 'Designer: @AmadoodlesARPG'],
        ['image_name' => 'plasma_3', 'alt' => '...', 'label' => 'SB-0841', 'caption' => 'SDesigner: @TipToeToads'],
    ];
?>

@include('design_guides.templates._gene_template')