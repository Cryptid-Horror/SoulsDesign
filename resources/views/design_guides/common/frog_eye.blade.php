<?php
    $marking_icon = 'Common_Frog_Eye';
    $marking_name = 'Frog Eye';
    $marking_code = 'nFe/FeFe';
    $marking_desc = "Marking Origin: 2019 Genetics Contest; Submitted by user Athena-Tivnan
Frog Eye was a strange marking to pop up, in fact it frightened most people for its direct appearance to a frog’s actual eye. What makes this marking so different from the Eyes gene though, is its limitations and the fact that it always appears as a circle, and can never appear as an oval or a teardrop.";
    $layers_above_or_below = ' Blanket, Boar, Collar, Dunstripe, Dusted, Hood, Leaf, Masked, Pangare, Points, Python, Rimmed, Ringed, Sable, Scaled, Stained, Skink, Trailing, Underbelly, Banded, Crested, Plasma, Border, Dipped, Pigeon, Roan, Rosettes, Shaped, Tabby, Toxin, Glass, Luminescent, Lustrous, Petal, Aurora, Iridescent, Lepir, Shimmer, Blooded, Eyes, Vignette, Aether Marked, Gemstone, Rune, Triquetra';
    $layers_above = 'Bokeh, Cloud, Marbled, Merle, Smoke, Brindled';
    $layers_below = 'Inkwell, Tobiano, Appaloosa, Painted';
    $affected_by = 'Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Aurora, Iridescent, Border, Dripping';
    $can_affect = 'None';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Range',
        'Warden' => 'Warden_Range',
        'Greater' => 'Gemp_Range',
        'Ravager' => 'Ravager_Range',
        'Stalker' => 'Stalker_Range',
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
    $edge_blurred = 'yes';
    $edge_gradient = 'no';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'frogeye_yes',
        'frogeye_yes2',
        'frogeye_no',
        'frogeye_no2'
    ];

    // You can use html!
    $marking_can = [
        'The sizing of the three components to this marking can differ, so long as all the parts are there and visible on each "eye."',
        ' A gradient is allowed to radiant from the pupil into the iris, but it cannot be the same color as the pupil or blend into the pupil.',
    ];

    $marking_cannot = [
        'Frog Eye may not be oval, tear drop, etc in shape. It must appear as a circle.',
    ];

    $marking_must = [
        'Recessive: Can appear in 3 zones',
        'Dominant: Can appear in all zones',
        ' Must have three seperated colors, one for the pupil, iris, and the border around the marking itself. The border must be the darkest color.',
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