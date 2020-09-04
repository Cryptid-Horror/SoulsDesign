<?php
    $marking_icon = 'Rare_Blooded';
    $marking_name = 'Blooded';
    $marking_code = 'nBd/BdBd';
    $marking_desc = "A marking that creates a 'Wound' style marking on the chest that can trail up towards the jaw, or down the tail. The marking is composed of two parts, the 'Heart' and the 'Base'. The gene is thought to originate from those dragons who have lost something dear to them. The properities section refers to the base, please see the rules for the mark itself.";
    $layers_above_or_below = 'Blanket, Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Points, Pangare, Python, Rimmed, Ringed, Sable, Scaled, Stained, Trailing, Underbelly, Banded, Brindled, Dipped, Marbled, Smoke, Roan, Tabby, Toxin, Glass, Luminescent, Petal, Aurora, Shimmer, Masked, Skink, Pigeon, Plasma, Rosettes, Shaped, Blooded, Eyes, Lustrous, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra ';
    $layers_above = 'Bokeh, Cloud, Merle';
    $layers_below = 'Crested, Inkwell, Tobiano, Appaloosa, Painted, ';
    $affected_by = 'Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Aurora, Iridescent, Border, Dripping';
    $can_affect = 'None';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Blooded',
        'Warden' => 'Warden_Blooded',
        'Greater' => 'Gemp_Blooded',
        'Ravager' => 'Ravager_Blooded',
        'Stalker' => 'Stalker_Blooded',
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
    $edge_blurred = 'no';
    $edge_gradient = 'yes';
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'blooded_yes',
        'blooded_yes2',
        'blooded_no',
        'blooded_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.',
        'The mark of this gene can appear as a dot, diamond, heart, or other shape.',
        'The base of this marking can blend into the base coat, while the heart can blend into the base of blooded.',
    ];

    $marking_cannot = [
        'This gene should not appear like tobiano/etc, as it is restricted to an area.',
        'This gene should not look like underbelly/pangare.',
    ];

    $marking_must = [
        'The "Heart" of this marking has all the same properities as the base, except for the addition that is can be soft edged, and have a small border.', 
        'Recessive: Covers only the specific recessive min/max portion',
        'Dominant: covers all portions, plus the heart can be iridescent.',
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