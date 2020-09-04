<?php
    $marking_icon = 'Uncommon_Bokeh';
    $marking_name = 'Bokeh';
    $marking_code = 'nBk/BkBk';
    $marking_desc = "The appeal for this marking comes from the similarities it holds with the dapple gene on horses. Bokeh appears as circles of different shades of color from the base coat, in varying sizes or minor shape differences. ";
    $layers_above_or_below = 'Pangare, Stained, Sable, Roan, Cloud';
    $layers_above = ' None';
    $layers_below = 'Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Points, Python, Rimmed, Ringed,
                             Scaled, Trailing, Underbelly, Banded, Brindled, Dipped,
                            Toxin, Glass, Luminescent, Petal, Aurora, Shimmer, Masked, Skink, Crested, Inkwell, Pigeon, Plasma, Rosettes, Shaped, Marbled, Merle, Tabby Tobiano,
                    Appaloosa, Blooded, Eyes, Lustrous, Painted, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra';
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
    $edge_solid = 'no';
    $edge_feathered = 'yes';
    $edge_border = 'no';
    $edge_textured = 'yes';
    $edge_mottled = 'no';
    $edge_soft = 'no';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'yes';
    $edge_gradient = 'yes';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'bokeh_yes',
        'bokeh_yes2',
        'bokeh_no',
        'bokeh_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 20 point value and saturation point gradient difference inside the marking.',
        'Is allowed, and expected, to fade into the base coat, or other markings like stained.',
    ];

    $marking_cannot = [
        'Create dark gradients like stained (often seen in examples of horses with dappling)',
    ];

    $marking_must = [
        'Recessive: appears in all zones',
        'Dominant: Appears in all zones, but also can be any single color aside from natural colors or darker/lighter of the base.'
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