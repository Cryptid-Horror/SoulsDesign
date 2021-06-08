<?php
    $marking_icon = 'Uncommon_Cloud';
    $marking_name = 'Cloud';
    $marking_code = 'nCd/CdCd';
    $marking_desc = "A marking that creates a cloud like appearance on the body, believed to hide dragons when they are soaring through the clouds as an act of camoflauge. Cloud can present as either a splotch of color with a border, or as a smooth soft gradient of color along the body.";
    $layers_above_or_below = 'Sable, Stained, Dipped, Roan, Bokeh, Merle, Brindled, Aurora, Shimmer';
    $layers_above = ' None';
    $layers_below = ' Blanket, Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Pangare, Points, Pyuthon, Rimmed, Ringed, Scaled, Trailing, Underbelly, Banded, Marbled, Merle, Tabby, Toxin, Glass, Petal, Masked, Skink, Crested, Inkwell, Pigeon, Plasma, Rosettes, Shaped, Tobiano, Appaloosa, Blooded, Eyes, Lustrous, Painted, Vignette, Aether Marked, Gemstone, Lepor, Rune, Triquetra';
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
    $edge_border = 'yes';
    $edge_textured = 'yes';
    $edge_mottled = 'yes';
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
        'cloud_yes',
        'cloud_yes2',
        'cloud_no',
        'cloud_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking.',
        'Cloud may have a fully gradient edge, it can appearas patches or flow in many directions on the body.',
        'Cloud can cover a small portion of the body, or effect the whole body.',
        'Can appear as flowing smooth shapes/lines, or as a splotch of color with a border around it that can fade into the marking, or into the base/marking it is over.',
    ];

    $marking_cannot = [
       'Cannot appear as a thin wispy line, or shapes, as it would appear too much like smoke.',
    ];

    $marking_must = [
        'Recessive: appears in all zones',
        'Dominant: appears in all zones, plus can be any single color (i.e. making it red, without crimson on the design)',
        'Must have two to three color present.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'cloud_1', 'alt' => '...', 'label' => 'SB-0943', 'caption' => 'Designer: @SilveryStormWing'],
        ['image_name' => 'cloud_2', 'alt' => '...', 'label' => 'SB-0858', 'caption' => 'Designer: @TemperolSorceress'],
        ['image_name' => 'cloud_3', 'alt' => '...', 'label' => 'SB-0735', 'caption' => 'Designer: @FlawedEmperor'],
    ];
?>

@include('design_guides.templates._gene_template')