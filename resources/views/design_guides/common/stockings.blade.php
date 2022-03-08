<?php
    $marking_icon = 'Common_Stockings';
    $marking_name = 'Stockings';
    $marking_code = 'nSo/SoSo';
    $marking_desc = "A gradient markings that covers the feet, legs, and shoulder/hips. This marking was suggested by Kazooi.";
    $layers_above_or_below = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Stockings',
        'Warden' => 'Warden_Stockings',
        'Greater' => 'Gemp_Stockings',
        'Ravager' => 'Ravager_Stockings',
        'Stalker' => 'Stalker_Stockings',
        'Ridgewalker' => 'Ridgwalker_Stockings',
        'Abyssal' => 'Abyssal_Stockings',
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
    $edge_blurred = 'no';
    $edge_gradient = 'yes';
    $color_any = 'no';
    $edge_blending = 'no';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'stockings_yes1',
        'stockings_yes2',
        'stockings_yes3',
        'stockings_no1',
        'stockings_no2',
        'stockings_no3'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may blend into the base.',
        'Can gradient over or under markings, except for stained which it must be beneath.',
        'While the range image says it has a minimum on all legs, Stockings can appear on any number of legs. Simply if it is on that leg, it needs to be in that minimum range.',

    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Holes and large cut outs are not allowed', 
        'Cannot appear to extend stained - Stockings must be a different color from stained, or at the very least a strong enough different shade from stained.',   
    ];

    $marking_must = [
        'Recessive: Must be natural color.',
        'Dominant: may be any single color.', 
        'This marking must appear in its minimum range else it will look like stained.',
        'This marking must sit below Stained.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer: '],
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer: '],
        ['image_name' => '', 'alt' => '...', 'label' => '', 'caption' => 'Designer: '],
    ];
?>

@include('design_guides.templates._gene_template')