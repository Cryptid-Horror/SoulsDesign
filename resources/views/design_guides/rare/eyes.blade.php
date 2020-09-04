<?php
    $marking_icon = 'Rare_Eyes';
    $marking_name = 'Eyes';
    $marking_code = 'nEy/EyEy';
    $marking_desc = "This gene creates the illusion of the dragon have eyes, or 'eyelet' marking, much like that on a male peafowl. The marking is made of three parts, the bottom layer, middle layer, and top layer.";
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
        'eyes_yes',
        'eyes_yes2',
        'eyes_no',
        'eyes_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base. It can affect the marking as a whole, and/or the individual parts',
        'Eyes can fade into the base/marking it sits over. It can be affected by markings over it, i.e. Stained over top of some of the eyes to make them appear as a different color.',
        'Eyes can appear in a number of shapes, such as ovals, circles, tear drops, or diamonds. Each part of the marking can appear as a different shape as well. Example being, having the bottom layer a diamond, but the middle and top layer a circle.',
        'This marking can be iridescent and can have a glitter affect within it.',
        'Regardless of it being recessive or dominant, all three layers of the marking can be any color.',
        'The size of the eye can vary, they can be small or large like eye markings found on moths or butterflies. A general rule of thumb is they can be no longer than roughly 15% of the body (roughly one and a half heads)',
    ];

    $marking_cannot = [
        'Eyes should not clutter the body, too many in one area/close to each other is not allowed. Up to ten eyes can be placed in a cluster.',
    ];

    $marking_must = [
        'Recessive: Can be in up to 4 zones.',
        'Dominant: Can appear in all zones and different individual eyes can be different colors from other eyes.',
        'At least 2 of the three parts of this marking must be present.',
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