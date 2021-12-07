<?php
    $marking_icon = 'Legendary_Mermaid';
    $marking_name = 'Mermaid';
    $marking_code = 'nMer/MerMer';
    $marking_desc = "A pearlescent scaled marking that can cover a portion or the full body of the dragon based on if it is recessive or dominant. Suggested by KJ.";
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
    $edge_border = 'no';
    $edge_textured = 'no';
    $edge_mottled = 'no';
    $edge_soft = 'yes';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'no';
    $edge_gradient = 'yes';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'mer_yes1',
        'mer_yes2',
        'mer_yes3',
        'mer_no1',
        'mer_no2',
        'mer_no3',
    ];

    // You can use html!
    $marking_can = [
        'Mermaid is allowed to be a single color, or it may gradient from one color to another in recessive. In Dominant it may have up to 3 color gradient.',
        'Mermaid is allowed to gradient into the base.', 
        'Mermaid may have shapes such as thick crescents, diamonds, tear drops, or fish scale shapes.',
        'Mermaid colors may be dark or bright.',
        'Mermaid may sit in the range of another marking.',


    ];

    $marking_cannot = [
        'Mermaid cannot be thin crescents, dots, or squares.',
        'Mermaid is not truly iridescent. It may only appear iridescent if Iridescent is present.',         
    ];

    $marking_must = [
        'Recessive: May appear in all zones with 1 color gradient and allowance to gradient into the base.',
        'Domanint: May appear in all zones with 3 color gradients and allowance to gradient into the base.',
        'Markings beneath mermaid must be visible, or sit ontop of mermaid.',
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