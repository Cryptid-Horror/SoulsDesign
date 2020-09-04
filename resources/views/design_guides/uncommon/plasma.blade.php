<?php
    $marking_icon = 'Uncommon_Plasma';
    $marking_name = 'Plasma';
    $marking_code = 'nPs/PsPs';
    $marking_desc = "Plasma is said to be gifted to dragons who harness the power of lightning, or have been struck by lightning. The marking appears as a think cracking marking along the dragon's body, spreading out like a lightning strike.";
    $layers_above_or_below = 'Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Marbled, Pangare, Points, Python, Rimmed, Ringed, Sable, Scaled, Stained, Tabby, Trailing, Underbelly, Banded, Brindled, Dipped, Mist, Roan, Toxin, Glass, Luminescent, Petal, Aurora, Shimmer, Masked, Skink, Pigeon, Plasma, Rosettes, Shaped, Blooded, Eyes, Lustrous, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra';
    $layers_above = 'Bokeh, Cloud, Merle';
    $layers_below = 'Crested, Inkwell, Tobiano, Appaloosa,  Painted,';
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
    $edge_blurred = 'no';
    $edge_gradient = 'no';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'plasma_yes',
        'plasma_yes2',
        'plasma_no',
        'plasma_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.',
        'Plasma can start in up to three starting locations, or can extend from one zone into the next one freely',
        'Thickness and thinness of the marking can vary, so long as it is very "lightning" or "spiderweb" looking in design.'
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'The marking cannot be used to mimic trailing, banded, or pigeon.',
    ];

    $marking_must = [
        'Recessive may appear in all zones',
        'Dominant may appear in all zones, as well as be any single color without a color modifier gene present',
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