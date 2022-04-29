<?php
    $marking_icon = 'Legendary_Torch';
    $marking_name = 'Torch';
    $marking_code = 'nTh/ThTh';
    $marking_type = 'Variable';
    $marking_desc = "Torch is a three layer marking that appears on the tail, neck, and wing tips. While mostly free form, it needs to be in the ranges provided. Suggested by KJ.";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Torched',
        'Warden' => 'Warden_Torched',
        'Greater' => 'Gemp_Torched',
        'Ravager' => 'Ravager_Torched',
        'Stalker' => 'Stalker_Torched',
        'Ridgewalker'=> 'Ridgewalker_Torched',
        'Abyssal' => 'Abyssal_Torched',
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
    $color_any = 'sometimes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'torch_yes1',
        'torch_yes2',
        'torch_yes3',
        'torch_no1',
        'torch_no2',
        'torch_no3'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear to blend into the base.',
        'Torch can be natural colors, or any color.',
        'The top two layers cannot be the same color as the bottom layer - however they can be different shades from the bottom color. I.e.: A black layer one with lighter greys on layers 2 and 3.',
        'Torch can have edges that swirl or appear jagged.',

    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Cannot appear to be iridescent.', 
        'Cannot be used to extend other markings beneath it - markings beneath it should be different colors or shades of that color.',        
    ];

    $marking_must = [
        'Recessive: Must appear in the recessive zone.',
        'Dominant: Can appear in the dominant zone and a fourth layer may be present.',
        'Torch must have three layers. Layer one must be darker thant the base coat or black. Layers two and three may be any colors, and may be different colors from each other or shades of the same color.',
        'Torch has to flow horizontally along the dragon.',
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