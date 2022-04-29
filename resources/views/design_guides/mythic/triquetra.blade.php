<?php
    $marking_icon = 'Mythic_Triquetra';
    $marking_name = 'Triquetra';
    $marking_code = 'nTri/TriTri';
    $marking_type = 'Variable';
    $marking_desc = "Originally thought to not be a gene, but rather someone painting designs on their dragon, this gene creates markings that look like celtic knots, symbols, and other tribal style markings.";
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
    $edge_blurred = 'no';
    $edge_gradient = 'no';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'triquetra_yes',
        'triquetra_yes2',
        'triquetra_no',
        'triquetra_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may blend into the base.',
        'This marking is allowed to fade into the base coat.',
        'This marking is allowed to have a thin outline or border that can fade into the base coat, can be darker/lighter than the marking or the base coat.',
        'Triquetra can appear as unique patterns, or real world examples.',
        'Triquetra can be clustered, in patterns like swirls/lines/to make up shapes/etc. It can be connected, or disconnected.',
        'Triquetra is allowed to gradient from one color to another one.',
    ];

    $marking_cannot = [
        'Triquetra should not be used to spell out vulgar language, nor be copied from copywritten sources (games, film, other artists, etc)',
        'Triquetra should not appear like rune.',
    ];

    $marking_must = [
        'Recessive: Triquetra can appear anywhere on the body, but cannot cover more than 50% of the design.',
        'Dominant: Can appear anywhere on the body, not cover more than 80% of the design, but can also be iridescent.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'tri_1', 'alt' => '...', 'label' => 'SB-0011', 'caption' => 'Designer: @Kre-Kael'],
        ['image_name' => 'tri_2', 'alt' => '...', 'label' => 'SB-0548', 'caption' => 'Designer: @DalekFell'],
        ['image_name' => 'Aewa', 'alt' => '...', 'label' => 'Third Slide Label', 'caption' => 'Something'],
    ];
?>

@include('design_guides.templates._gene_template')