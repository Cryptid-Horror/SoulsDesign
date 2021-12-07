<?php
    $marking_icon = 'Mythic_Oilslick';
    $marking_name = 'Oilslick';
    $marking_code = 'nOol/OolOol';
    $marking_desc = " Oilslick is a freeform marking that mimics oilslicks and inkblot tests. It is compromised of layers of color and is allowed to be any color.";
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
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'oilslick_yes1',
        'oilslick_yes2',
        'oilslick_yes3',
        'oilslick_no1',
        'oilslick_no2',
        'oilslick_no3'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear to blend into the base.',
        'Oilslick can be any color, but cannot look like specter, petrified, or pearl. At least one of its color needs to be a selection not found on those markings allowed colors.',
        'This marking can have a lighter or darker gradient beneath it - this is the only part of the marking that can gradient and it must be a gradient.', 
        'The gradient can be color dependant, or any color.',
        'The shape of this marking can mimic patterns found in oilslicks or inkblots. It is a very freeform marking with a lot of possibilities in shape.', 
        '3 layers are present in this marking. In Oilslick unaltered by a color modifier, oilslick can be any color. When a color modifier is affecting it however, the color must be from that modifiers allowed colors.',
        
    ];

    $marking_cannot = [
        'While mottling is allowed, it is allowed only sparingly around the edges to avoid looking like inkwell, tobiano,etc.',
        'Can be any color, but one color must be not found on any specter, petrified, or pearl color allowances.',
        'Canot mimic other markings like rosettes, tabby, etc.'
         
    ];

    $marking_must = [
        'Recessive: May be in 4 zones and have 3 layers of color.',
        'Dominant: May be in all zones and have 4 layers of color.',
        'Can be any color, but at least one color must be a color not found on specter, petrified, or pearl.'
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