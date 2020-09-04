<?php
    $marking_icon = 'Uncommon_Metallic';
    $marking_name = 'Metallic';
    $marking_code = 'nMe/MeMe';
    $marking_desc = "A gene that has the claws, horns, spikes, and other 'special' zones of a dragon's design (fur on the elbows of greater emperors, scales on the legs/neck/wings of the Sapiere, etc) to be any color, and shiny, as if they are metallic. Dragons with gene are said to have a special place in their heart for especially shiny things... ";
    $layers_above_or_below = 'All Markings except those that must be above it.';
    $layers_above = 'None';
    $layers_below = 'Inkwell, Tobiano, Painted, Appaloosa';
    $affected_by = 'Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Aurora, Iridescent, Border, Dripping';
    $can_affect = 'None';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Metallic',
        'Warden' => 'Warden_Metallic',
        'Greater' => 'Gemp_Metallic',
        'Ravager' => 'Ravager_Metallic',
        'Stalker' => 'Stalker_Metallic',
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
    $edge_blurred = 'yes';
    $edge_gradient = 'yes';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'metallic_yes',
        'metallic_yes2',
        'metallic_no',
        'metallic_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking.',
        'Can gradient or blend between colors smoothly, or have a solid edge as it presents multiple colors',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
    ];

    $marking_must = [
        'Recessive: Can be up to three colors and affect all special features (horns/etc)',
        'Dominant: Can be up to five colors and affect all special features (horns/etc)',
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