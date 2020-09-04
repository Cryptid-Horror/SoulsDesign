<?php
    $marking_icon = 'Uncommon_Crested';
    $marking_name = 'Crested';
    $marking_code = 'nCr/CrCr';
    $marking_desc = "A marking that creates a bright patch of color on the throat and neck of the dragon, the pattern can be iridescent in color and must be in bright coloration. It is noted for its similarities  in the birds of paradise around the Radiant empire.";
    $layers_above_or_below = 'Dusted, Frog Eye, Leaf, Pangare, Ringed, Sable, Scaled, Stained, Banded, Dipped, Roan, Petal, Aurora, Shimmer';
    $layers_above = 'Blanket, Boar, Collar, Dunstripe, Hood, Masked, Skink, Points, Python, Rimmed, Trailing, Underbelly, Bokeh, Cloud, Brindled, Marbled, Merle, Tabby, Toxin, Pigeon, Plasma, Rosettes, Shaped, Glass, Blooded, Eyes, Lustrous, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra';
    $layers_below = 'Inkwell, Tobiano, Appaloosa, Painted';
    $affected_by = 'Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Aurora, Iridescent, Border, Dripping';
    $can_affect = 'None';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Crested',
        'Warden' => 'Warden_Crested',
        'Greater' => 'Gemp_Crested',
        'Ravager' => 'Ravager_Crested',
        'Stalker' => 'Stalker_Crested',
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
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'crested_yes',
        'crested_yes2',
        'crested_no',
        'crested_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed to blend between any number of bright colored markings.',
        'Is allowed to be flat coloration, or iridescent, but if multiple colors, must gradient smoothly.',
        'Is allowed to be any bright color, and can gradient even if not iridescent.',
        'Can blend into the base/marking it sits over.',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Holes, breaks, cutouts, or floating portions of the marking are not allowed. The marking must be fully connected.',
    ];

    $marking_must = [
        'Must be bright colors, cannot be dark colors UNLESS modified by a color modifier marking (azure, flaxen, jade, etc)',
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