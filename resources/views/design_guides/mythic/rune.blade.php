<?php
    $marking_icon = 'Mythic_Rune';
    $marking_name = 'Rune';
    $marking_code = 'nRu/RuRu';
    $marking_desc = "A gene that creates symbols on the dragon's body. The symbols are of older languages, and many believe that the marks spell out the dragon's future or fate.";
     $layers_above_or_below = 'Blanket, Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Points, Pangare, Python, Rimmed, Ringed, Sable, Scaled, Stained, Trailing, Underbelly, Banded, Brindled, Dipped, Marbled, Smoke, Roan, Tabby, Toxin, Glass, Luminescent, Petal, Aurora, Shimmer, Masked, Skink, Pigeon, Plasma, Rosettes, Shaped, Blooded, Eyes, Lustrous, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra ';
    $layers_above = 'Bokeh, Cloud, Merle';
    $layers_below = 'Crested, Inkwell, Tobiano, Appaloosa, Painted, ';
    $affected_by = 'Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Iridescent, Aurora, Dripping';
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
        'rune_yes',
        'rune_yes2',
        'rune_no',
        'rune_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may blend into the base.',
        'Rune is allowed to fade into the base coat.',
        'Rune is allowed to have a thin outline or border that can fade into the base coat, can be darker/lighter than rune or the base coat.',
        'Rune can appear as unique runes, or real world examples.',
        'Different runes can be different colors, up to 4 individual colors are allowed.',
        'Runes can be clustered, in patterns like swirls/lines/to make up shapes/etc.',
    ];

    $marking_cannot = [
        'Runes should not be used to spell out vulgar language, nor be copied from copywritten sources (games, film, other artists, etc)',
        'Runes should not be common alphabets from english or other languages.',
    ];

    $marking_must = [
        'Recessive: Runes can appear anywhere on the body, but not cover more than 50% of the design.',
        'Dominant: Runes can appear anywhere on the body, not cover more than 50% of the design, but can also be iridescent.',
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