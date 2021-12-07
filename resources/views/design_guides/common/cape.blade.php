<?php
    $marking_icon = 'Common_Cape';
    $marking_name = 'Cape';
    $marking_code = 'nCa/CaCa';
    $marking_desc = "A marking on the dragon's chest that expands around the wing shoulders to drape over the back of the wings. This marking was suggest by KJ.";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Cape',
        'Warden' => 'Warden_Cape',
        'Greater' => 'Gemp_Cape',
        'Ravager' => 'Ravager_Cape',
        'Stalker' => 'Stalker_Cape',
        'Ridgewalker' => 'Ridgewalker_Cape',
        'Abyssal' => 'Abyssal_Cape',
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
    $edge_blurred = 'sometimes';
    $edge_gradient = 'no';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'cape_yes1',
        'cape_yes2',
        'cape_yes3',
        'cape_no1',
        'cape_no2',
        'cape_no3'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear to blend into the base.',
        'Cape is consisted of two layers, a base layer and an upper layer.', 
        'The lower cape layer must be full connected, but can have up to two small to mid sized holes around the chest region. It cannot have holes on the wing itself.',
        'The upper layer can be disconnected, but cannot cover all of the lower layer. At most it is allowed to cover 75% of the lower layer.',
        'Both layers can have blurred/soft edges, but cannot be gradiented. If you use blurred/soft edging you must show solid edges, whether textured or not, as well.',
        'On creatures/dragons without wings, cape will cover the front legs.',

    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Only two small to mid sized holes are allowed in Cape.',
        'All edges cannot be soft or blurred, some edges must be solid or textured.',    
    ];

    $marking_must = [
        'Recessive: ???',
        'Dominant: ???',
        'Cape must have two layers to it.',
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