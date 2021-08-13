<?php
    $marking_icon = 'Uncommon_Tabby';
    $marking_name = 'Tabby';
    $marking_code = 'nTa/TaTa';
    $marking_desc = "The tabby gene presents as swirled patterns on the dragon. Additionally, a 'M' shaped marking may be present on the face, stripes around the eyes/cheeks, or along the back and around the head and tail.";
    $layers_above_or_below = 'Blanket, Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Pangare, Points, Python, Rimmed, Ringed, Sable, Scaled, Stained, Trailing, Underbelly, Banded, Brindled, Dipped, Marbled, Smoke, Roan, Toxin, Glass, Luminescent, Petal, Aurora, Shimmer, Masked, Skink, Pigeon, Plasma, Rosettes, Shaped, Blooded, Eyes, Lustrous, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra ';
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
    $edge_gradient = 'yes';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'tabby_yes',
        'tabby_yes2',
        'tabby_no',
        'tabby_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.',
        'This marking can gradually fade into the base coat.',
        'Tabby is allowed a small border that be solid or textured.',
        'Tabby is allowed a "M" looking marking on the face around the forehead, as well as stripes on the face around the M, eyes, cheeks, on the tail, and legs.',
        'Tabby may have dots that sit within the marking and its patterns, however too many dots may create the appereance of dusted, which is not allowed.',
        
    ];

    $marking_cannot = [
        'Tabby cannot be used to look like banded or trailing, it needs to have a swirly "tabby cat" looking design to it.',

    ];

    $marking_must = [
        'Recessive: Can be in all zones.',
        'Dominant: Can be in all zones, as well as any single color without a color gene present/affecting it.',
         'The facial presentation of the marking (M, banding on the face/eyes/legs/tail) must have the swirling design along with it on the body. You cannot only have these features present.', 
        'Tabby lines should be thick, to avoid looking like vignette.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'tab_1', 'alt' => '...', 'label' => 'SB-0535', 'caption' => 'Designer: @Xanowa'],
        ['image_name' => 'tab_2', 'alt' => '...', 'label' => 'SB-0080', 'caption' => 'Designer: @Dogue + Daineic'],
        ['image_name' => 'tab_3', 'alt' => '...', 'label' => 'SB-0196', 'caption' => 'Designer: @Daineic'],
    ];
?>

@include('design_guides.templates._gene_template')