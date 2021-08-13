<?php
    $marking_icon = 'placeholder';
    $marking_name = 'Chimeric';
    $marking_code = 'Null';
    $marking_desc = "A mutation that causes two genetic strings to appear on the design in random patches.";
     $layers_above_or_below = 'Null';
    $layers_above = 'Null';
    $layers_below = 'Null';
    $affected_by = 'Null';
    $can_affect = 'Null';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Range',
        'Warden' => 'Warden_Range',
        'Greater' => 'Gemp_Range',
        'Ravager' => 'Ravager_Range',
        'Stalker' => 'Stalker_Range',
    ];

    // Use yes or no
    $edge_solid = 'no';
    $edge_feathered = 'no';
    $edge_border = 'no';
    $edge_textured = 'no';
    $edge_mottled = 'no';
    $edge_soft = 'no';
    $color_darker = 'no';
    $color_lighter = 'no';
    $color_natural = 'no';
    $edge_blurred = 'no';
    $edge_gradient = 'no';
    $color_any = 'no';
    $edge_blending = 'no';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'chimeric_yes',
        'chimeric_yes2',
        'chimeric_no',
        'chimeric_no2'
    ];

    // You can use html!
    $marking_can = [
        'This marking can hide markings through covering them with the other genome string.',
        'The easiest way to make this marking is to make both designs first, and then layer one over the other. Erase parts of the top design to create the patch like patterns. At least 25% of the second (or first) design needs to be present. Remember to save a version of both designs, in case you need to make corrections. Corrections will only ever be judged on the designs put together, we need the other two just to make sense of complex genomes and markings.',
        
    ];

    $marking_cannot = [
    ];

    $marking_must = [
       'There is no dominant form of this mutation.',
       'When submitting to design review, you need to include three images: The first genome design, the second, and the two combined after you have created the chimeric patch pattern.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'chimera_1', 'alt' => '...', 'label' => 'SB-0202', 'caption' => 'Designer: @KizuNova'],
        ['image_name' => 'chimera_2', 'alt' => '...', 'label' => 'SB-0825', 'caption' => 'Designer: @Rhith'],
        ['image_name' => 'chimera_3', 'alt' => '...', 'label' => 'SB-0246', 'caption' => 'Designer: @HigureGinhane'],
    ];
?>

@include('design_guides.templates._gene_template')