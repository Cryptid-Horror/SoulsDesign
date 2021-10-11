<?php
    // 0 is the lowest layer, markings here are always layered below other markings, except those in the same group
    // Groups 0, 10, and 20 are default - the space between these numbers may be useful in the future for markings
    // requiring a special layer order
    // Please DO NOT use negative numbers
    $marking_layers = [
        0 => ['Cloud', 'Dapple,' 'Merle'],
        10 => ['Accents', 'Birthmark', 'Blush', 'Freckles', 'Minimal Mark', 'Socks', 'Stockings', 'Tips', 'Blanket', 'Boar', 
               'Collar', 'Dun', 'Dusted', 'Frog Eye', 'Hood', 'Leaf', 'Masked', 'Pangare', 'Points', 'Python',
               'Rimmed', 'Ringed', 'Sable', 'Scaled', 'Stained', 'Trailing', 'Underbelly', 'Banded', 'Brindled',
               'Crested', 'Dipped', 'Marbled', 'Metallic', 'Pigeon', 'Plasma', 'Roan', 'Rosettes', 'Shaped', 
               'Smoked', 'Tabby', 'Toxin', 'Blooded', 'Eyes', 'Filigree', 'Glass', 'Luminescent', 'Lustrous',
               'Petal', 'Aether Marked', 'Aurora', 'Gemstone', 'Iridescent', 'Lepir - Minimal', 'Rune', 'Shimmer',
                'Triquetra'],
        20 => ['Inkwell', 'Tobiano', 'Painted', 'Appaloosa', 'Lepir - Complex'],
        // Add more groups as necessary; example:
        // 30 => [],
    ];
    $modifier_affects = [
        'Duotone' => ['All Markings'],
        'Flaxen' => ['All Markings'],
        'Dripping' => ['All Free Markings', 'Blanket', 'Boar (Bars)', 'Collar', 'Dun', 'Frog Eye', 'Hood', 'Leaf', 'Masked', 'Points', 
                        'Python', 'Rimmed', 'Ringed', 'Scaled', 'Skink', 'Trailing', 'Underbelly', 'Banded', 'Border', 'Brindle',
                        'Crested', 'Inkwell', 'Marbled', 'Metallic', 'Pigeon', 'Plasma', 'Rosettes', 'Shaped', 'Tabby', 'Tobiano', 'Toxin (bars)',
                        'Appaloosa', 'Blooded', 'Eyes', 'Filigree', 'Glass', 'Luminescent', 'Lustrous', 'Painted', 'Petal', 'Aether Marked', 
                        'Aurora', 'Gemstone', 'Lepir - Simple', 'Rune', 'Triquetra'],
        'Luminescent' => ['All Free Markings', 'Boar (Bars)', 'Collar', 'Dun', 'Frog Eye', 'Leaf', 'Masked',
                          'Python', 'Rimmed', 'Ringed', 'Scaled', 'Skink', 'Trailing', 'Banded', 'Border',
                          'Crested', 'Metallic (If not affecting a marking)', 'Pigeon', 'Plasma', 'Rosettes', 'Shaped', 'Toxin (bars)',
                          'Eyes', 'Filigree', 'Petal', 'Aether Marked', 'Gemstone', 'Rune', 'Triquetra', 'Teeth, Claws, horns, Gums, and Import Extras',
                          'These marking may only have 25% of their full range affected: Brindled, Cloud, Dapple, Dipped, Marbled, Merle, and Smoke'],
        // Special groupings for some modifiers
        'Inherits' => ['Dripping', 'Luminescent'],
        'Color' => ['Flaxen', 'Rose', 'Greying', 'Azure', 'Copper', 'Crimson', 'Jade', 'Seafoam', 'Lilac', 'Prismatic', 'Iridescent']
    ];
    // Layering
    // First get the marking name and look for its layer group
    $layer_group = -1;
    foreach($marking_layers as $num=>$group) {
        if(in_array($marking_name, $group)) {
            $layer_group = $num;
            $layers_above_or_below = array_diff($group, [$marking_name]);
            // sort($layers_above_or_below);
            if(!count($layers_above_or_below)) $layers_above_or_below = ['None'];
            $layers_above_or_below = implode(', ', $layers_above_or_below);
        }
    }
    // Check if marking was not found
    if($layer_group < 0) {
        $layers_above_or_below = 'None';
        $layers_above = 'None';
        $layers_below = 'None';
    }
    else {
        // Generate the corresponding relations
        $layers_above = [];
        $layers_below = [];
        foreach($marking_layers as $num=>$group) {
            if($num < $layer_group) $layers_above = array_merge($layers_above, $group);
            if($num > $layer_group) $layers_below = array_merge($layers_below, $group);
        }
        // sort($layers_above);
        // sort($layers_below);
        if(!count($layers_above)) $layers_above = ['None'];
        if(!count($layers_below)) $layers_below = ['None'];
        $layers_above = implode(', ', $layers_above);
        $layers_below = implode(', ', $layers_below);
    }
    // Modifiers
    $affected_by = [];
    $can_affect = $modifier_affects[$marking_name] ?? ([$can_affect] ?? ['None']); // None is the default for non-modifiers
    foreach($modifier_affects as $modifier=>$targets) {
        if(in_array($marking_name, $targets) || $targets[0] == 'All Markings') {
            if($modifier == 'Inherits') {
                $affected_by = ['None, this marking takes on the behavior of what it is affecting'];
                break;
            }
            else if($modifier == 'Color') {
                $layers_above_or_below = 'Null, must affect the base coat or a marking';
                $layers_above = 'Null, must affect the base coat or a marking';
                $layers_below = 'Null, must affect the base coat or a marking';
                $affected_by = ['Null, must affect the base coat or a marking'];
                break;
            }
            else {
                if($modifier != $marking_name) array_push($affected_by, $modifier);
            }
        }
    }
    $affected_by = implode(', ', $affected_by);
    $can_affect = implode(', ', $can_affect);
?>
<a class="btn btn-secondary" href="This marking can appear above or below the following markings: {{ $layers_above_or_below }}" data-featherlight="text">Above or Below These Markings</a>
<a class="btn btn-secondary" href="This marking has to appear above the following markings: {{ $layers_above }}" data-featherlight="text">Always Above These Markings</a>
<a class="btn btn-secondary" href="This marking has to appear below these markings: {{ $layers_below }}" data-featherlight="text">Always Below These Markings</a>
<a class="btn btn-secondary" href="This marking can be affected or modified by the following markings (such as being able to be modified by a color marking): {{ $affected_by }}" data-featherlight="text">Affected By These Markings</a>
<a class="btn btn-secondary" href="This marking can affect or modify the following the markings (such as making them a different color): {{ $can_affect }}" data-featherlight="text">Can Affect These Markings</a>