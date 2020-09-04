<?php
    $marking_icon = 'Uncommon_Banded';
    $marking_name = 'Banded';
    $marking_code = 'nBa/BaBa';
    $marking_desc = "Much like that of a tiger, this marking presents vertical stripes, unless it is presenting on the legs, which will show horizontal. The marking originates from the gloom empire.";
    $layers_above_or_below = 'Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Masked, Pangare, Skink, Points, Python, Rimmed, Ringed,
                            Sable, Scaled, Stained, Trailing, Underbelly, Banded, Brindled, Dipped, Marbled, Tabby, Roan, Pigeon, Plasma, Rosettes, Shaped, Toxin, Glass, Luminescent, Petal, Aurora, Shimmer, , Blooded, Eyes, Lustrous, Painted, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra';
    $layers_above = 'Bokeh, Cloud, Merle';
    $layers_below = 'Crested, Inkwell,  Tobiano, Appaloosa
                   ';
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
    $edge_gradient = 'no';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'banded_yes',
        'banded_yes2',
        'banded_no',
        'banded_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.',
        'Is allowed to fade into the base coat, or marking it sits over.',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
    ];

    $marking_must = [
        'Recessive may appear in all zones',
        'Dominant may appear in all zones as well become base/marking dependant',
        'Must present as vertical, tiger like stripes, unless it is on the feet/legs in which case it can appear horizontal on the legs/feet only.',
        'Banded must appear as a thicker line, but can vary in degree of thickness and thinness, it simply cannot be misconstrued as the marking plasma in its shape or design.'
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