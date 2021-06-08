<?php
    $marking_icon = 'Common_Sable';
    $marking_name = 'Sable';
    $marking_code = 'nBl/BlBl';
    $marking_desc = "A soft gradient marking that rests on the back of the dragon. The marking covers a similar range to blanket, which could be considered its sibling marking. Sable can be darker or lighter than the base or what it sits over.";
    $layers_above_or_below = 'Blanket, Dunstripe, Boar, Collar, Dusted, Frog Eye, Hood, Leaf, Python, Rimmed, Ringed, Scaled, Stained, Trailing, Underbelly, Banded, Dipped, Pigeon, Plasma, Rosettes, Roan, Shaped, Skink, Tabby Toxin, Glass, Eyes, Lustrous, Luminescent, Petal, Vignette, Gemstone, Lepir, Rune, Triquetra Aurora, Shimmer, Blooded, Lustrous, Aether Marked';
    $layers_above = 'Brindled, Bokeh, Cloud, Marbled, Smoke, Merle';
    $layers_below = ' Crested, Inkwell, Tobiano, Appaloosa,  Painted';
    $affected_by = 'Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Aurora, Iridescent, Border, Dripping';
    $can_affect = 'None';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Sable',
        'Warden' => 'Warden_Sable',
        'Greater' => 'Gemp_Blanket-Sable',
        'Ravager' => 'Ravager_Sable',
        'Stalker' => 'Stalker_Sable',
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
        'sable_yes',
        'sable_yes2',
        'sable_no',
        'sable_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed a 12 value and saturation point gradient difference inside the marking',
        'Can appear above or below blanket, if blanket is present.',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing like inkwell or other markings.',
        ' Holes, breaks, cutouts, or "floating" portions of the marking are not allowed. The marking must be fully connected with the EXCEPTION of the wing membrane which may be disconnected from the underside of the marking.'
    ];

    $marking_must = [
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'sable_1', 'alt' => '...', 'label' => 'SB-0889', 'caption' => 'Designer: @Baaltas'],
        ['image_name' => 'sable_2', 'alt' => '...', 'label' => 'SB-0710', 'caption' => 'Designer: @Lairai'],
        ['image_name' => 'sable_3', 'alt' => '...', 'label' => 'SB-0604', 'caption' => 'Designer: @MaraMastrullo'],
    ];
?>

@include('design_guides.templates._gene_template')