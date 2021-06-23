<?php
    $marking_icon = 'Mythic_Lepir';
    $marking_name = 'Lepir';
    $marking_code = 'nLe/LeLe';
    $marking_desc = "Lepir can present in two different ways, either as 'bars' connected together and filled in with a color, like that of a butterfly wing, or as an overwritten geno that is allowed to appear as a chosen fish, reptile, butterfly, or moth design.";
     $layers_above_or_below = 'If not overwriting the geno (otherwise it layers above all markings): Blanket, Boar, Collar, Dunstripe, Dusted, Frog Eye, Hood, Leaf, Points, Pangare, Python, Rimmed, Ringed, Sable, Scaled, Stained, Trailing, Underbelly, Banded, Brindled, Dipped, Marbled, Smoke, Roan, Tabby, Toxin, Glass, Luminescent, Petal, Aurora, Shimmer, Masked, Skink, Pigeon, Plasma, Rosettes, Shaped, Blooded, Eyes, Lustrous, Vignette, Aether Marked, Gemstone, Lepir, Rune, Triquetra ';
    $layers_above = 'If not overwriting the geno (otherwise it layers above all markings): Bokeh, Cloud, Merle';
    $layers_below = 'If not overwriting the geno (otherwise it layers above all markings): Crested, Inkwell, Tobiano, Appaloosa, Painted, ';
    $affected_by = 'If not overwriting the geno (otherwise it layers above all markings): Duotone, Flaxen, Greying, Rose, Azure, Copper, Crimson, Jade, Lilac, Prismatic, Shimmer, Aurora';
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
        'lepir_yes',
        'lepir_yes2',
        'lepir_no',
        'lepir_no2'
    ];

    // You can use html!
    $marking_can = [
        'Is allowed up to a 12 point value and saturation point gradient difference inside the marking. This gradient may blend into the base.',
        'The marking may fade into the base coat',
        '"Minimal Lepir" may present as darker or lighter lines varying in thickness that appear like that on many species of butterflies. These lines can be connected or disconnected, but if they create a connected shape the shape can be filled with a color that is allowed to gradient between colors.',
        '"Complex Lepir" may present as you choosing any reptile, fish, butterfly, or moth to recreate its design on your dragon. This overwrite the appearance of all markings on your dragon, to make them look like your chosen reference. It should match closely, but you are free to take artistic liberities as well.',
    ];

    $marking_cannot = [
        'Minimal and complex lepir cannot appear at the same time, it is on or the other.',
        'Complex lepir must match your reference closely, and only come from the approved types of animals.',
    ];

    $marking_must = [
        'Recessive: Minimal lepir may cover up to 70% of the design. Complex lepir will override the design completely.',
        'Dominant: Same as recessive, however dusting may come off of the design (like blazer), an iridescent shine can be applied to the design. In Minimal lepir, this is the color that fills the border shapes, and the border itself. In complex, this is the design as a whole. The iridescence must be blended fully with no solid or soft edges.',
        'The reference for your complex lepir must be provided in design review.',
    ];

    // If left empty, the swatches section will not be shown
    $swatches = [
    ];

    // Design examples should be kept in public/images/design_guides/examples/approved_designs
    $design_carousel = [
        ['image_name' => 'lepir_1', 'alt' => '...', 'label' => 'SB-0814', 'caption' => 'Designer: @Rhith'],
        ['image_name' => 'lepir_2', 'alt' => '...', 'label' => 'SB-0637', 'caption' => 'Designer: @Cameil'],
        ['image_name' => 'lepir_3', 'alt' => '...', 'label' => 'SB-0721', 'caption' => 'Designer: Alriandi'],
    ];
?>

@include('design_guides.templates._gene_template')