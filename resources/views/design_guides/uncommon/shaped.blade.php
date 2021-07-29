<?php
    $marking_icon = 'Uncommon_Shaped';
    $marking_name = 'Shaped';
    $marking_code = 'nSp/SpSp';
    $marking_desc = "A gene that presents as various shapes on the dragon's body. The shapes are often diamonds, squares, or other organic shapes.";
    $layers_above_or_below = 'Blanket, Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Pangare, Points, Python, Rimmed, Ringed, Sable, Scaled, Stained, Trailing, Underbelly, Banded, Brindled, Dipped, Marbled, Roan, Tabby, Toxin, Glass, Luminescent, Petal, Aurora, Shimmer, Masked, Skink, Pigeon, Plasma, Rosettes,  Blooded, Eyes, Lustrous, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra ';
    $layers_above = 'Bokeh, Cloud, Merle';
    $layers_below = 'Crested, Inkwell, Tobiano, Appaloosa, Painted';
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
    $edge_gradient = 'yes';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'shaped_yes',
        'shaped_yes2',
        'shaped_no',
        'shaped_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.', 
        'Is allowed to gradually fade into the base coat.',
        'Up to three shapes may be present at once and each shape may be a different color. I.e if you have stars, diamonds, and triangles, the stars can be white, diamonds grey, and triangles brown.',
        'Shapes do not have to be filled in, they can be the outline of the shape.',
        'Examples of shapes are squares, rectangles, large dots/ovals, diamonds, triangles, stars, hearts, octagons, etc.',
    ];

    $marking_cannot = [
        'Shaped may not be rings or small dots (like dusted or ringed).', 
    ];

    $marking_must = [
        'Recessive: May present in all zones.',
        'Dominant may present in all zones and also be any one single color without the presence of a color modifier gene affecting it. Additionally, in dominant form, shaped becomes base/marking dependant.',
        'At least 4 instances of the shape marking must be present at a minimum.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'shape_1', 'alt' => '...', 'label' => 'SB-0946', 'caption' => 'Designer: @Tromacom'],
        ['image_name' => 'shape_2', 'alt' => '...', 'label' => 'SB-0994', 'caption' => 'Designer: @SomeSunnyBunny'],
        ['image_name' => 'shape_3', 'alt' => '...', 'label' => 'SB-0342', 'caption' => 'Designer: @Cakeindafridge'],
    ];
?>

@include('design_guides.templates._gene_template')