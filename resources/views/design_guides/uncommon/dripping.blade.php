<?php
    $marking_icon = 'Uncommon_Dripping';
    $marking_name = 'Dripping';
    $marking_code = 'nDr/DrDr';
    $marking_type = 'Modifier';
    $marking_desc = "Dripping is a modifier marking that creates an effect that looks like the marking is dripping. The dripping effect can appear in any direction. Amusingly, when it was discovered, someone thought they had spilled paint on the hatchling.";
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
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'dripping_yes',
        'dripping_yes2',
        'dripping_no',
        'dripping_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.'
    ];

    $marking_cannot = [
    ];

    $marking_must = [
        'Must follow the rules of the marking it is modifying.',
        'This marking must modify another marking, a minimal mark, or horns/claws.',
        'Must be the same color as the marking it is effecting, with the gradient being allowed along with it.',
        'Must be connected to the marking it is effecting, but may have smaller "dot" portions that are disconnected.',
        'Recessive: Modifies up to two markings.',
        'Dominant: Modifiers three markings.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'drip_1', 'alt' => '...', 'label' => 'SB-0940', 'caption' => 'Designer: @Rhith'],
        ['image_name' => 'drip_2', 'alt' => '...', 'label' => 'SB-0192', 'caption' => 'Designer: @Sankko'],
        ['image_name' => 'drip_3', 'alt' => '...', 'label' => 'SB-0115', 'caption' => 'Designer: @Kre-Kael'],
    ];
?>

@include('design_guides.templates._gene_template')