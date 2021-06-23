<?php
    $marking_icon = 'Uncommon_Border';
    $marking_name = 'Border';
    $marking_code = 'nBo/BoBo';
    $marking_desc = "Border is seen to outline markings that previously could not have this outline on them. Border must present on another marking, but also can be seen to border the edges of claws, horns, and spikes.";
    $layers_above_or_below = 'None';
    $layers_above = 'None';
    $layers_below = 'None';
    $affected_by = 'Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Aurora, Iridescent, Border, Dripping';
    $can_affect = 'Boar, Collar, Dunstripe, Frog Eye, Hood, Leaf, Points, Python, Rimmed, Ringed, Scaled, Trailing, Underbelly, Banded, Toxin, Glass, Petal, Marbled, Merle, Tabby, Masked, Skink, Crested, Inkwell, Pigeon, Plasma, Rosettes, Shaped, Tobiano, Appaloose, Blooded, Eyes, Lustrous, Painted, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra';

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
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'border_yes',
        'border_yes2',
        'border_no',
        'border_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.',
        'If no markings are present, border may present on accents, minimal marks, or follow the lines of horns/claws where they meet the body.',
        'Border may fade into the base coat',
    ];

    $marking_cannot = [
        'Be excessivly thick in size.',
    ];

    $marking_must = [
        'Recessive: May appear on one marking',
        'Dominant: May appear on two markings',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'border_1', 'alt' => '...', 'label' => 'SB-0180', 'caption' => 'Designer: @Junowski'],
        ['image_name' => 'border_2', 'alt' => '...', 'label' => 'SB-0025', 'caption' => 'Designer: @Owlapin'],
        ['image_name' => 'border_3', 'alt' => '...', 'label' => 'SB-0978', 'caption' => 'SDesigner: @FallingFireX'],
    ];
?>

@include('design_guides.templates._gene_template')