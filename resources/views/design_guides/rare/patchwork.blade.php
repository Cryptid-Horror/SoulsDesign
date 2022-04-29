<?php
    $marking_icon = 'Rare_Patchwork';
    $marking_name = 'Patchwork';
    $marking_code = 'nPw/PwPw';
    $marking_type = 'Variable';
    $marking_desc = "A colorful three layer marking that has up to 6 colors present. Each layer has 2 colors gradienting into each other. Patchwork needs to appear as geometric shapes. This marking was suggested by Nightshadow.";
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
        'patchwork_yes1',
        'patchwork_yes2',
        'patchwork_yes3',
        'patchwork_no1',
        'patchwork_no2',
        'patchwork_no3'
    ];

    // You can use html!
    $marking_can = [
        'Patchwork can appear as a marking with geometric shapes. Squares, Diamonds, circles etc.',
        'Patchwork can be any colors, so long as two colors are present on the shape. In total six colors needs to be present.', 
        'While all the shapes need to be the same, you can rotate and scale the shapes as needed.',
        'Shapes must overlay on each other to create three layers - however they can be in patches around the body.',

    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Cannot have multiple different shapes - all of Patchwork needs to be the same shape.',
        'Patchwork cannot be made to look like Mermaid or other markings - with the exception of shaped with which it may mimic the same shapes allowed.',
         
    ];

    $marking_must = [
        'Recessive: Can appear in three zones.', 
        'Dominant: Can appear in all zones and cover up to 75 of the body.',
        'Patchwork must have three layers present, with each layer having 2 colors fully blending/gradienting into each other.',
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