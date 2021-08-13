<?php
    $marking_icon = 'Mythic_Aether_Marked';
    $marking_name = 'Aether Marked';
    $marking_code = 'nAm/AmAm';
    $marking_desc = "Dragons with this marking are thought to be cursed, or even imbued, with darker magic than your average dragon. The gene presents as an indented glowing scar that varies in size and thickness.";
    $layers_above_or_below = 'Blanket, Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Points, Pangare, Python, Rimmed, Ringed, Sable, Scaled, Stained, Trailing, Underbelly, Banded, Brindled, Dipped, Marbled, Smoke, Roan, Tabby, Toxin, Glass, Luminescent, Petal, Aurora, Shimmer, Masked, Skink, Pigeon, Plasma, Rosettes, Shaped, Blooded, Eyes, Lustrous, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra ';
    $layers_above = 'Bokeh, Cloud, Merle';
    $layers_below = 'Crested, Inkwell, Tobiano, Appaloosa, Painted, ';
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
    $edge_border = 'yes';
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
        'aethermarked_yes',
        'aethermarked_yes2',
        'aethermarked_no',
        'aethermarked_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.',
        'The border outline can be darker or lighter than what it it sits over.',
        'The color can be any color, but must have a subtle glow.',
        'Is allowed a slight shine to the marking.',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
    ];

    $marking_must = [
        'Recessive: May appear in all zones but cannot cover more than 50% of the design.',
        'Dominant: May appear in all zones but cannot cover more than 75% of the design.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'aether_1', 'alt' => '...', 'label' => 'SB-0737', 'caption' => 'Designer: @HigureGinhane'],
        ['image_name' => 'aether_2', 'alt' => '...', 'label' => 'SB-0006', 'caption' => 'Designer: @Tromacom + @Lairai'],
        ['image_name' => 'aether_3', 'alt' => '...', 'label' => 'SB-0067', 'caption' => 'Designer: @Mloking'],
    ];
?>

@include('design_guides.templates._gene_template')