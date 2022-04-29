<?php
    $marking_icon = 'Common_Points';
    $marking_name = 'Points';
    $marking_code = 'nPo/PoPo';
    $marking_type = 'Variable';
    $marking_desc = "Marking Origin: 2018 Genetics Contest; Submitted by user horsefreek151. A darker or lighter marking found on the legs, tail, wings, head, and chest of the dragon in specific spots. The marking is noted for its likeness to that of a doberman, and is often sought out for as a more conservative option to underbelly.";
    $layers_above_or_below = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Points',
        'Warden' => 'Warden_Points',
        'Greater' => 'Gemp_Points',
        'Ravager' => 'Ravager_Points',
        'Stalker' => 'Stalker_Points',
        'Ridgewalker' => 'Ridgewalker_Points',
        'Abyssal' => 'Abyssal_Points',
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
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'points_yes',
        'points_yes2',
        'points_no',
        'points_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 value and saturation point gradient difference inside the marking.',
        'Is allowed to gradient into the base, or a marking it sits over.',
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
        ['image_name' => 'point_1', 'alt' => '...', 'label' => 'SB-0642', 'caption' => 'Designer: @PenumbralWolf'],
        ['image_name' => 'point_2', 'alt' => '...', 'label' => 'SB-0552', 'caption' => 'Designer: @Alriandi'],
        ['image_name' => 'point_3', 'alt' => '...', 'label' => 'SB-0758', 'caption' => 'Designer: @DalekFell'],
    ];
?>

@include('design_guides.templates._gene_template')