<?php
    $marking_icon = 'Uncommon_Pigeon';
    $marking_name = 'Pigeon';
    $marking_code = 'nPg/PgPg';
    $marking_desc = "Pigeon is a gene that flows on the wings of dragons, and appears as bar like shapes. One wonders how this marking got into the gene pool of dragons. It's presentation on dragons without wings is contested greatly, as it simply appears like the banded gene. However, small nuances to the gene's behavior presenting on wingless species, tend to lean it more towards pigeon.";
    $layers_above_or_below = 'Blanket, Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf,Masked, Skink, Pangare, Points, Python, Rimmed, Ringed, Plasma, Rosettes, Shaped, Sable, Scaled, Stained, Trailing, Underbelly, Banded, Brindled, Dipped, Marbled, Roan, Tabby, Toxin, Glass, Luminescent, Petal, Aurora, Shimmer, Blooded, Eyes, Lustrous, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra';
    $layers_above = 'Bokeh, Cloud, Merle, ';
    $layers_below = ' Crested, Inkwell, Tobiano, Appaloosa, Painted';
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
        'pigeon_yes',
        'pigeon_yes2',
        'pigeon_no',
        'pigeon_no2',
        'pigeonwingless',
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.',
        'If the Seraph (iracus), or Cherubian mutations are present, Pigeon may present on these mutations.',
        'If the dragon is feathered, the marking may present on the feathers of the dragon',
        'Can present on both the bottom and top of the wing, or just one or the other',
        'Pigeon does not have to reach all the way down the wing, and can be broken up into small Bars following the same path.'

    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Pigeon cannot be horizontal',
        'Pigeon cannot bleed onto the body of winged dragons', 
        'Dragons with wings must present the marking on their wings',
    ];

    $marking_must = [
        'Appear on the wings of a dragon, if no wings are present, pigeon may appear as vertical, or diagonal stripes on the body in up to 3 zones',
        'Recessive appears as a flat color.',
        'Dominant can be iridescent and up to 3 different colors without the presence of a color modifier gene.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'pig_1', 'alt' => '...', 'label' => 'SB-0785', 'caption' => 'Designer: @Xanowa'],
        ['image_name' => 'pig_2', 'alt' => '...', 'label' => 'SB-0916', 'caption' => 'Designer: @Sashafras'],
        ['image_name' => 'pig_3', 'alt' => '...', 'label' => 'SB-0155', 'caption' => 'Designer: @lilwyverngirl'],
    ];
?>

@include('design_guides.templates._gene_template')