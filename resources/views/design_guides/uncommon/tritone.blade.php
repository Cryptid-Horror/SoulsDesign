<?php
    $marking_icon = 'Uncommon_Tritone';
    $marking_name = 'Tritone';
    $marking_code = 'nTt/nTt';
    $marking_desc = "A marking much like duotone, but adds up to two colors instead of one. This marking was suggested by Nightshadow.";
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
    $edge_solid = 'no';
    $edge_feathered = 'no';
    $edge_border = 'no';
    $edge_textured = 'no';
    $edge_mottled = 'no';
    $edge_soft = 'no';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'yes';
    $edge_gradient = 'yes';
    $color_any = 'no';
    $edge_blending = 'no';
    $color_dependant = 'sometimes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'tritone_yes1',
        'tritone_yes2',
        'tritone_yes3',
        'tritone_no1',
        'tritone_no2',
        'tritone_no3'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear to blend into the base.',
        'Tritone adds up to two extra colors to a marking - when duotone is present three extra colors can be present.',
        'Tritone is not color dependant, so unless modifier by a color marking it will need to be a natural color. The two colors can be two shades of the same marking, or seperate colors.',
        'Tritone has to blend into the color it is effecting - so if you use it on blanket, and blanket is black, and you use grey and white for tritone, your colors will need to blend together.', 
        'Tritone can affect the wing membrane, and is allowed to gradient from one color to another.',
        'When affected by a color modifier, tritone is allowed to have one of its selected colors affected or both.',
        
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Tritone cannot make markings blend int othe base coat that are not allowed to blend into the base coat, i.e. blanket, underbelly, etc.',
        'Tritone cannot be on extra color - two extra colors must be present.',
         
    ];

    $marking_must = [
        'Recessive: Two natural colors must be present.',
        'Dominant: Any two colors must be present.',
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