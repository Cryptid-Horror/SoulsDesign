<?php
    $marking_icon = 'Uncommon_Crested';
    $marking_name = 'Crested';
    $marking_code = 'nCr/CrCr';
    $marking_type = 'Variable';
    $marking_desc = "A marking that creates a bright patch of color on the throat and neck of the dragon, the pattern can be iridescent in color and must be in bright coloration. It is noted for its similarities  in the birds of paradise around the Radiant empire.";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Crested',
        'Warden' => 'Warden_Crested',
        'Greater' => 'Gemp_Crested',
        'Ravager' => 'Ravager_Crested',
        'Stalker' => 'Stalker_Crested',
        'Ridgewalker' => 'Ridgewalker_Crested',
        'Abyssal' => 'Abyssal_Crested',
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
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'crested_yes',
        'crested_yes2',
        'crested_no',
        'crested_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed to blend between any number of colors, bright or dark.',
        'Is allowed to be flat coloration, or iridescent, but if multiple colors, must gradient smoothly.',
        'Is allowed to be any color, and can gradient even if not iridescent.',
        'Can blend into the base/marking it sits over.',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Holes, breaks, cutouts, or floating portions of the marking are not allowed. The marking must be fully connected.',
    ];

    $marking_must = [
        'Dominant form gets more range.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'crest_1', 'alt' => '...', 'label' => 'SB-0832', 'caption' => 'Designer: @DartingDragon-ARPG'],
        ['image_name' => 'crest_2', 'alt' => '...', 'label' => 'SB-0782', 'caption' => 'Designer: @FlawedEmperor'],
        ['image_name' => 'crest_3', 'alt' => '...', 'label' => 'SB-0814', 'caption' => 'Designer: @Rhith'],
    ];
?>

@include('design_guides.templates._gene_template')