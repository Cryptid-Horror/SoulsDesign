<?php
    $marking_icon = 'Uncommon_Merle';
    $marking_name = 'Merle';
    $marking_code = 'nMr/MrMr';
    $marking_desc = "Merle, a gene that creates a pattern where random, and sometimes, mottled, splotches of darker or lighter pigments that sit on the coat of the dragon.";
    $layers_above_or_below = 'Bokeh, Cloud';
    $layers_above = 'None';
    $layers_below = 'Blanket, Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Pangare, Points, Python, Rimmed, Ringed,
                            Sable, Scaled, Stained, Trailing, Underbelly, Banded, Brindled, Dipped, Marbled, Roan, Tabby
                            Toxin, Glass, Luminescent, Petal, Aurora, Shimmer, Masked, Skink, Crested, Inkwell, Pigeon, Plasma, Rosettes, Shaped, Tobiano, Appaloosa, Blooded, Eyes, Lustrous, Painted, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra';
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
    $edge_mottled = 'yes';
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
        'merle_yes',
        'merle_yes2',
        'merle_no',
        'merle_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.',
        'May be up to three individual colors',
    ];

    $marking_cannot = [
        'Marking can be mottled, but should not appear to look like inkwell or tobiano.',
    ];

    $marking_must = [
        'Recessive: may appear in all zones',
        'Dominant: May appear in all zones, as well as being any one single color without the presence of a color modifier affecting it',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'mer_1', 'alt' => '...', 'label' => 'SB-0922', 'caption' => 'Designer: @Natroo31'],
        ['image_name' => 'mer_2', 'alt' => '...', 'label' => 'SB-0178', 'caption' => 'Designer: @Voidtech'],
        ['image_name' => 'mer_3', 'alt' => '...', 'label' => 'SB-0383', 'caption' => 'Designer: @Drackana'],
    ];
?>

@include('design_guides.templates._gene_template')