<?php
    $marking_icon = 'Rare_Vignette';
    $marking_name = 'Vignette';
    $marking_code = 'nVi/ViVi';
    $marking_desc = "Vignettes are often swirling patterns on the dragon, in a vector ornament style. They are often thin in appearance, but can be a thicker design made up of multiple swirling designs. The marking can be small, or large, made of long swirling lines, or small symbols.";
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
    $edge_blurred = 'yes';
    $edge_gradient = 'yes';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'vignette_yes',
        'vignette_yes2',
        'vignette_no',
        'vignette_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. It can blend into the base.',
        'This marking can fade into the base coat/marking it sits over.',
        'Vignette may have a thin border that can fade.',
        'Small dots or lines can flow off or around the main designs.',
        'Multiple main designs may exist across the body.',

    ];

    $marking_cannot = [
        'Vignette cannot mimic other markings like tabby or brindled or banded/etc.',
    ];

    $marking_must = [
        'Recessive: Can appear in all zones and up to three individual colors.',
        'Dominant: Can appear in all zones as well be any number of colors',
        'Vignette must be delicate swirling designs, for inspiration look up "Vector Ornaments".',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'vig_1', 'alt' => '...', 'label' => 'SB-0700', 'caption' => 'Designer: @PenumbralWolf'],
        ['image_name' => 'vig_2', 'alt' => '...', 'label' => 'SB-0142', 'caption' => 'Designer: @Snowvoice'],
        ['image_name' => 'vig_3', 'alt' => '...', 'label' => 'SB-0859', 'caption' => 'Designer: @Mloking'],
    ];
?>

@include('design_guides.templates._gene_template')