<?php
    $marking_icon = 'Rare_Circuit';
    $marking_name = 'Circuit';
    $marking_code = 'nCi/CiCi';
    $marking_desc = "Circuit is made up of thin lines that connect with circles or dots at the end of the lines. It mimics a circuit board. This marking was suggested by Oreleth.";
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
        'Ridgewalker'=> 'Ridgewalker_Range',
        'Abyssal' => 'Abyssal_Range',
    ];

    // Use yes or no
    $edge_solid = 'yes';
    $edge_feathered = 'no';
    $edge_border = 'yes';
    $edge_textured = 'no';
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
        'circuit_yes1',
        'circuit_yes2',
        'circuit_yes3',
        'circuit_no1',
        'circuit_no2',
        'circuit_no3'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear to blend into the base.',
        'Circuit is made up of thin lines with small circles or dots at the end of the lines.',
        'The dots at the end of the lines can be filled in or not.',
        'The lines and dots, and circles, can be different colors from each other (the line be one color, dots be another, and circles a third).',  

    ];

    $marking_cannot = [
        'Cannot be too thick, the lines should be thin and connected.', 
        'Circuit cannot have rounded corners - it must be angular. Only the dots/circles can be rounded.',
         
    ];

    $marking_must = [
        'Recessive: Appear in 3 zones only.',
        'Dominanit: Can appear in all zones.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer:'],
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer:'],
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer:'],
    ];
?>

@include('design_guides.templates._gene_template')