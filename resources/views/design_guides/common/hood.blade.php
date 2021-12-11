<?php
    $marking_icon = 'Common_Hood';
    $marking_name = 'Hood';
    $marking_code = 'nHd/HdHd';
    $marking_desc = "Hood covers the face and neck of the dragon. It can cover the entire zone, or just parts, so long as the hood is visible on the head and the neck together. The gene was originally thought to be a mutation of the collar gene, or a confusion of masked and collar working together. However, reliable reproductions of the marking has shown it to be its own gene with various interactions with other genes like collar and mask.";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Hood',
        'Warden' => 'Warden_Hood',
        'Greater' => 'Gemp_Hood',
        'Ravager' => 'Ravager_Hood',
        'Stalker' => 'Stalker_Hood',
        'Ridgewalker' => 'Ridgewalker_Hood',
        'Abyssal' => 'Abyssal_Hood',
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
        'hood_yes1',
        'hood_yes2',
        'hood_yes3',
        'hood_no1'
    ];

    // You can use html!
    $marking_can = [
        'Hood can appear on the bottom or top jaw of the face of the dragon, but it has to appear on the neck as well. It cannot appear on just the head or just the neck.',
        ' Is allowed up to a 12 value and saturation point gradient difference inside the marking. This gradient cannot blend into the base coat.',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing like inkwell or other markings.'
    ];

    $marking_must = [
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'hood_1', 'alt' => '...', 'label' => 'SB-0885', 'caption' => 'Designer: @Voidtech'],
        ['image_name' => 'hood_2', 'alt' => '...', 'label' => 'SB-0765', 'caption' => 'Designer: @StarCrossedDancing'],
        ['image_name' => 'hood_3', 'alt' => '...', 'label' => 'SB-0803', 'caption' => 'Designer: @TipToeToads'],
    ];
?>

@include('design_guides.templates._gene_template')