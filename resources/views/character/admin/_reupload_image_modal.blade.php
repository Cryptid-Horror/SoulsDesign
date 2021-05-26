{!! Form::open(['url' => 'admin/character/image/'.$image->id.'/reupload', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('Character Image') !!} {!! add_help('This is the full masterlist image. Note that the image is not protected in any way, so take precautions to avoid art/design theft.') !!}
        <div>{!! Form::file('image', ['id' => 'mainImage']) !!}</div>
        ---OR---
        <div>{!! Form::text('ext_url', null, ['class' => 'form-control', 'id' => 'extMainImage', 'placeholder' => 'Add a link to a dA or sta.sh upload']) !!}</div>
    </div>
@if (Config::get('lorekeeper.settings.masterlist_image_automation') === 1)
    <div class="form-group">
        {!! Form::checkbox('use_cropper', 1, 1, ['class' => 'form-check-input', 'data-toggle' => 'toggle', 'id' => 'useCropper']) !!}
        {!! Form::label('use_cropper', 'Use Thumbnail Automation', ['class' => 'form-check-label ml-3']) !!} {!! add_help('A thumbnail is required for the upload (used for the masterlist). You can use the Thumbnail Automation, or upload a custom thumbnail.') !!}
    </div>
    <div class="card mb-3" id="thumbnailCrop">
        <div class="card-body">
            <div id="cropSelect">By using this function, the thumbnail will be automatically generated from the full image.</div>
            {!! Form::hidden('x0', 1) !!}
            {!! Form::hidden('x1', 1) !!}
            {!! Form::hidden('y0', 1) !!}
            {!! Form::hidden('y1', 1) !!}
        </div>
    </div>
@else
    <div class="form-group">
        {!! Form::checkbox('use_custom_thumb', 1, 0, ['class' => 'form-check-input', 'data-toggle' => 'toggle', 'id' => 'useCustomThumbnail']) !!}
        {!! Form::label('use_custom_thumb', 'Upload Custom Thumbnail', ['class' => 'form-check-label ml-3']) !!} {!! add_help('A thumbnail is required for the upload (used for the masterlist). You can use the image cropper (crop dimensions can be adjusted in the site code), or upload a custom thumbnail.') !!}
    </div>
    <div class="card mb-3" id="thumbnailSelect">
        <div class="card-body">
            Select an image to use the thumbnail cropper, or add a dA link to see a preview.
        </div>
    </div>
    <div class="card mb-3" id="thumbnailCrop">
        <div class="card-body">
            <img src="#" id="cropper" class="hide" />
            {!! Form::hidden('x0', null, ['id' => 'cropX0']) !!}
            {!! Form::hidden('x1', null, ['id' => 'cropX1']) !!}
            {!! Form::hidden('y0', null, ['id' => 'cropY0']) !!}
            {!! Form::hidden('y1', null, ['id' => 'cropY1']) !!}
        </div>
    </div>
@endif
    <div class="card mb-3" id="thumbnailUpload">
        <div class="card-body">
            {!! Form::label('Thumbnail Image') !!} {!! add_help('This image is shown on the masterlist page.') !!}
            <div>{!! Form::file('thumbnail') !!}</div>
            <div class="text-muted">Recommended size: {{ Config::get('lorekeeper.settings.masterlist_thumbnails.width') }}px x {{ Config::get('lorekeeper.settings.masterlist_thumbnails.height') }}px</div>
        </div>
    </div>

    <div class="text-right">
        {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}

<script>
    $(document).ready(function() {
        //$('#useCropper').bootstrapToggle();

        // Cropper ////////////////////////////////////////////////////////////////////////////////////

        var $useCustomThumbnail = $('#useCustomThumbnail');
        var $thumbnailSelect = $('#thumbnailSelect');
        var $thumbnailCrop = $('#thumbnailCrop');
        var $thumbnailUpload = $('#thumbnailUpload');
        var $thumbnailDaPreview = $('#thumbnailDaPreview');

        var useCustomThumbnail = $useCustomThumbnail.is(':checked');

        updatePreviewArea();

        $useCustomThumbnail.on('change', function(e) {
            useCustomThumbnail = $useCustomThumbnail.is(':checked');
            updatePreviewArea();
        });

        function updatePreviewArea() {
            if(useCustomThumbnail) {
                unhideUpload();
            }
            else {
                if(($('#mainImage')[0] && $('#mainImage')[0].value)) { unhideCrop(); }
                else if($('#extMainImage')[0] && $('#extMainImage')[0].value) { unhideDaPreview(); }
                else { unhideSelect(); }
            }
        }
        
        function unhideSelect() {
            $thumbnailUpload.addClass('hide');
            $thumbnailSelect.removeClass('hide');
            $thumbnailCrop.addClass('hide');
            $thumbnailDaPreview.addClass('hide');
        }

        function unhideCrop() {
            $thumbnailUpload.addClass('hide');
            $thumbnailSelect.addClass('hide');
            $thumbnailCrop.removeClass('hide');
            $thumbnailDaPreview.addClass('hide');
        }

        function unhideDaPreview() {
            $thumbnailUpload.addClass('hide');
            $thumbnailSelect.addClass('hide');
            $thumbnailCrop.addClass('hide');
            $thumbnailDaPreview.removeClass('hide');
        }

        function unhideUpload() {
            $thumbnailUpload.removeClass('hide');
            $thumbnailSelect.addClass('hide');
            $thumbnailCrop.addClass('hide');
            $thumbnailDaPreview.addClass('hide');
        }

        // Croppie ////////////////////////////////////////////////////////////////////////////////////

        var thumbnailWidth = {{ Config::get('lorekeeper.settings.masterlist_thumbnails.width') }};
        var thumbnailHeight = {{ Config::get('lorekeeper.settings.masterlist_thumbnails.height') }};
        var $cropper = $('#cropper');
        var c = null;
        var $x0 = $('#cropX0');
        var $y0 = $('#cropY0');
        var $x1 = $('#cropX1');
        var $y1 = $('#cropY1');
        var zoom = 0;

        function readURL(input) {
            // First reset croppie
            if(c) {
                c.destroy();
                c.element.outerHTML = c.element.innerHTML;
            }
            c = null;
            $cropper = $('#cropper');
            $cropper.attr('src', '#');
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $cropper.attr('src', e.target.result);
                    c = new Croppie($cropper[0], {
                        viewport: {
                            width: thumbnailWidth,
                            height: thumbnailHeight
                        },
                        boundary: { width: thumbnailWidth + 100, height: thumbnailHeight + 100 },
                        update: function() {
                            updateCropValues();
                        }
                    });
                    updateCropValues();
                    $('#cropSelect').addClass('hide');
                    $cropper.removeClass('hide');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#mainImage").change(function() {
            $('#extMainImage')[0].value = null;
            $useCustomThumbnail.bootstrapToggle('off');
            readURL(this);
        });

        $("#extMainImage").focusout(function() {
            $("#mainImage")[0].value = null;
            $useCustomThumbnail.bootstrapToggle('off');
        });

        function updateCropValues() {
            var values = c.get();
            $x0.val(values.points[0]);
            $y0.val(values.points[1]);
            $x1.val(values.points[2]);
            $y1.val(values.points[3]);
        }
    });

</script>