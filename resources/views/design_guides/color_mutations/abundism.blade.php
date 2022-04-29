<?php
    $marking_icon = 'Color_mutations_Abundism';
    $marking_name = 'Abundism';
    $marking_code = 'Null';
    $marking_type = 'Prime Modifier';
    $marking_desc = "A mutation that causes the markings to be black in coloration, or the base to pick from abundism sliders.";
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
    $edge_solid = 'no';
    $edge_feathered = 'no';
    $edge_border = 'no';
    $edge_textured = 'no';
    $edge_mottled = 'no';
    $edge_soft = 'no';
    $color_darker = 'no';
    $color_lighter = 'no';
    $color_natural = 'no';
    $edge_blurred = 'no';
    $edge_gradient = 'no';
    $color_any = 'no';
    $edge_blending = 'no';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'abundism_yes',
        'abundism_yes2',
        'abundism_no',
        'abundism_no2'
    ];

    // You can use html!
    $marking_can = [
        'Abundism makes markings dark, but not necessarily black. You can make them shades of black/dark grey, or just very dark shades of the color you use (very dark red, etc)',
        'Abundism can cause the base coat to be picked from vanta sliders or the melanistic section of the base coat you have (i.e. an umber coat, you can use melanistic umber sliders, vanta sliders, or just umber sliders).',
        'If a color modifier is present, Abundism coat color can be picked from the abundism sliders.', 
        'If using abundism on the base coat, the markings do not have to be abundism black/grey etc.',
    ];

    $marking_cannot = [
        'This mutation cannot hide the markings.',
    ];

    $marking_must = [
       'There is no dominant form of this mutation.',
       'All markings except tobiano need to be darker shades of their intended colors (i.e. no white or bright markings) unless you are using abundism on the base color.',
       'Markings must be present on the design.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'Aewa', 'alt' => '...', 'label' => 'First Slide Label', 'caption' => 'Lorem ipsum'],
        ['image_name' => 'Aewa', 'alt' => '...', 'label' => 'Second Slide Label', 'caption' => '???'],
        ['image_name' => 'Aewa', 'alt' => '...', 'label' => 'Third Slide Label', 'caption' => 'Something'],
    ];
?>

@include('design_guides.templates._gene_template')