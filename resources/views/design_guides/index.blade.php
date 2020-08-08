<!DOCTYPE html>
<html>
<head>
	<title>Genetics Portal</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" >
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="http://i.imgur.com/mDXvBKC.png">
	<!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{ asset('css/design_guide_generic.css') }}" rel="stylesheet">
	<link href="{{ asset('css/design_guide_custom.css') }}" rel="stylesheet">
</head>

<?php 
	$commons = [['Blanket', 'nBl/BlBl'], ['Boar', 'nBr/BrBr'], ['Collar', 'nCl/ClCl'],
				['Dunstripe', 'nDn/DnDn'], ['Dusted', 'nDt/DtDt'], ['Flaxen', 'nFla/FlaFla'],
				['Frog Eye', 'nFe/FeFe'], ['Greying', 'nGr/GrGr'], ['Hood', 'nHd/HdHd'],
				['Leaf', 'nLf/LfLf'], ['Masked', 'nMa/MaMa'], ['Pangare', 'nPa/PaPa'],
				['Points', 'nPo/PoPo'], ['Python', 'nPy/PyPy'], ['Rimmed', 'nRi/Ri'],
				['Ringed', 'nRn/RnRn'], ['Rose', 'nRos/RosRos'], ['Sable', 'nSa/SaSa'],
				['Scaled', 'nSc/ScSc'], ['Skink', 'nSk/SkSk'], ['Stained', 'nSn/SnSn'],
				['Trailing', 'nTr/TrTr'], ['Underbelly', 'nUn/UnUn']];

	$uncommons = [['Azure', 'nAz/AzAz'], ['Banded', 'nBa/BaBa'], ['Bokeh', 'nBk/BkBk'], ['Border', 'nBo/BoBo'],
				['Brindle', 'nBrd/BrdBrd'], ['Cloud', 'nCl/ClCl'], ['Copper', 'nCp/CpCp'],
				['Crested', 'nCr/CrCr'], ['Crimson', 'nCr/CrCr'], ['Dipped', 'nDi/DiDi'],
				['Dripping', 'nDr/DrDr'], ['Inkwell', 'nIn/InIn'], ['Marbled', 'nMar/MarMar'],
				['Merle', 'nMr/MrMr'], ['Metallic', 'nMe/MeMe'], ['Pigeon', 'nPg/PgPg'],
				['Plasma', 'nPs/PsPs'], ['Roan', 'nRo/RoRo'], ['Rosettes', 'nRs/RsRs'],
				['Shaped', 'nSp/SpSp'], ['Smoke', 'nSm/SmSm'], ['Tabby', 'nTa/TaTa'],
				['Tobiano', 'nTo/ToTo'], ['Toxin', 'nTx/TxTx']];

	$rares = [['Appaloosa', 'nAp/ApAp'], ['Blooded', 'nBd/BdBd'], ['Eyes', 'nEy/EyEy'], ['Glass', 'nGl/GlGl'],
			['Jade', 'nJa/JaJa'], ['Luminescent', 'nLu/LuLu'], ['Lustrous', 'nLs/LsLs'], ['Painted', 'nPn/PnPn'],
			['Petal', 'nPl/PlPl'], ['Vignette', 'nVi/ViVi']];

	$veryrares = [['Aether Marked', 'nAm/AmAm'], ['Aurora', 'nAu/AuAu'], ['Gemstone', 'nGm/GmGm'],
				['Iridescent', 'nIr/IrIr'], ['Lepir', 'nLe/LeLe'], ['Lilac', 'nLi/LiLi'],
				['Prismatic', 'nPr/PrPr'], ['Rune', 'nRu/RuRu'], ['Shimmer', 'nSh/ShSh'],
				['Triquetra', 'nTri/TriTri']];
?>
<body>
	<div class="MainHeader mb-5">
		<img src="{{ asset('images/design_guides/mainheader.png') }}" width="65%">
		<div class="newsheader">
			<h2><a href="{{ url('/') }}">Click here to return to the Home page!</a></h2>
		</div>
	</div>

	<div class="main">
		<div class="text-center mt-5 mb-3">
			<h1><b><u>Genetics Portal</u></b></h1><br>
		</div>
		<hr>
		<div class="mb-4">
			Welcome to the Genetics Portal! This is the main page of our genetics handguide. You will find links to all necessary documentations on the genes and traits of our dragons here! To view markings, click on the marking rarity names which will open a menu that shows you the different markings!<br><br>
			In addition, we've made many new changes to our guides and how markings work. We hope you have a fun time designing your dragons!
		</div>
		<button type="button" class="btn btn-secondary btn-lg btn-block mb-3">Genetic Portal Handbook</button>
		<button type="button" class="btn btn-secondary btn-lg btn-block mb-5">Base coats and How they Work</button>

		<div class="d-flex justify-content-around mb-5">
			<div class="btn-group-vertical">
				<button type="button" class="btn btn-secondary">Import File Downloads</button>
				<button type="button" class="btn btn-secondary">Written Import Information</button>
				<button type="button" class="btn btn-secondary">Filling out the Lineage</button>
				<button type="button" class="btn btn-secondary">Design Guide check List</button>
			</div>
			<div class="btn-group-vertical">
				<button type="button" class="btn btn-secondary">Physical Traits</button>
				<button type="button" class="btn btn-secondary">Breath Abilities</button>
				<button type="button" class="btn btn-secondary">Skills</button>
				<button type="button" class="btn btn-secondary">Inbreeding Consequences</button>
			</div>
			<div class="btn-group-vertical">
				<button type="button" class="btn btn-secondary">Value and Saturation</button>
				<button type="button" class="btn btn-secondary">Coloring in Extra Details</button>
				<button type="button" class="btn btn-secondary">Minimal (Free) Markings</button>
				<button type="button" class="btn btn-secondary">Import Effects</button>
				<button type="button" class="btn btn-secondary">Shampoo and Item Kits</button>
			</div>
			<div class="btn-group-vertical">
				<button type="button" class="btn btn-secondary">Physical Mutations</button>
				<button type="button" class="btn btn-secondary">Abundism</button>
				<button type="button" class="btn btn-secondary">Albino </button>
				<button type="button" class="btn btn-secondary">Anery</button>
			</div>
			<div class="btn-group-vertical">
				<button type="button" class="btn btn-secondary">Chimeric</button>
				<button type="button" class="btn btn-secondary">Luecism</button>
				<button type="button" class="btn btn-secondary">Melanistic</button>
				<button type="button" class="btn btn-secondary">Radiance</button>
			</div>
		</div>

		<!-- Common Genetics -->		
		<div class="accordion" id="accordionExample">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h2 class="mb-0">
						<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Common Markings
						</button>
					</h2>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
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
				<div class="card-header" id="headingTwo">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							Uncommon Markings
						</button>
					</h2>
				</div>

				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					<div class="card-body">
						<div class="alert alert-info">
							<ul class="mb-0">
								<li>Somatic is now called Brindled</li>
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
				<div class="card-header" id="headingThree">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							Rare Markings
						</button>
					</h2>
				</div>

				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
					<div class="card-body">
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
				<div class="card-header" id="headingFour">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							Very Rare Markings
						</button>
					</h2>
				</div>
				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
					<div class="card-body">
						@foreach(array_chunk($veryrares, 4) as $veryrare_chunk)
							<div class="row mb-3">
								@foreach($veryrare_chunk as $veryrare)
									<div class="col-md-6 col-lg-3 mb-2">
										<img src="{{ asset('images/design_guides/VeryRare_'.str_replace(' ', '_', $veryrare[0]).'.png') }}" width="90%" style="max-width:200px;">
										<a class="btn btn-info" href="{{ url('design/veryrare/'.strtolower(str_replace(' ', '_', $veryrare[0]))) }}">{{ $veryrare[0].' ('.$veryrare[1].')' }}</a>
									</div>
								@endforeach
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		Copyright Livard Arts and Cryptid-Horror 2020 all Rights reserved.<br>
		Marking Icons created by ModernBeatnik<br>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>    
	<script src="{{ asset('js/app.js') }}"></script>
	<!--
	<script src="../js/ddmenu.js" type="text/javascript"></script>
	<script src="../js/jquery.js"></script>-->
</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'p3plcpnl0583'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>

