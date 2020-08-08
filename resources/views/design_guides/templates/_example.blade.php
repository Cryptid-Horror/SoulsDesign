<?php
    $marking_icon = 'Common_Dusted';
    $marking_name = 'Marking Name';
    $marking_code = 'nRe/DoDo';
    $marking_desc = "This is the Marking description. Information about the marking's general behavior goes here.
                    I'm putting some filler text so that we can see how it behaves when we need lots of information
                    about the marking in this spot. This is the skeleton page, don't touch it unless you are copying it.
                    This is a fun page, I'm going to lose my mind trying to make this skeleton page.
                    I know very little about coding web pages. Signed, Cryptid.";
    $layers_above_or_below = 'blah blah blah';
    $layers_above = 'blah blah blah';
    $layers_below = 'blah blah blah';
    $affected_by = 'blah blah blah';
    $can_affect = 'blah blah blah';

    // Range images should be kept in public/images/design_guides/ranges
    // 'species' => 'imagename'
    $ranges = [
        'Sapiere' => 'placeholder',
        'Warden' => 'placeholder',
        'Greater' => 'placeholder',
        'Ravager' => 'placeholder',
        'Stalker' => 'placeholder',
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
    $color_any = 'yes';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'placeholder',
        'placeholder',
        'placeholder',
        'placeholder',
        'placeholder',
    ];

    // You can use html!
    $marking_can = [
        'Markings <b>CAN</b> do this!',
        'blah'
    ];

    $marking_cannot = [
        'Markings <b>CANNOT</b> do this!',
        'blah'
    ];

    $marking_must = [
        'Markings <b>MUST</b> do this!',
        'blah'
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
        'placeholder'
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'Aewa', 'alt' => '...', 'label' => 'First Slide Label', 'caption' => 'Lorem ipsum'],
        ['image_name' => 'Aewa', 'alt' => '...', 'label' => 'Second Slide Label', 'caption' => '???'],
        ['image_name' => 'Aewa', 'alt' => '...', 'label' => 'Third Slide Label', 'caption' => 'Something'],
    ];
?>

@include('design_guides.templates._gene_template')