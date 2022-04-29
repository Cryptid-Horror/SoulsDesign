<?php
    $marking_icon = 'Common_Trailing';
    $marking_name = 'Trailing';
    $marking_code = 'nTr/TrTr';
    $marking_type = 'Variable';
    $marking_desc = "Trailing is a horizontal marking that appear as lines flowing along the body. Along the tip if the tail the marking can appear vertical. On the wings, the marking must appear horizontal.";
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
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'trailing_yes',
        'trailing_yes2',
        'trailing_no',
        'trailing_no2'
    ];

    // You can use html!
    $marking_can = [
        'Trailing in recessive may have a 12 point value or saturation gradient, however in dominant the marking may blend between two different colors (and then even blend into the base if utilizing gradient).',
        'Trailing may blend into the base coat, or what it sits over.',
        'Trailing can appear as broken up lines, but should not be so broken up that it appears like boar. The lines should still be clearly lines, and not appear as ovals or circles.',
        'The natural border can fade and blend with the rest of the edges.',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
    ];

    $marking_must = [
        'Recessive: Can appear in all zone',
        'Dominant: Can be any single color, without the presence of color modifiers. (Does not mean it can be rainbow, it has to be one single color, i.e. red or green)
In dominant, this marking can blend between to colors.',
        'At least three lines must be present, cannot be in the same spots solely as skink would appear.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'trail_1', 'alt' => '...', 'label' => 'SB-0773', 'caption' => 'Designer: @StarDestiny24'],
        ['image_name' => 'trail_2', 'alt' => '...', 'label' => 'SB-0827', 'caption' => 'Designer: @Lairai'],
        ['image_name' => 'trail_3', 'alt' => '...', 'label' => 'SB-0984', 'caption' => 'Designer: @Nigh1Shadow'],
    ];
?>

@include('design_guides.templates._gene_template')