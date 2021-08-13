<script>
    $(document).ready(function() {
        $('#userSelect').selectize();
        $( "#datepicker" ).datetimepicker({
            dateFormat: "yy-mm-dd",
            timeFormat: 'HH:mm:ss',
        });
        // Resell options /////////////////////////////////////////////////////////////////////////////

        var $resellable = $('#resellable');
        var $resellOptions = $('#resellOptions');

        var resellable = $resellable.is(':checked');

        updateOptions();

        $resellable.on('change', function(e) {
            resellable = $resellable.is(':checked');

            updateOptions();
        });

        function updateOptions() {
            if(resellable) $resellOptions.removeClass('hide');
            else $resellOptions.addClass('hide');
        }

        // Lineage
        var $useCustomLineage = $('#useCustomLineage');
        var useCustomLineage = $useCustomLineage.is(':checked');

        $useCustomLineage.on('change', function(e) {
            useCustomLineage = $useCustomLineage.is(':checked');
            updateAncestryEntries();
            updateAncestryPreview();
        });

        var $sire_slug = $('#sire_slug');
        var $dam_slug = $('#dam_slug');

        var $ss_slug = $('#ss_slug');
        var $sd_slug = $('#sd_slug');

        var $ds_slug = $('#ds_slug');
        var $dd_slug = $('#dd_slug');

        var $sss_slug = $('#sss_slug');
        var $ssd_slug = $('#ssd_slug');
        var $sds_slug = $('#sds_slug');
        var $sdd_slug = $('#sdd_slug');

        var $dss_slug = $('#dss_slug');
        var $dsd_slug = $('#dsd_slug');
        var $dds_slug = $('#dds_slug');
        var $ddd_slug = $('#ddd_slug');

        $('.ancestry-entry').on('change', function (e) {
            updateAncestryPreview();
        });

        var ancestorTitles = [
            'sire', 'dam',
            'ss', 'sd', 'ds', 'dd',
            'sss', 'ssd', 'sds', 'sdd', 'dss', 'dsd', 'dds', 'ddd'
        ];

        function updateAncestryPreview() {
            var queries = [
                'custom='+useCustomLineage,
                'sire='+$sire_slug.val(),
                'dam='+$dam_slug.val(),
                'ss='+$ss_slug.val(),
                'sd='+$sd_slug.val(),
                'ds='+$ds_slug.val(),
                'dd='+$dd_slug.val(),
                'sss='+$sss_slug.val(),
                'ssd='+$ssd_slug.val(),
                'sds='+$sds_slug.val(),
                'sdd='+$sdd_slug.val(),
                'dss='+$dss_slug.val(),
                'dsd='+$dsd_slug.val(),
                'dds='+$dds_slug.val(),
                'ddd='+$ddd_slug.val(),
            ];
            $.get("{{ url('admin/masterlist/get-character-info') }}?"+queries.join('&'), function ( data ) {
                ancestorTitles.forEach((title) => {
                    $('#'+title+'Preview').html(data[title]);
                });
                $("[data-toggle='tooltip']").tooltip();
            });
        }

        updateAncestryPreview();

        function updateAncestryEntries() {
            if(useCustomLineage) {
                $('.custom-lineage-column').removeClass('hide');
            }
            else {
                $('.custom-lineage-column').addClass('hide');
            }
        }
    });
    $(document).keydown(function(e) {
    var code = e.keyCode || e.which;
    if(code == 13)
        return false;
    });
</script>