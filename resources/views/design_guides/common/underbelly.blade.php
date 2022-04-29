<?php
    $marking_icon = 'Common_Underbelly';
    $marking_name = 'Underbelly';
    $marking_code = 'nUn/UnUn';
    $marking_type = 'Variable';
    $marking_desc = "A solid marking on the underside of a dragon. It has the ability to reach up along the underside of the wings as well. Underbelly is shades of dark, or light, and is a common marking seen on many dragons. The marking has a sibling marking called 'Pangare'.";
    $layers_above_or_below = '';
    $layers_above = '';
    $layers_below = '';
    $affected_by = '';
    $can_affect = '';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Underbelly-Pangare',
        'Warden' => 'Warden_Underbelly-Pangare',
        'Greater' => 'Gemp_Underbelly-Pangare',
        'Ravager' => 'Ravager_Underbelly-Pangare',
        'Stalker' => 'Stalker_Underbelly-Pangare',
        'Ridgewalker' => 'Ridgewalker_Underbelly',
        'Abyssal' => 'Abyssal_Underbelly-Pangare',
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
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'underbelly_yes1',
        'underbelly_yes2',
        'underbelly_yes3',
        'underbelly_yes4',
        'underbelly_yes5',
        'underbelly_yes6',
        'underbelly_no2',
        'underbelly_no1'
    ];

    // You can use html!
    $marking_can = [
        ' Is allowed a 12 value and saturation point gradient difference inside the marking',
        'Can appear above or below Pangare, if Pangare is present.',
        'The marking can be disconnected in very small portions.',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Holes and large cut outs are not allowed',    
    ];

    $marking_must = [
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'under_1', 'alt' => '...', 'label' => 'SB-0809', 'caption' => 'Designer: @Xanowa'],
        ['image_name' => 'under_2', 'alt' => '...', 'label' => 'SB-0862', 'caption' => 'Designer: @DalekFell'],
        ['image_name' => 'under_3', 'alt' => '...', 'label' => 'SB-0783', 'caption' => 'Designer: @Jendeelinn'],
    ];
?>

@include('design_guides.templates._gene_template')