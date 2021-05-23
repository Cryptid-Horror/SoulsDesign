<?php
    $marking_icon = 'Rare_Glass';
    $marking_name = 'Glass';
    $marking_code = 'nGl/GlGl';
    $marking_desc = "A gene that presents like stained glass. It has geometric shapes with a border around it. The shapes often being allowed gradient colors within it.";
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
        'glass_yes',
        'glass_yes2',
        'glass_no',
        'glass_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base. It can affect the marking as a whole, and/or the individual parts',
        'Glass can have a gradient of up to 2 colors within each geometric shape. However, the two colors can change for each shape, i.e. having one be purple and blue, but the one next to it be red and orange. Additionally it can be altered by markings layering over it like stained.',
        'Glass can appear in any number of shapes, from squares, hexagons, ovals, teardrops, etc.',
        'The size of the shapes can vary A general rule of thumb is they can be no longer than roughly 15% of the body (roughly one and a half heads). Multiple shapes can be combined together with borders to expand the markings size and reach on the body.',
        'Like stained glass, you can use the shapes to create small images, so long as they follow the groups guidelines on what is acceptable content.',
        'The border of the marking is only mandatory if you are combining shapes into a cluster. It can be lighter or darker than the shape itself, and can also have the gradient.',
        'Glass is allowed a third portion to the marking that sits within the base and border. It is optional.',
    ];

    $marking_cannot = [
        'Logos or otherwise copyrighted materials cannot be used to create the design of glass.',
    ];

    $marking_must = [
        'Recessive: Can be in up to 4 zones.',
        'Dominant: Can appear in all zones and can be iridescent.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'glass_1', 'alt' => '...', 'label' => 'SB-0968', 'caption' => 'Designer: @Purpleshadowbooster'],
        ['image_name' => 'glass_2', 'alt' => '...', 'label' => 'SB-0899', 'caption' => 'Designer: @Xanowa'],
        ['image_name' => 'glass_3', 'alt' => '...', 'label' => 'SB-0204', 'caption' => 'Designer: @Tromacom'],
    ];
?>

@include('design_guides.templates._gene_template')