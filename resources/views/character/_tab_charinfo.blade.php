<div class="ml-auto">
   <b>Nicknames:</b> {{ $character->nicknames ? $character->nicknames : 'N/A' }}<br>
    <b>Gender/Pronouns:</b> {{ $character->gender_pronouns ? $character->gender_pronouns : '-' }}<br>
    @if($character->homeSetting)<b>Location:</b> {{ $character->homeSetting }}@endif <br>
    @if($character->factionSetting)
    <b>Faction:</b> {!! $character->faction ? $character->currentFaction : 'None' !!}{!! $character->factionRank ? ' ('.$character->factionRank->name.')' : null !!}
    @endif
    <br>
    <b>Personality:</b><br>
    {!! $character->profile->parsed_text ?? 'N/A' !!}
    <br><br>

    <b>Designed By:</b> {!! $character->image->displayDesigners !!}<br>
    <b>Art By:</b> {!! $character->image->displayArtists !!}<br>
    
    @if($character->is_trading || $character->is_gift_art_allowed || $character->is_gift_writing_allowed)
        <hr>
        <div class="card mb-3">
            <ul class="list-group list-group-flush">
                @if($character->is_gift_art_allowed >= 1 && !$character->is_myo_slot)
                    <li class="list-group-item"><h5 class="mb-0"><i class="{{ $character->is_gift_art_allowed == 1 ? 'text-success' : 'text-secondary' }} far fa-circle fa-fw mr-2"></i> {{ $character->is_gift_art_allowed == 1 ? 'Gift art is allowed' : 'Please ask before gift art' }}</h5></li>
                @endif
                @if($character->is_gift_writing_allowed >= 1 && !$character->is_myo_slot)
                    <li class="list-group-item"><h5 class="mb-0"><i class="{{ $character->is_gift_writing_allowed == 1 ? 'text-success' : 'text-secondary' }} far fa-circle fa-fw mr-2"></i> {{ $character->is_gift_writing_allowed == 1 ? 'Gift writing is allowed' : 'Please ask before gift writing' }}</h5></li>
                @endif
                @if($character->is_trading)
                    <li class="list-group-item"><h5 class="mb-0"><i class="text-success far fa-circle fa-fw mr-2"></i> Open for trades</h5></li>
                @endif
            </ul>
        </div>
    @endif
</div>