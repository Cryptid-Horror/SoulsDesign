<!DOCTYPE html>
<html>
<head>

	<title>Genetics Portal</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" >
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="{{ asset('favicon.gif') }}">
	<!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{ asset('css/design_guide_generic.css') }}" rel="stylesheet">
	<link href="{{ asset('css/design_guide_custom.css') }}" rel="stylesheet">
</head>

<?php 
	$genomutes = [['Abundism', 'N/A'], ['Agouti', 'nAg/AgAg'], ['Albino', 'N/A'], ['Anery', 'N/A'], 
				  ['Blacklight', 'N/A'], ['Chimeric', 'N/A'], ['Leucism', 'N/A'], ['Radiance', 'nRad/RadRad']];

	$frees = [['Accents', 'AC'], ['Birthmark', 'BI'], ['Blush', 'BL'], ['Freckles', 'FL'], ['Minimal Mark', 'MM'],
			  ['Ankle', 'AK'], ['Socks', 'SO'], ['Tips', 'TI']];

	$commons = [['Blanket', 'nBl/BlBl'], ['Boar', 'nBr/BrBr'], ['Cape', 'nCa/CaCa'], ['Citrine', 'nCt/CtCt'], ['Collar', 'nCl/ClCl'],
				['Dun', 'nDn/DnDn'], ['Duotone', 'nDo/DoDo'], ['Dusted', 'nDt/DtDt'], ['Frog Eye', 'nFe/FeFe'], ['Hood', 'nHd/HdHd'],
				['Leaf', 'nLf/LfLf'], ['Masked', 'nMa/MaMa'], ['Pangare', 'nPa/PaPa'],
				['Points', 'nPo/PoPo'], ['Python', 'nPy/PyPy'], ['Rhodonite', 'nRd/RdRd'], ['Rimmed', 'nRi/Ri'],
				['Ringed', 'nRn/RnRn'], ['Ripples', 'nRip/RipRip'], ['Sable', 'nSa/SaSa'],
				['Scaled', 'nSc/ScSc'], ['Skink', 'nSk/SkSk'], ['Stained', 'nSn/SnSn'], ['Steel', 'nSl/SlSl'], ['Stockings', 'nSo/SoSo'],
				['Specter', 'nOse/OseOse'], ['Trailing', 'nTr/TrTr'], ['Underbelly', 'nUn/UnUn']];

	$uncommons = [['Azurite', 'nAz/AzAz'], ['Banded', 'nBa/BaBa'], ['Border', 'nBo/BoBo'],
				['Brindle', 'nBrd/BrdBrd'], ['Cloud', 'nCd/CdCd'],
				['Crested', 'nCr/CrCr'], ['Dapple', 'nDl/DlDl'], ['Dipped', 'nDi/DiDi'],
				['Dripping', 'nDr/DrDr'], ['Garnet', 'nGt/GtGt'], ['Inkwell', 'nIn/InIn'], ['Marbled', 'nMar/MarMar'],
				['Merle', 'nMr/MrMr'], ['Metallic', 'nMe/MeMe'], ['Petrified', 'nOpr/OprOpr'], ['Pigeon', 'nPg/PgPg'],
				['Plasma', 'nPs/PsPs'], ['Roan', 'nRo/RoRo'], ['Rosettes', 'nRs/RsRs'],
				['Shaped', 'nSp/SpSp'], ['Smoke', 'nSm/SmSm'], ['Tabby', 'nTa/TaTa'],
				['Tobiano', 'nTo/ToTo'], ['Topaz', 'nTz/TzTz'], ['Toxin', 'nTx/TxTx'], ['Tritone', 'nTt/TtTt']];

	$rares = [['Blooded', 'nBd/BdBd'], ['Circuit', 'nCi/CiCi'], ['Eyes', 'nEy/EyEy'], ['Filigree', 'nFi/FiFi'], ['Glass', 'nGl/GlGl'],
				['Jade', 'nJa/JaJa'], ['Luminescent', 'nLu/LuLu'], ['Lustrous', 'nLs/LsLs'], ['Painted', 'nPn/PnPn'],
				['Patchwork', 'nPw/PwPw'], ['Pearl', 'nOpe/OpeOpe'], ['Petal', 'nPl/PlPl'], ['Turquoise', 'nTu/TuTu']];

	$veryrares = [['Aether Marked', 'nAm/AmAm'], ['Amethyst', 'nAy/AyAy'], ['Arcane', 'nArc/ArcArc'], ['Aurora', 'nAu/AuAu'], ['Gemstone', 'nGm/GmGm'], 
				['Harlequin', 'nHar/HarHar'], ['Iridescent', 'nIr/IrIr'], ['Lepir', 'nLe/LeLe'],
				['Oilslick', 'nOol/OolOol'], ['Prismatic', 'nPr/PrPr'], ['Rune', 'nRu/RuRu'], ['Shimmer', 'nSh/ShSh'],
				['Triquetra', 'nTri/TriTri']];
	$legendarys = [['Confetti', 'nFti/FtiFti'], ['Constellation', 'nCn/CnCn'], ['Mermaid', 'nMer/MerMer'], ['Solar Flare', 'nSf/SfSf'], ['Torched', 'nTh/ThTh']];
?>
<body>
<div class="credit">
        <a href="https://www.soulsbetween.com/"><img src="https://i.imgur.com/3Jjag9m.png" width="200px"></a><br>
        Version: 1.0.0<br>
		Copyright Cryptid-Horror 2020 all Rights reserved. <br>
		Original Design for guides by Cryptid-Horror, rebuilt for LK by DraginRaptor.<br>
		Marking icons created by Cryptid-Horror, AlabasterGreen, and ModernBeatnik<br>
    </div>

	<div class="main">
		<div class="text-center mb-3">
			<h1><b><u>Genetics Portal</u></b></h1><br>
		</div>
		<hr>
		<div class="mb-4">
			<div class="alert alert-primary" role="alert">
				Welcome to the Genetics Portal! This is the main page of our genetics handguide. You will find links to all necessary documentations on the genes and traits of our dragons here! To view markings, click on the marking rarity names which will open a menu that shows you the different markings!<br><br>
				In addition, we've made many new changes to our guides and how markings work. We hope you have a fun time designing your dragons!
			</div>
		</div>

		<div class="d-flex justify-content-around mb-5">
			<div class="btn-group-vertical" class="btn btn-info">
				<a href="{{ url('info/Import_Extras') }}" class="btn btn-secondary">Import Extras and Effects</a>
                <a href="{{ url('info/dragon_registration') }}" class="btn btn-secondary">Submitting a Design</a>
				<a href="{{ url('info/Value_Saturation') }}" class="btn btn-secondary">Value and Saturation</a>
				<a href="{{ url('info/Design_Addons') }}" class="btn btn-secondary">Editing Imports with Items</a>

			</div>
			<div class="btn-group-vertical" class="btn btn-info">
				<a href="{{ url('world/traits?feature_category_id=8') }}" class="btn btn-secondary">Coat Types</a>
				<a href="{{ url('world/traits?feature_category_id=3') }}" class="btn btn-secondary">Tail Traits</a>
                <a href="{{ url('world/traits?feature_category_id=2') }}" class="btn btn-secondary">Eye Traits</a>
                <a href="{{ url('world/traits?feature_category_id=1') }}" class="btn btn-secondary">Horn Traits</a>
                <a href="{{ url('world/traits?feature_category_id=4') }}" class="btn btn-secondary">Ear Traits</a>


			</div>
			<div class="btn-group-vertical" class="btn btn-info">
				<a href="{{ url('') }}" class="btn btn-secondary">Aberrant State</a>
                <a href="{{ url('world/traits?feature_category_id=6') }}" class="btn btn-secondary">Breath Elements</a>
				<a href="{{ url('world/traits?feature_category_id=5') }}" class="btn btn-secondary">Physical Mutations</a>
                <a href="{{ url('world/traits?feature_category_id=7') }}" class="btn btn-secondary">Skills</a>
                <a href="{{ url('world/traits?feature_category_id=11') }}" class="btn btn-secondary">Temperaments</a>


			</div>
			<div class="btn-group-vertical" class="btn btn-info">
				<a href="{{ url('info/Check_List') }}" class="btn btn-secondary">Design Review Check List</a>
                <a href="{{ url('world/species') }}" class="btn btn-secondary">Dragon Species (Imports)</a>
				<a href="{{ url('info/Coat_Colors') }}" class="btn btn-secondary">Coat Colors and Melanism</a>
				<a href="{{ url('info/Genetic_Handbook') }}" class="btn btn-secondary">Genetic Handbook Guide</a>


			</div>
	
		</div>
		<div class="alert alert-primary" role="alert">
			  Base coats and Color modifer marking names have changed names and IDs! If you are unsure what your new marking should be called, please ask a staff member!
		</div>

		<!-- Common Genetics -->		
		<div class="accordion" id="accordionExample">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h2 class="mb-0">
						<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Free Markings
						</button>
					</h2>
				</div>

				<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						<div class="alert alert-info">
							Free marks have been expanded! Add these to the free marks section of your design submission if you use them! Free markings do not get added to the genotype, and cannot be passed to offspring. They are simply design enhancers, used to make designs more interesting, or unique. You can use none, or all of them, or any combination!
						</div>
						@foreach(array_chunk($frees, 4) as $free_chunk)
							<div class="row mb-3">
								@foreach($free_chunk as $free)
									<div class="col-md-6 col-lg-3 mb-2">
										<img src="{{ asset('images/design_guides/Free_'.str_replace(' ', '_', $free[0]).'.png') }}" width="90%" style="max-width:200px;">
										<a class="btn btn-info" href="{{ url('design/free/'.strtolower(str_replace(' ', '_', $free[0]))) }}">{{ $free[0].' ('.$free[1].')' }}</a>
									</div>
								@endforeach
							</div>
						@endforeach
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingTwo">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							Common Markings
						</button>
					</h2>
				</div>

				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					<div class="card-body">
						<div class="alert alert-info">
							<ul class="mb-0">
							<li>Ray is now combined with Sable</li>
								<li>Scorching and Fading have been merged to become Stained</li>
							</ul>
						</div>
						@foreach(array_chunk($commons, 4) as $common_chunk)
							<div class="row mb-3">
								@foreach($common_chunk as $common)
									<div class="col-md-6 col-lg-3 mb-2">
										<img src="{{ asset('images/design_guides/Common_'.str_replace(' ', '_', $common[0]).'.png') }}" width="90%" style="max-width:200px;">
										<a class="btn btn-info" href="{{ url('design/common/'.strtolower(str_replace(' ', '_', $common[0]))) }}">{{ $common[0].' ('.$common[1].')' }}</a>
									</div>
								@endforeach
							</div>
						@endforeach
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingThree">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							Uncommon Markings
						</button>
					</h2>
				</div>

				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
					<div class="card-body">
						<div class="alert alert-info">
							<ul class="mb-0">
								<li>Somatic is now called Brindled</li>
								<li>Bokeh Renamed to Dapple.</li>
							</ul>
						</div>
						@foreach(array_chunk($uncommons, 4) as $uncommon_chunk)
							<div class="row mb-3">
								@foreach($uncommon_chunk as $uncommon)
									<div class="col-md-6 col-lg-3 mb-2">
										<img src="{{ asset('images/design_guides/Uncommon_'.str_replace(' ', '_', $uncommon[0]).'.png') }}" width="90%" style="max-width:200px;">
										<a class="btn btn-info" href="{{ url('design/uncommon/'.strtolower(str_replace(' ', '_', $uncommon[0]))) }}">{{ $uncommon[0].' ('.$uncommon[1].')' }}</a>
									</div>
								@endforeach
							</div>
						@endforeach
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingFour">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							Rare Markings
						</button>
					</h2>
				</div>

				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
					<div class="card-body">
						<ul>
							<li>Appaloosa merged with Painted.</li>
							<li>Vignette renamed to Filigree</li>
						</ul>
						@foreach(array_chunk($rares, 4) as $rare_chunk)
							<div class="row mb-3">
								@foreach($rare_chunk as $rare)
									<div class="col-md-6 col-lg-3 mb-2">
										<img src="{{ asset('images/design_guides/Rare_'.str_replace(' ', '_', $rare[0]).'.png') }}" width="90%" style="max-width:200px;">
										<a class="btn btn-info" href="{{ url('design/rare/'.strtolower(str_replace(' ', '_', $rare[0]))) }}">{{ $rare[0].' ('.$rare[1].')' }}</a>
									</div>
								@endforeach
							</div>
						@endforeach
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingFive">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							Mythic Markings
						</button>
					</h2>
				</div>

				<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
					<div class="card-body">
						@foreach(array_chunk($veryrares, 4) as $veryrare_chunk)
							<div class="row mb-3">
								@foreach($veryrare_chunk as $veryrare)
									<div class="col-md-6 col-lg-3 mb-2">
										<img src="{{ asset('images/design_guides/Mythic_'.str_replace(' ', '_', $veryrare[0]).'.png') }}" width="90%" style="max-width:200px;">
										<a class="btn btn-info" href="{{ url('design/mythic/'.strtolower(str_replace(' ', '_', $veryrare[0]))) }}">{{ $veryrare[0].' ('.$veryrare[1].')' }}</a>
									</div>
								@endforeach
							</div>
						@endforeach
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingSix">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
							Legendary Markings
						</button>
					</h2>
				</div>
				<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
					<div class="card-body">
					<ul class="mb-0">
								<li>Legendary Markings are from special starters. These markings can only be added with Legendary vouchers or from nesting. They do not drop in eggs.</li>
							</ul>
						@foreach(array_chunk($legendarys, 4) as $legendary_chunk)
							<div class="row mb-3">
								@foreach($legendary_chunk as $legendary)
									<div class="col-md-6 col-lg-3 mb-2">
										<img src="{{ asset('images/design_guides/Legendary_'.str_replace(' ', '_', $legendary[0]).'.png') }}" width="90%" style="max-width:200px;">
										<a class="btn btn-info" href="{{ url('design/legendary/'.strtolower(str_replace(' ', '_', $legendary[0]))) }}">{{ $legendary[0].' ('.$legendary[1].')' }}</a>
									</div>
								@endforeach
							</div>
						@endforeach
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingSeven">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
							Genotype Color Mutations
						</button>
					</h2>
				</div>
				<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
					<div class="card-body">
					<ul class="mb-0">
								<li>Genotype color mutations are non passable except for Agouti and Radiance.</li>
							</ul>
						@foreach(array_chunk($genomutes, 4) as $genomutes_chunk)
							<div class="row mb-3">
								@foreach($genomutes_chunk as $genomutes)
									<div class="col-md-6 col-lg-3 mb-2">
										<img src="{{ asset('images/design_guides/Color_mutations_'.str_replace(' ', '_', $genomutes[0]).'.png') }}" width="90%" style="max-width:200px;">
										<a class="btn btn-info" href="{{ url('design/color_mutations/'.strtolower(str_replace(' ', '_', $genomutes[0]))) }}">{{ $genomutes[0].' ('.$genomutes[1].')' }}</a>
									</div>
								@endforeach
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Bootstrap core JavaScript-->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>    
	<script src="{{ asset('js/app.js') }}"></script>
	<!--
	<script src="../js/ddmenu.js" type="text/javascript"></script>
	<script src="../js/jquery.js"></script>-->
</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'p3plcpnl0583'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>

