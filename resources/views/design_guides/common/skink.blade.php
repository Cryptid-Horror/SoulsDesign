<?php
    $marking_icon = 'Common_Skink';
    $marking_name = 'Skink';
    $marking_code = 'nSk/SkSk';
    $marking_desc = "Skink is a marking that presents as a line down the body of a dragon. Skink has to appear in at least 3 zones, but can appear in all zones of the body. It also has to be fully connected and travel down the body horizontally. Skink is characterized by its starting location always being on the head, with the main skink line starting from the eyes.";
    $layers_above_or_below = 'Blanket, Boar, Collar, dunstripe, frog eye, hood, masked, pangare, points, python, rimmed, sable, Stained, trailing, underbelly, banded, border, crested, dipped, dripping, marbled, pigeon, plasma, roan, rosettes, shaped, tabby, toxin, blooded, eyes, glass, luminescent, lustrous, Triquetra, Vignette, lepir, aether marked, gemstome, rune, petal';
    $layers_above = ' Cloud, Smoke, bokeh, merle, brindled';
    $layers_below = ' Inkwell, tobiano, painted, appaloosa ';
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
    $edge_gradient = 'no';
    $color_any = 'no';
    $edge_blending = 'yes';
    $color_dependant = 'yes';

    // Examples should be kept in public/images/design_guides/examples/genes
    // List out the image names in the order in which they should show up
    $behavior_examples = [
        'skink_yes',
        'skink_yes2',
        'skink_no',
        'skink_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may not blend into the base, or appear too blend into the base.',
        'Skinks has to have one line that started from ontop, below, or through the eye and flows horizontally down the body. Skink lines can start from the muzzle/face tip and go down towards the body, so long as the placement fits with the above and below needs. The following areas are allowed to be added in addition to the needed one around the eye:

*Following the upper, or lower lip of the dragon and then flowing down the body horizontally.
* Starting at the middle of the skull and flowing down the spine/back of the dragon.

Skinks horizontal lines can merge at the tail tip.',
'Skink is allowed to fade from one color to another down the line of the body. In recessive form, both colors must be a natural base coat color. However, a few things can effect this:

*Applying a color modifier marking to the base -- Skink can be color dependant to what is below it. If both markings are recessive, only one of skinks colors can be the color modifier. If one or both are dominant, both of skinks colors can be a shade of the color modifier.
*Applying a color modifier to Skink -- If both markings are recessive, only one color on skink can be the color modifier color. If one or both markings are dominant, both of skinks colors can be the color modifier.

*Dominant Skink -- Dominant skink can be any natural color blending into Any color, so applying a color modifier to skink you can have it effect the natural color. Same goes for applying it to the base coat.

Skink has a degree of control when interacting with other color dependant markings. If you layer skink under stained, and have stained modified with crimson, the portion of skink under stained can be red and fade into a natural color.',
' Skink is allowed a border, which follows the same color rules as the main marking, or can be a seperate natural color or modified by a color marking.The border of skink can be solid, soft, blurred, or gradient, with textured or feathered edges.

The border should not exceed the size of the skinks width, and does not have to travel all the way down the skinks length.',
'Skink can cause the color of the tongue to be any shade of blue.',
    ];

    $marking_cannot = [
       'Skink lines cannot be disconnected or have holes. Each line of skink must be fully connected and come to an end either somewhere down the body or end at the tip of the tail. Different lines of skink can end in different spots!',
       ' Skink must appear horizontal down the body. It cannot appear on wings and it cannot be vertical.',
    ];

    $marking_must = [
        'Recessive: Can appear in all zones and can gradient between two natural colors',
        'Dominant: Can appear in all zones, and can gradient between a natural color and any other color.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'skink_1', 'alt' => '...', 'label' => 'SB-1001', 'caption' => 'Designer: @GlacialFalls'],
        ['image_name' => 'skink_2', 'alt' => '...', 'label' => 'SB-0791', 'caption' => 'Designer: @Baaltas'],
        ['image_name' => 'skink_3', 'alt' => '...', 'label' => 'SB-0427', 'caption' => 'Designer: @Tromacom'],
    ];
?>

@include('design_guides.templates._gene_template')