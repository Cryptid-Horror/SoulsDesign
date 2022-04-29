<?php
    $marking_icon = 'Common_Specter';
    $marking_name = 'Specter';
    $marking_code = 'nOse/OseOse';
    $marking_type = 'Prime';
    $marking_desc = " Specter is a freeform marking that mimics oilslicks and inkblot tests. It is compromised of layers of color and is restricted to whites, greys, and blacks.";
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
    $edge_feathered = 'yes';
    $edge_border = 'no';
    $edge_textured = 'yes';
    $edge_mottled = 'yes';
    $edge_soft = 'yes';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'no';
    $edge_gradient = 'sometimes';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'sometimes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'specter_yes1',
        'specter_yes2',
        'specter_yes3',
        'specter_no1',
        'specter_no2',
        'specter_no3'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear to blend into the base.',
        'Specter can be any shade of grey, white, or black (excluding point value below 7).',
        'This marking can have a lighter or darker gradient beneath it - this is the only part of the marking that can gradient and it must be a gradient.', 
        'The gradient can be color dependant.',
        'The shape of this marking can mimic patterns found in oilslicks or inkblots. It is a very freeform marking with a lot of possibilities in shape.', 
        '3 layers are present in this marking. In Specter unaltered by a color modifier, the different layers can be colors allowed on specter. When a color modifier is affecting it however, the color must be from that modifiers allowed colors.',

    ];

    $marking_cannot = [
        'While mottling is allowed, it is allowed only sparingly around the edges to avoid looking like inkwell, tobiano,etc.',
        'Cannot be any color and if affected by a color modifier may only be shades of that color modifier.',
        'Canot mimic other markings like rosettes, tabby, etc.'
         
    ];

    $marking_must = [
        'Recessive: May be in 4 zones and have 3 layers of color.',
        'Dominant: May be in all zones and have 4 layers of color.',
        'Be only shades of black, white, and grey.'
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