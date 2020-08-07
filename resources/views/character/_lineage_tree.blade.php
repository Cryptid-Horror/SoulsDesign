{{--<div>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ SSS:</p> <p id="sssPreview" class="d-inline">{!! isset($lineage['sss']) ? $lineage['sss']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 12) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ SS:</p> <p id="ssPreview" class="d-inline">{!! isset($lineage['ss']) ? $lineage['ss']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ SSD:</p> <p id="ssdPreview" class="d-inline">{!! isset($lineage['ssd']) ? $lineage['ssd']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">Sire:</p> <p id="sirePreview" class="d-inline">{!! isset($lineage['sire']) ? $lineage['sire']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ SDS:</p> <p id="sdsPreview" class="d-inline">{!! isset($lineage['sds']) ? $lineage['sds']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 12) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ SD:</p> <p id="sdPreview" class="d-inline">{!! isset($lineage['sd']) ? $lineage['sd']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ SDD:</p> <p id="sddPreview" class="d-inline">{!! isset($lineage['sdd']) ? $lineage['sdd']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ DSS:</p> <p id="dssPreview" class="d-inline">{!! isset($lineage['dss']) ? $lineage['dss']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 12) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ DS:</p> <p id="dsPreview" class="d-inline">{!! isset($lineage['ds']) ? $lineage['ds']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ DSD:</p> <p id="dsdPreview" class="d-inline">{!! isset($lineage['dsd']) ? $lineage['dsd']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">Dam:</p> <p id="damPreview" class="d-inline">{!! isset($lineage['dam']) ? $lineage['dam']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ DDS:</p> <p id="ddsPreview" class="d-inline">{!! isset($lineage['dds']) ? $lineage['dds']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 12) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ DD:</p> <p id="ddPreview" class="d-inline">{!! isset($lineage['dd']) ? $lineage['dd']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ DDD:</p> <p id="dddPreview" class="d-inline">{!! isset($lineage['ddd']) ? $lineage['ddd']->displayName : 'Unknown' !!}</p><br>
</div>--}}

<div>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ SSS:</p> <p id="sssPreview" class="d-inline">{!! !is_null($lineage['sss']) ? $lineage['sss']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 12) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ SS:</p> <p id="ssPreview" class="d-inline">{!! !is_null($lineage['ss']) ? $lineage['ss']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ SSD:</p> <p id="ssdPreview" class="d-inline">{!! !is_null($lineage['ssd']) ? $lineage['ssd']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">Sire:</p> <p id="sirePreview" class="d-inline">{!! !is_null($lineage['sire']) ? $lineage['sire']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ SDS:</p> <p id="sdsPreview" class="d-inline">{!! !is_null($lineage['sds']) ? $lineage['sds']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 12) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ SD:</p> <p id="sdPreview" class="d-inline">{!! !is_null($lineage['sd']) ? $lineage['sd']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ SDD:</p> <p id="sddPreview" class="d-inline">{!! !is_null($lineage['sdd']) ? $lineage['sdd']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ DSS:</p> <p id="dssPreview" class="d-inline">{!! !is_null($lineage['dss']) ? $lineage['dss']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 12) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ DS:</p> <p id="dsPreview" class="d-inline">{!! !is_null($lineage['ds']) ? $lineage['ds']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ DSD:</p> <p id="dsdPreview" class="d-inline">{!! !is_null($lineage['dsd']) ? $lineage['dsd']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">Dam:</p> <p id="damPreview" class="d-inline">{!! !is_null($lineage['dam']) ? $lineage['dam']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╭⎼⎼⎼⎼⎼⎼⎼⎼⎼ DDS:</p> <p id="ddsPreview" class="d-inline">{!! !is_null($lineage['dds']) ? $lineage['dds']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 12) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ DD:</p> <p id="ddPreview" class="d-inline">{!! !is_null($lineage['dd']) ? $lineage['dd']->displayName : 'Unknown' !!}</p><br>
    <p class="d-inline">{!! str_repeat('&nbsp', 50) !!}╰⎼⎼⎼⎼⎼⎼⎼⎼⎼ DDD:</p> <p id="dddPreview" class="d-inline">{!! !is_null($lineage['ddd']) ? $lineage['ddd']->displayName : 'Unknown' !!}</p><br>
</div>