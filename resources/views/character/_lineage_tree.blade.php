@if($lineage)
<div>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ SSS:</p> <p id="sssPreview" class="d-inline">{!! $lineage->getDisplayName('sire_sire_sire') !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 12) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ SS:</p> <p id="ssPreview" class="d-inline">{!! $lineage->getDisplayName('sire_sire') !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ SSD:</p> <p id="ssdPreview" class="d-inline">{!! $lineage->getDisplayName('sire_sire_dam') !!}</p><br>
    <p class="d-inline">Sire:</p> <p id="sirePreview" class="d-inline">{!! $lineage->getDisplayName('sire') !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ SDS:</p> <p id="sdsPreview" class="d-inline">{!! $lineage->getDisplayName('sire_dam_sire') !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 12) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ SD:</p> <p id="sdPreview" class="d-inline">{!! $lineage->getDisplayName('sire_dam') !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ SDD:</p> <p id="sddPreview" class="d-inline">{!! $lineage->getDisplayName('sire_dam_dam') !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ DSS:</p> <p id="dssPreview" class="d-inline">{!! $lineage->getDisplayName('dam_sire_sire') !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 12) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ DS:</p> <p id="dsPreview" class="d-inline">{!! $lineage->getDisplayName('dam_sire') !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ DSD:</p> <p id="dsdPreview" class="d-inline">{!! $lineage->getDisplayName('dam_sire_dam') !!}</p><br>
    <p class="d-inline">Dam:</p> <p id="damPreview" class="d-inline">{!! $lineage->getDisplayName('dam') !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ DDS:</p> <p id="ddsPreview" class="d-inline">{!! $lineage->getDisplayName('dam_dam_sire') !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 12) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ DD:</p> <p id="ddPreview" class="d-inline">{!! $lineage->getDisplayName('dam_dam') !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ DDD:</p> <p id="dddPreview" class="d-inline">{!! $lineage->getDisplayName('dam_dam_dam') !!}</p><br>
</div>
@else
<div>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ SSS:</p> <p id="sssPreview" class="d-inline">Unknown</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 12) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ SS:</p> <p id="ssPreview" class="d-inline">Unknown</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ SSD:</p> <p id="ssdPreview" class="d-inline">Unknown</p><br>
    <p class="d-inline">Sire:</p> <p id="sirePreview" class="d-inline">Unknown</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ SDS:</p> <p id="sdsPreview" class="d-inline">Unknown</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 12) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ SD:</p> <p id="sdPreview" class="d-inline">Unknown</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ SDD:</p> <p id="sddPreview" class="d-inline">Unknown</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ DSS:</p> <p id="dssPreview" class="d-inline">Unknown</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 12) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ DS:</p> <p id="dsPreview" class="d-inline">Unknown</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ DSD:</p> <p id="dsdPreview" class="d-inline">Unknown</p><br>
    <p class="d-inline">Dam:</p> <p id="damPreview" class="d-inline">Unknown</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ DDS:</p> <p id="ddsPreview" class="d-inline">Unknown</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 12) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ DD:</p> <p id="ddPreview" class="d-inline">Unknown</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ DDD:</p> <p id="dddPreview" class="d-inline">Unknown</p><br>
</div>
@endif