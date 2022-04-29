<?php
    $marking_icon = 'Uncommon_Dipped';
    $marking_name = 'Dipped';
    $marking_code = 'nDi/DiDi';
    $marking_type = 'Variable Modifier';
    $marking_desc = "A marking that either darkens or lightens the dragon starting from either the head, or tail, and gradienting to the mid section of the body.";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Dipped',
        'Warden' => 'Warden_Dipped',
        'Greater' => 'Gemp_Dipped',
        'Ravager' => 'Ravager_Dipped',
        'Stalker' => 'Stalker_Dipped',
        'Ridgewalker' => 'Ridgewalker_Dipped',
        'Abyssal' => 'Abyssal_Dipped',
    ];

    // Use yes or no
    $edge_solid = 'no';
    $edge_feathered = 'no';
    $edge_border = 'no';
    $edge_textured = 'yes';
    $edge_mottled = 'no';
    $edge_soft = 'no';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'no';
    $edge_gradient = 'yes';
    $color_any = 'no';
    $edge_blending = 'no';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'dipped_yes',
        'dipped_yes2',
        'dipped_no',
        'dipped_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking.',
        'Edge must have a full gradient blend into the base.',
        'Can overlay some markings, but be under others',
    ];

    $marking_cannot = [
        'Edges of the marking cannot be used to look like rimmed /etc is on the design, so be aware of how you shape the end of the marking.',
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Holes, breaks, cutouts, or floating portions of the marking are not allowed. The marking must be fully connected with the EXCEPTION of the wing membrane which may be disconnected from the underside of the marking.',
        'Cannot be used to hide certain markings fully (i.e. it can not be used to hide masked on the face in full.)',
    ];

    $marking_must = [
        'Must cover roughly 50% of the body, starting from either the tail, or the head.',
        'Recessive: covers 50% of the body, natural colors or lighter/darker than the base coat or what it sits over',
        'Dominant: Can cover up to 75% of the body, is allowed to be any one chosen color, not just from natural colors or lighter/darker than the base coat or what it sits over.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'dip_1', 'alt' => '...', 'label' => 'SB-0759', 'caption' => 'Designer: @DalekFell'],
        ['image_name' => 'dip_2', 'alt' => '...', 'label' => 'SB-0747', 'caption' => 'Designer: @DartingDragon-ARPG'],
        ['image_name' => 'dip_3', 'alt' => '...', 'label' => 'SB-0744', 'caption' => 'Designer: @Xanowa'],
    ];
?>

@include('design_guides.templates._gene_template')