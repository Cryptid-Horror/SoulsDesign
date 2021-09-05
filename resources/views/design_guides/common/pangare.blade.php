<?php
    $marking_icon = 'Common_Pangare';
    $marking_name = 'Pangare';
    $marking_code = 'nPa/PaPa';
    $marking_desc = "A soft, gradiented marking on the underside of a dragon. It has the ability to reach up along the underside of the wings as well. Pangare is shades of dark, or light, and is a common marking seen on many dragons. The marking has a sibling marking called 'Underbelly'.";
    $layers_above_or_below = 'Blanket, Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Points, Python, Rimmed, Ringed, Sable, Scaled, Stained, Trailing, Underbelly, Banded, Brindled, Bokeh, Cloud, Marbled, Merle Dipped, Mist, Pigeon, Plasma, Rosettes, Roan, Shaped, Skink, Tabby Toxin, Glass, Eyes, Lustrous, Luminescent, Petal, Vignette, Gemstone, Lepir, Rune, Triquetra Aurora, Shimmer, Blooded, Lustrous, Aether Marked';
    $layers_above = 'None';
    $layers_below = ' Masked, Crested, Inkwell, Tobiano, Appaloosa, Painted,';
    $affected_by = 'Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Aurora, Iridescent, Border, Dripping';
    $can_affect = 'None';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Underbelly-Pangare',
        'Warden' => 'Warden_Underbelly-Pangare',
        'Greater' => 'Gemp_Underbelly-Pangare',
        'Ravager' => 'Ravager_Underbelly-Pangare',
        'Stalker' => 'Stalker_Underbelly-Pangare',
    ];

    // Use yes or no
    $edge_solid = 'no';
    $edge_feathered = 'yes';
    $edge_border = 'no';
    $edge_textured = 'yes';
    $edge_mottled = 'no';
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
        'pangare_yes1',
        'pangare_yes2',
        'pangare_yes3',
        'pangare_yes4',
        'pangare_yes5',
        'pangare_no1'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed a 12 value and saturation point gradient difference inside the marking',
        'Can appear above or below underbelly, if underbelly is present.',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing looking like inkwell or other markings.',
        'Holes, breaks, cutouts, or "floating" portions of the marking are not allowed. The marking must be fully connected with the EXCEPTION of the wing membrane which may be disconnected from the underside of the marking.',
    ];

    $marking_must = [
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'pan_1', 'alt' => '...', 'label' => 'SB-0817', 'caption' => 'Designer: @Draginraptor'],
        ['image_name' => 'pan_2', 'alt' => '...', 'label' => 'SB-0958', 'caption' => 'Designer: @Skoith'],
        ['image_name' => 'pan_3', 'alt' => '...', 'label' => 'SB-0688', 'caption' => 'Designer: @Xanowa'],
    ];
?>

@include('design_guides.templates._gene_template')