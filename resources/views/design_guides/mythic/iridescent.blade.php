<?php
    $marking_icon = 'Mythic_Iridescent';
    $marking_name = 'Iridescent';
    $marking_code = 'nIr/IrIr';
    $marking_type = 'Modifier';
    $marking_desc = "An elusive gene that makes the coat of a dragon shine, mutating it into iridescent colors, including the markings.";
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
    $edge_solid = 'no';
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
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'iridescent_yes',
        'iridescent_yes2',
        'iridescent_no',
        'iridescent_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may blend into the base.',
        'Iridescent is made up of multiple colors to create a colorful shine on the dragon. Up to 4 colors can be used to make the iridescent shine on the body and markings.',
        'Markings can be any color individually, but should adhere to their color rules, such as being lighter or darker, etc.',
        'Iridescent does not have to affect all markings, it can be on only a few, just the body, or just the markings/a single marking but not the coat color.',
        'Iridescent can affect markings like tobiano/painted/etc to make them shiny. Slight color changes to pull off the shine are fine (adding very light pinks/blues/lilacs/greens/etc to tobiano and its white coloration to make it appear shiny are fine) but it cannot mutate markings like Tobiano into colors they cannot be (Tobiano must be white.)',
    ];

    $marking_cannot = [
        'Iridescent must have a shine, it cannot be flat colored.',
    ];

    $marking_must = [
        'Recessive: Can alter the coat and all markings, coat colors must be picked off the Iridescent sliders, or used from the normal sliders and with an added iridescent shine.',
        'Dominant: Can alter the coat and all markings, coat colors can be any color regardless of the dragons genome, but must still have an iridescent shine.',
        'Iridescence must have a shine, it should not be overpowering so that it is hard to read the design. The Iridescence shine does not have to appear on everything, it can be minimal/reserved to muscles/specific areas. It just needs to be obviously present.', 
        'Iridescent shine has to be smoothly blended with no hard or soft edges.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
        'rainbow_normal', 'rainbow_pastel', 'rainbow_dark'
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'iri_1', 'alt' => '...', 'label' => 'SB-0962', 'caption' => 'Designer: @xXDartingDragonXx'],
        ['image_name' => 'iri_2', 'alt' => '...', 'label' => 'SB-0530', 'caption' => 'Designer: @Lilwyverngirl'],
        ['image_name' => 'iri_3', 'alt' => '...', 'label' => 'SB-0001', 'caption' => 'Designer: @Cryptid-Horror'],
    ];
?>

@include('design_guides.templates._gene_template')