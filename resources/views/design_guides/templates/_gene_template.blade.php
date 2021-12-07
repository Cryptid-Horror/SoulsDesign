<!DOCTYPE html>
<html>
<head>
	<title>{{ $marking_name }} ({{ $marking_code }})</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" >
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="{{ asset('/favicon.gif') }}">
	<!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/featherlight.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{ asset('css/design_guide_generic.css') }}" rel="stylesheet">
	<link href="{{ asset('css/design_guide_custom.css') }}" rel="stylesheet">
</head>

<body>
	<div class="main">
        <div class="text-center mb-5">
            <h2><a href="{{ url('/design') }}">Click here to return to the Genetics portal!</a></h2>
        </div>
        <div class="row">
            <div class="col-xl-9 mb-3">
                <!-- Marking Name and Code -->
                <h3>{{ $marking_name }}<center>{{ $marking_code }}</center></h3>

                <!-- Marking Description -->
                {{ $marking_desc }}
            </div>

            <!-- Marking Icon -->
            <div class="text-center col-xl-3 mb-3"><img src="{{ asset('images/design_guides/'.$marking_icon.'.png') }}" width="90%" style="max-width:250px;"></div>
        </div>
        <hr>
        <div class="row">
            <div class="text-center col-xl-4 col-lg-5 mb-3">
                <!-- Marking Layering -->
                <h4><b><u>Layering and Ranges</u></b></h4>
                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                    @include('design_guides.templates._marking_interactions')
                    <a class="btn btn-secondary" href="{{ url('info/Genetic_Handbook') }}">Genetic Portal Handbook

                    <a class="btn btn-dark"></a>

                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ♦ Basileus Ranges
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                            <a class="dropdown-item" data-fancybox="gallery" href="imagehere">Coming Soon!</a>
                        </div>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop2" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ♦ Dragon Ranges
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                            <a class="dropdown-item" data-fancybox="gallery" href="{{ asset('images/design_guides/ranges/'.$ranges['Sapiere'].'.png') }}">Sapiere</a>
                            <a class="dropdown-item" data-fancybox="gallery" href="{{ asset('images/design_guides/ranges/'.$ranges['Warden'].'.png') }}">Warden</a>
                        </div>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop3" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ♦ Drake Ranges
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                        <a class="dropdown-item" data-fancybox="gallery" href="imagehere">Coming Soon!</a>
                        </div>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop4" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ♦ Emperor Ranges
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                            <a class="dropdown-item" data-fancybox="gallery" href="{{ asset('images/design_guides/ranges/'.$ranges['Greater'].'.png') }}">Greater</a>
                        </div>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop5" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ♦ Pseudo Ranges
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop5">
                            <a class="dropdown-item" data-fancybox="gallery" href="imagehere">Coming Soon!</a>
                        </div>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop6" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ♦ Wyvern Ranges
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop6">
                            <a class="dropdown-item" data-fancybox="gallery" href="{{ asset('images/design_guides/ranges/'.$ranges['Ravager'].'.png') }}">Ravager</a>
                            <a class="dropdown-item" data-fancybox="gallery" href="{{ asset('images/design_guides/ranges/'.$ranges['Stalker'].'.png') }}">Stalker</a>
                        </div>
                    </div>

                    <button type="button" class="btn btn-dark"></button>
                    
                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop7" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Import Effects
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop7">
                            <a class="dropdown-item" href="{{ url('info/Value_Saturation') }}">Value and Saturation</a>
                            <a class="dropdown-item" href="{{ url('info/Free_Marks') }}">Minimal (free) Markings</a>
                            <a class="dropdown-item" href="{{ url('info/Import_Extras') }}">Import Effects</a>
                            <a class="dropdown-item" href="{{ url('info/Design_Addons') }}">Item kits, Shampoo, and Extras</a>
                            
                        </div>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop8" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            General Features
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop8">
                        <a class="dropdown-item" href="https://www.deviantart.com/the-below/gallery/66157893/dragon-imports">Import File Downloads</a>
                            <a class="dropdown-item" href="{{ url('info/Coat_Colors') }}">Coat Colors Explained</a>
                            <a class="dropdown-item" href="{{ url('world/traits?feature_category_id=6') }}">Breath Elements</a>
                            <a class="dropdown-item" href="{{ url('world/traits?feature_category_id=7') }}">Skills</a>
                            <a class="dropdown-item" href="{{ url('world/trait-categories') }}">Physical Traits</a>
                            <a class="dropdown-item" href="{{ url('info/Lineage_guide') }}">Filling out the Lineage</a>
                            <a class="dropdown-item" href="{{ url('info/Nesting_Odds') }}">Inbreeding Consequences</a>
                            <a class="dropdown-item" href="{{ url('info/Import_Info') }}">Registration Information</a>   
                            <a class="dropdown-item" href="{{ url('info/Check_List') }}">Design Review checklist</a>
                        </div>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop9" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Mutations
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop9">
                            <a class="dropdown-item" href="{{ url('world/traits?feature_category_id=5') }}">Physical Mutations</a>
                            <a class="dropdown-item" href="{{ url('design/color_mutations/abundism') }}">Abundism</a>
                            <a class="dropdown-item" href="{{ url('design/color_mutations/albino') }}">Albino</a>
                            <a class="dropdown-item" href="{{ url('design/color_mutations/anery') }}">Anery</a>
                            <a class="dropdown-item" href="{{ url('design/color_mutations/chimeric') }}">Chimeric</a>
                            <a class="dropdown-item" href="{{ url('design/color_mutations/leucism') }}">Luecism</a>
                            <a class="dropdown-item" href="{{ url('design/color_mutations/melanistic') }}">Melanistic</a>   
                            <a class="dropdown-item" href="{{ url('design/color_mutations/radiance') }}">Radiance</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Marking Properties -->
            <div class="col-xl-8 col-lg-7 mb-3">
                <center><h4><b><u>Properties</u></b></h4></center>
                <div class="row m-3 d-flex justify-content-center">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/design_guides/properties/edge_solid_'.$edge_solid.'.png') }}" width="90%" style="max-width:120px;">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/design_guides/properties/edge_feathered_'.$edge_feathered.'.png') }}" width="90%" style="max-width:120px;">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/design_guides/properties/edge_border_'.$edge_border.'.png') }}" width="90%" style="max-width:120px;">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/design_guides/properties/edge_textured_'.$edge_textured.'.png') }}" width="90%" style="max-width:120px;">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/design_guides/properties/edge_mottled_'.$edge_mottled.'.png') }}" width="90%" style="max-width:120px;">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/design_guides/properties/edge_soft_'.$edge_soft.'.png') }}" width="90%" style="max-width:120px;">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/design_guides/properties/color_darker_'.$color_darker.'.png') }}" width="90%" style="max-width:120px;">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/design_guides/properties/color_lighter_'.$color_lighter.'.png') }}" width="90%" style="max-width:120px;">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/design_guides/properties/color_natural_'.$color_natural.'.png') }}" width="90%" style="max-width:120px;">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/design_guides/properties/edge_blurred_'.$edge_blurred.'.png') }}" width="90%" style="max-width:120px;">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/design_guides/properties/edge_gradient_'.$edge_gradient.'.png') }}" width="90%" style="max-width:120px;">
                        </div>
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('images/design_guides/properties/color_any_'.$color_any.'.png') }}" width="90%" style="max-width:120px;">
                        </div>
                    </div>
                </div>
                
                <div class="row m-3 d-flex justify-content-center">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('images/design_guides/properties/edge_blending_'.$edge_blending.'.png') }}" width="90%" style="max-width:120px;">
                        </div>
                        <div class="col">
                            <img src="{{ asset('images/design_guides/properties/color_dependant_'.$color_dependant.'.png') }}" width="90%" style="max-width:120px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <!-- Marking Behaviors // add more rows for more images as needed, Text goes down below the images.-->
        <center>
            <h1><b><u>Behaviors</u></b></h1>
            <br>
            <div class="row justify-content-center">
                @foreach($behavior_examples as $example)
                    <div class="col-6 col-md-3">
                        <img src="{{ asset('images/design_guides/examples/genes/'.$example.'.png') }}" width="90%"><br><br>
                    </div>
                @endforeach
            </div>
        </center>

        <br>

        @foreach($marking_can as $can)
            <div class="alert alert-success" role="alert">
                ♦ {!! $can !!}<br>
            </div>
        @endforeach
        @foreach($marking_cannot as $cannot)
            <div class="alert alert-danger" role="alert">
                ♦ {!! $cannot !!}<br>
            </div>
        @endforeach
        @foreach($marking_must as $must)
            <div class="alert alert-warning" role="alert">
                ♦ {!! $must !!}<br>
            </div>
        @endforeach
        <hr>

        <!-- Marking Color Swatches (if needed) -->
        @if(count($swatches))
            <center>
                <h1><b><u>Approved Color Swatches</u></b></h1><br>
                @foreach($swatches as $swatch)
                    <img src="{{ asset('images/design_guides/swatches/'.$swatch.'.png') }}" width="400px">
                @endforeach
            </center>
            <hr>
        @endif

        <!-- Marking Carasoul -->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @for($i=0; $i < count($design_carousel); $i++)
                    <li data-target="#carouselExampleCaptions" data-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : ''}}"></li>
                @endfor
            </ol>
            <div class="carousel-inner">
                @for($i=0; $i < count($design_carousel); $i++)
                    <div class="carousel-item {{ $i == 0 ? 'active' : ''}}">
                        <img src="{{ asset('images/design_guides/examples/approved_designs/'.$design_carousel[$i]['image_name'].'.png') }}" class="d-block w-100" alt="{{ $design_carousel[$i]['alt'] }}">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $design_carousel[$i]['label'] }}</h5>
                            <p>{{ $design_carousel[$i]['caption'] }}</p>
                        </div>
                    </div>
                @endfor
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
	</div>
	<div class="footer">
	    Copyright Livard Arts and Cryptid-Horror 2020 all Rights reserved.<br>
	</div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/featherlight.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <!--<script src="../js/jquery-3.5.0.js"></script>
    <script src="../Bootstrap/Bootstrap_JS/bootstrap.bundle.min.js"></script>
    <script src="../js/ddmenu.js" type="text/javascript"></script>
    <script src="../js/jquery.js"></script>-->
</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'p3plcpnl0583'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>

