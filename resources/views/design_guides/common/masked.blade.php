<?php
    $marking_icon = 'Common_Masked';
    $marking_name = 'Masked';
    $marking_code = 'nMa/MaMa';
    $marking_desc = "A marking found on the face of a dragon, it has the appearance of a helm, or mask. The marking was first noted in Wardens, and has spread to all species as it is quite popular for its look and ability to layer with other markings in remarkable ways.";
    $layers_above_or_below = 'Dusted, Frog Eye, Leaf, Points, Python, Rimmed, Ringed, Sable, Scaled, Stained, Trailing,  Banded, Crested, Dipped, Pigeon, Plasma, Rosettes, Roan, Shaped, Skink, Glass, Eyes, Lustrous, Luminescent, Petal, Vignette, Gemstone, Lepir, Rune, Triquetra Aurora, Shimmer, Blooded, Lustrous, Vignette, Aether Marked';
    $layers_above = 'Blanket, Boar, Collar, Dunstripe, Hood, Pangare, Bokeh, Cloud, Marbled, Merle, Brindled, Underbelly, Tabby, Toxin';
    $layers_below = ' Inkwell, Tobiano, Appaloosa, Painted';
    $affected_by = 'Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Aurora, Iridescent, Border, Dripping';
    $can_affect = 'None';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Masked',
        'Warden' => 'Warden_Masked',
        'Greater' => 'Gemp_Masked',
        'Ravager' => 'Ravager_Masked',
        'Stalker' => 'Stalker_Masked',
    ];

    // Use yes or no
    $edge_solid = 'yes';
    $edge_feathered = 'yes';
    $edge_border = 'yes';
    $edge_textured = 'yes';
    $edge_mottled = 'yes';
    $edge_soft = 'yes';
    $color_darker = 'yes';
    $color_lighter = 'yes';
    $color_natural = 'yes';
    $edge_blurred = 'yes';
    $edge_gradient = 'yes';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'mask_yes1',
        'mask_yes2',
        'mask_yes3',
        'mask_yes4',
        'mask_no1',
        'mask_no2',
        'mask_no3',
        'mask_no4',
        'mask_examples'
    ];

    // You can use html!
    $marking_can = [
        ' Is allowed a 12 value and saturation point gradient difference inside the marking',
        'Holes, breaks, cutouts, or "floating" portions of the marking are allowed.',
        'The marking is allowed to blur, or gradient, into the base coat or marking it sits over.',
        'The marking is allowed to have a thin border',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings. However, they masked may have a few mottled holes in the marking around the edges. The number can be up to 6, with the sizes varying so long as they are not massive chunks of the marking missing.',
    ];

    $marking_must = [
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'mask_1', 'alt' => '...', 'label' => 'SB-1115', 'caption' => 'Designer: @PlusBacon'],
        ['image_name' => 'mask_2', 'alt' => '...', 'label' => 'AV-0040', 'caption' => 'Designer: @Thundercat'],
        ['image_name' => 'mask_3', 'alt' => '...', 'label' => 'SB-0863', 'caption' => 'Designer: @Sulosointu'],
    ];
?>

@include('design_guides.templates._gene_template')