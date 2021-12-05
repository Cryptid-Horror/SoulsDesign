<?php
    $marking_icon = 'Common_Dun';
    $marking_name = 'Dun';
    $marking_code = 'nDn/DnDn';
    $marking_desc = "A popular mark praised for its delicate appearance down the spine of a dragon. Its origins are difficult to trace due to its abundance among the population of dragons, and many argue it appeared first in the scorched empire. dun often has a small accenting along the marking that points downward in a stripe like pattern, as well as stripes along the leg. Unlike banding though, these stripes are thin, delicate, and very few.";
    $layers_above_or_below = 'Blanket, Boar, Collar, Dusted, Frog Eye, Hood, Leaf, Masked, Pangare, Python, Rimmed, Ringed, Sable, Scaled, Stained, Skink, Trailing, Underbelly, Crested, Banded, Marbled, Merle, Pigeon, Plasma, Shaped, Tabby, Toxin, Roan, Rosettes, Luminescent, Lustrous, Aurora, Iridescent, Lepir, Blooded, Eyes, Glass, Painted, Petal, Vignette, Aether Marked, Gemstone, Rune, Triquetra';
    $layers_above = 'Bokeh, Cloud, Smoke, Brindled';
    $layers_below = ' Inkwell, Tobiano, Appaloosa';
    $affected_by = 'Duo Tone, Flaxen, Greying, Rose, Azure, border, Copper, Crimson, Dripping, Jade, Luminescent, Iridescent, Lilac, Prismatic, Shimmer';
    $can_affect = 'None';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Dunstripe',
        'Warden' => 'Warden_Dunstripe',
        'Greater' => 'Gemp_Dunstripe',
        'Ravager' => 'Ravager_Dunstripe',
        'Stalker' => 'Stalker_Dunstripe',
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
    $edge_blurred = 'yes';
    $edge_gradient = 'no';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'dunstripe_yes1',
        'dunstripe_yes2',
        'dunstripe_yes3',
        'dunstripe_yes4',
        'dunstripe_no1',
        'dunstripe_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 value and saturation point gradient difference inside the marking',
        'Allowed to have short bands coming off the main stripe, or along the ankles of the dragon. It appears mainly as an accent, and cannot be overdone to avoid looking like banded or dripping. These small bands may also have a gradient on them, but this gradient is not allowed on these small bars, not on the dun itself.',
        ' Dunstripe is allowed very smalled disconnects in its shape. It should not appear as another marking like python.',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Holes and cutouts are not allowed.'
    ];

    $marking_must = [
        'dun must be in its required zones.'
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'dun_1', 'alt' => '...', 'label' => 'SB-0689', 'caption' => 'Designer: @TwistedLunatic'],
        ['image_name' => 'dun_2', 'alt' => '...', 'label' => 'SB-0880', 'caption' => 'Designer: @RikVentures'],
        ['image_name' => 'dun_3', 'alt' => '...', 'label' => 'SB-0991', 'caption' => 'Designer: @TalonV'],
    ];
?>

@include('design_guides.templates._gene_template')