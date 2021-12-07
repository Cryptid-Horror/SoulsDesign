<?php
    $marking_icon = 'Rare_Pearl';
    $marking_name = 'Pearl';
    $marking_code = 'nOpe/OpeOpe';
    $marking_desc = " Pearl is a freeform marking that mimics oilslicks and inkblot tests. It is compromised of layers of color and is allowed pastel colors, whites, and light greys.";
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
        'pearl_yes1',
        'pearl_yes2',
        'pearl_yes3',
        'pearl_no1',
        'pearl_no2',
        'pearl_no3'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear to blend into the base.',
        'Pearl can be any shade of white, light greys, or pastel colors. A pastel slider is provided in this guide, but you do not need to select your colors directly from it. Your colors just need to be pastel.',
        'This marking can have a lighter or darker gradient beneath it - this is the only part of the marking that can gradient and it must be a gradient.', 
        'The gradient can be color dependant.',
        'The shape of this marking can mimic patterns found in oilslicks or inkblots. It is a very freeform marking with a lot of possibilities in shape.', 
        '3 layers are present in this marking. In Pearl unaltered by a color modifier, the different layers can be colors allowed on Pearl. When a color modifier is affecting it however, the color must be from that modifiers allowed colors and must remain pastel in color.',
        
    ];

    $marking_cannot = [
        'While mottling is allowed, it is allowed only sparingly around the edges to avoid looking like inkwell, tobiano,etc.',
        'Cannot be any color and if affected by a color modifier may only be shades of that color modifier in pastel form.',
        'Canot mimic other markings like rosettes, tabby, etc.'
         
    ];

    $marking_must = [
        'Recessive: May be in 4 zones and have 3 layers of color.',
        'Dominant: May be in all zones and have 4 layers of color.',
        'Be shades of white, light grey, and pastels. A slider is provided in this guide but you do not need to use the slider - so long as your color remaind light and pastel.'
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