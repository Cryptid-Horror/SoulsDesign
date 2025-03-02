<?php
    $marking_icon = 'placeholder';
    $marking_name = 'Melanism';
    $marking_code = 'Vv/VV';
    $marking_type = 'Prime Modifier';
    $marking_desc = "A modifier that is created by having vanta pass along with other coat colors. This causes bases to be darker, but not neceassirly the markings. ";
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
        'melanism_yes',
        'melanism_yes2',
        'melanism_no',
        'melanism_no2'
    ];

    // You can use html!
    $marking_can = [
        'Markings can be darker than usual, but is not necessary for the design, you can still have bright markings.',
    ];

    $marking_cannot = [
        'You cannot make the design completely black if they are markings present.', 
        'You cannot make markings that are not allowed to be black in black coloration',
        'Melanism cannot pass to vanta.',
    
    ];

    $marking_must = [
       'There is no difference between having dominant or recessive vanta on a melanistic geno.',
       'Melanistic coats must come off the melanistic sliders',
       'Markings must be present on the design.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
        'melanistic_slider',
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'Aewa', 'alt' => '...', 'label' => 'First Slide Label', 'caption' => 'Lorem ipsum'],
        ['image_name' => 'Aewa', 'alt' => '...', 'label' => 'Second Slide Label', 'caption' => '???'],
        ['image_name' => 'Aewa', 'alt' => '...', 'label' => 'Third Slide Label', 'caption' => 'Something'],
    ];
?>

@include('design_guides.templates._gene_template')