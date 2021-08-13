<?php
    $marking_icon = 'Common_Python';
    $marking_name = 'Python';
    $marking_code = 'nPy/PyPy';
    $marking_desc = "Marking Origin: 2018 Genetics Contest; Submitted by user Thundering-Horses. A diamond, oval, or square/rectangular shape found on the spine of a dragon. The marking can go from the face to the tail, and in its dominant form has striping that can appear.";
    $layers_above_or_below = ' Blanket, Boar, Collar, Dusted, Dunstripe, Frog Eye, Hood, Leaf, Python, Rimmed, Ringed, Sable, Scaled, Stained, Trailing, Underbelly, Banded, Dipped, Pigeon, Plasma, Rosettes, Roan, Shaped, Skink, Tabby Toxin, Glass, Eyes, Lustrous, Luminescent, Petal, Vignette, Gemstone, Lepir, Rune, Triquetra Aurora, Shimmer, Aether Marked, Blooded, Lustrous,';
    $layers_above = 'Brindled, Bokeh, Cloud, Marbled, Merle';
    $layers_below = ' Crested, Inkwell, Tobiano, Appaloosa, Painted';
    $affected_by = 'Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Aurora, Iridescent, Border, Dripping';
    $can_affect = 'None';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'Sapiere_Python',
        'Warden' => 'Warden_Python',
        'Greater' => 'Gemp_Python',
        'Ravager' => 'Ravager_Python',
        'Stalker' => 'Stalker_Python',
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
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'no';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'python_yes',
        'python_yes2',
        'python_no',
        'python_no2'
    ];

    // You can use html!
    $marking_can = [
        ' A border can appear on the marking. The border can be darker or lighter than the marking. The border can also be the same color as a marking it sits over, such as blanket. However it cannot be the same color as the base coat.',
        ' Can have a 12 point value or saturation gradient.',
        'Is allowed to interact with other markings like banding or ringed to make elongate the border on the marking.',
        'Python can appear in a variety of shapes. It can be diamonds, ovals, squares, rectangles, diamonds, and even look like the iconic "saddle" of a boa constrictor. You can even use multiple different types of python on a single design (some oval, some rectangle, etc!)',
        'In dominant form, the marking can show banded like markings on the tip of the tail, and the face.',
    ];

    $marking_cannot = [
        'Edges cannot be too complicated, to avoid appearing like inkwell or other markings.',
    ];

    $marking_must = [
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
        'At least three python shapes must be visible on the body somewhere, with the exception being if inkwell, painted, or tobiano are present as these markings can completely hide other markings.',
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'python_1', 'alt' => '...', 'label' => 'SB-0930', 'caption' => 'Designer: @Sulosointu'],
        ['image_name' => 'python_2', 'alt' => '...', 'label' => 'SB-0840', 'caption' => 'Designer: @Rhith'],
        ['image_name' => 'python_3', 'alt' => '...', 'label' => 'SB-0250', 'caption' => 'Designer: @Wolfsroar18'],
    ];
?>

@include('design_guides.templates._gene_template')