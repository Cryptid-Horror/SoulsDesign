<?php
    $marking_icon = 'Uncommon_Dripping';
    $marking_name = 'Dripping';
    $marking_code = 'nDr/DrDr';
    $marking_desc = "Dripping is a modifier marking that creates an effect that looks like the marking is dripping. The dripping effect can appear in any direction. Amusingly, when it was discovered, someone thought they had spilled paint on the hatchling.";
    $layers_above_or_below = 'None';
    $layers_above = 'None';
    $layers_below = 'None';
    $affected_by = 'None, this marking takes on the behavior of what it is effecting';
    $can_affect = 'blanket, Boar, Collar, Dunstripe, Frog Eye, Hood, Leaf, Points, Python, Rimmed, Ringed, Scaled, Trailing, Underbelly, Banded, Toxin, Glass, Petal, Aurora, Marbled, Tabby, Masked, Skink, Crested, Inkwell, Pigeon, Plasma, Rosettes, Shaped, Tobiano, Appaloosa, Blooded, Eyes, Lustrous, Painted, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra';

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
        'dripping_yes',
        'dripping_yes2',
        'dripping_no',
        'dripping_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.'
    ];

    $marking_cannot = [
    ];

    $marking_must = [
        'Must follow the rules of the marking it is modifying.',
        'This marking must modify another marking, a minimal mark, or horns/claws.',
        'Must be the same color as the marking it is effecting, with the gradient being allowed along with it.',
        'Must be connected to the marking it is effecting, but may have smaller "dot" portions that are disconnected.',
        'Recessive: Modifies up to two markings.',
        'Dominant: Modifiers three markings.',
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