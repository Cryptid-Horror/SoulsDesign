<?php
    $marking_icon = 'Mythic_Lepir';
    $marking_name = 'Lepir';
    $marking_code = 'nLe/LeLe';
    $marking_type = 'Variable or Override';
    $marking_desc = "Lepir can present in two different ways, either as 'bars' connected together and filled in with a color, like that of a butterfly wing, or as an overwritten geno that is allowed to appear as a chosen fish, reptile, butterfly, or moth design.";
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
        'lepir_yes1',
    
    ];

    // You can use html!
    $marking_can = [
        'Is allowed to blend into 4 different colors in the marking, and is allowed to fade into the base coat, or what it sits over.',
        '"Complex Lepir" may present as you choosing any reptile, fish, butterfly, or moth to recreate its design on your dragon. It should match closely, but you are free to take artistic liberities as well.',
        'Simple Lepir may appear as lines that create the shapes of butterfly wings, or may be shapes with lines around them. these lines may be teardrops, squares, etc. The lines around the shape may be solid, soft, blurred, or gradient.',
        'Rare, Mythic and Legendary markings may appear over complex lepir.',
    ];

    $marking_cannot = [
        'Common and uncommon markings may not present over Complex Lepir.',
        'Complex lepir must match your reference closely, and only come from the approved types of animals.',
    ];

    $marking_must = [
        'Recessive: Simple lepir may cover up to 70% of the design.',
        'Dominant: Simple Lepir may cover up to 90% of the design, and may have a dusted-esque or sparkle like shapes on the lepir dusted. It may also have two additional colors to blend into. Dominant form may also have an effect like blazer, where dust comes off the dragons.',
        'The reference for your complex lepir must be provided in design review.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'lepir_1', 'alt' => '...', 'label' => 'SB-0814', 'caption' => 'Designer: @Rhith'],
        ['image_name' => 'lepir_2', 'alt' => '...', 'label' => 'SB-0637', 'caption' => 'Designer: @Cameil'],
        ['image_name' => 'lepir_3', 'alt' => '...', 'label' => 'SB-0721', 'caption' => 'Designer: Alriandi'],
    ];
?>

@include('design_guides.templates._gene_template')