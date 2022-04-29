<?php
    $marking_icon = 'Color_mutations_Blacklight';
    $marking_name = 'Blacklight';
    $marking_code = 'No Code';
    $marking_type = 'Prime Modifier';
    $marking_desc = "A mythic mutation that changes the coat color to black (or vanta color modifier if that color modifier is present) and makes the markings bright color regardless of their rules. Suggested by BreezyDraws.";
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
        'Ridgewalker' => 'Ridgewalker_Range',
        'Abyssal' => 'Abyssal_Range',
    ];

    // Use yes or no
    $edge_solid = 'yes';
    $edge_feathered = 'yes';
    $edge_border = 'yes';
    $edge_textured = 'yes';
    $edge_mottled = 'yes';
    $edge_soft = 'yes';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'yes';
    $edge_gradient = 'yes';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'blacklight_yes1',
        'blacklight_yes2',
        'blacklight_yes3',
        'blacklight_no1',
        'blacklight_no2',
        'blacklight_no3'
    ];

    // You can use html!
    $marking_can = [
        'Blacklight can turn the base to any shade of vanta, including melanism colors.',
        'If a color modifier if present the base can be any vanta shade off that color marking.',
        'Markings on the body can be hidden or, but one marking has to be present at a minimum.',
        'Markings on the body can be any BRIGHT color, such as neon colors.',

    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Only two small to mid sized holes are allowed in Cape.',
        'All edges cannot be soft or blurred, some edges must be solid or textured.',    
    ];

    $marking_must = [
        'One marking must be visible, but all marking can be visible.',
        'All markings shown must be bright and vibrant colors. They can be any color.',
        'The base coat must be pulled off vanta, melanism, or if a color modifier is present, vanta color markings.',
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