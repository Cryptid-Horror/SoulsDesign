<h1>Welcome, {!! Auth::user()->displayName !!}!</h1>
<div class="card mb-4 timestamp">
    <div class="card-body">
        <i class="far fa-clock"></i> {!! format_date(Carbon\Carbon::now()) !!}
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="{{ asset('images/account.png') }}" />
                <h5 class="card-title">Account</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ Auth::user()->url }}">Profile</a></li>
                <li class="list-group-item"><a href="{{ url('account/settings') }}">User Settings</a></li>
                <li class="list-group-item"><a href="{{ url('trades/open') }}">Trades</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="{{ asset('images/characters.png') }}" />
                <h5 class="card-title">Dragons</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ url('characters') }}">My Official Dragons</a></li>
                <li class="list-group-item"><a href="{{ url('characters/myos') }}">My Registered Dragon Slots</a></li>
                <li class="list-group-item"><a href="{{ url('characters/transfers/incoming') }}">Dragon Transfers</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="{{ asset('images/inventory.png') }}" />
                <h5 class="card-title">Hoard</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ url('inventory') }}">My Hoard</a></li>
                <li class="list-group-item"><a href="{{ Auth::user()->url . '/item-logs' }}">Item Logs</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body text-center">
                <img src="{{ asset('images/currency.png') }}" />
                <h5 class="card-title">Bank</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ url('bank') }}">Bank of Empyrean</a></li>
                <li class="list-group-item"><a href="{{ Auth::user()->url . '/currency-logs' }}">Currency Logs</a></li>
            </ul>
        </div>
    </div>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox" style=" width:650px; height: 650px !important;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

  </ol>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/9b681380-b3c6-466c-b117-ddc999b0448d/dchvue2-8b4dfad9-f229-4105-bea3-1cb48532969b.png/v1/fill/w_900,h_519,strp/sb_a_beautiful_day_for_a_hunt___for_cryptid_horror_by_shinshinju_dchvue2-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD01MTkiLCJwYXRoIjoiXC9mXC85YjY4MTM4MC1iM2M2LTQ2NmMtYjExNy1kZGM5OTliMDQ0OGRcL2RjaHZ1ZTItOGI0ZGZhZDktZjIyOS00MTA1LWJlYTMtMWNiNDg1MzI5NjliLnBuZyIsIndpZHRoIjoiPD05MDAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.MQ4BEYqrjUHc9YD8W2q_7jm6kyubz21CrH9rXWi2__U" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f3d7ff46-c2c0-46f9-a4b7-a40d436e2187/de4hxkk-7fd600d3-9ad8-407f-ba96-aaa68b966b13.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvZjNkN2ZmNDYtYzJjMC00NmY5LWE0YjctYTQwZDQzNmUyMTg3XC9kZTRoeGtrLTdmZDYwMGQzLTlhZDgtNDA3Zi1iYTk2LWFhYTY4Yjk2NmIxMy5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.cFgzyax-59qu8EI1PyqYePVbHeWHD4v-lhKPBPwofYs" alt="https://www.deviantart.com/xanowa/art/Good-Deeds-Low-Healing-854081588">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/9e59bd4c-53a4-4777-9759-46fbdc593c89/de1s09u-c00ea0c4-ad9b-428d-93f5-6f68f59ef51e.png/v1/fill/w_1280,h_723,q_80,strp/sb___hey__that_s_cold__by_otterbird_de1s09u-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD03MjMiLCJwYXRoIjoiXC9mXC85ZTU5YmQ0Yy01M2E0LTQ3NzctOTc1OS00NmZiZGM1OTNjODlcL2RlMXMwOXUtYzAwZWEwYzQtYWQ5Yi00MjhkLTkzZjUtNmY2OGY1OWVmNTFlLnBuZyIsIndpZHRoIjoiPD0xMjgwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.noI9vhZqvP1eTIxGe3b--mL3Ctl06D8Dm1M8EoK0mX0" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/21b8a0bc-d355-41d5-8821-8f1152a60b7c/de2ag0i-2907ab78-0b72-4c91-9835-861601131efa.png/v1/fill/w_1280,h_712,q_80,strp/the_thousand_spires_by_theinfinitechaos_de2ag0i-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD03MTIiLCJwYXRoIjoiXC9mXC8yMWI4YTBiYy1kMzU1LTQxZDUtODgyMS04ZjExNTJhNjBiN2NcL2RlMmFnMGktMjkwN2FiNzgtMGI3Mi00YzkxLTk4MzUtODYxNjAxMTMxZWZhLnBuZyIsIndpZHRoIjoiPD0xMjgwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.cNZnQnHu80zLcYC1en3VuQ35xFmA6TeKmiCxg8wsZT0" alt="Fourth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
   <li class="list-group-item"><a href="{{ url('https://www.deviantart.com/shinshinju/art/SB-A-Beautiful-Day-For-A-Hunt-For-cryptid-horror-755633306')}}">ShinShinju</a></li>
                <li class="list-group-item"><a href="{{ url('https://www.deviantart.com/xanowa/art/Good-Deeds-Low-Healing-854081588')}}">Xanowa</a></li>
                <li class="list-group-item"><a href="{{ url('https://www.deviantart.com/otterbird/art/SB-Hey-That-s-Cold-849512802')}}">Otterbird</a></li>
                <li class="list-group-item"><a href="{{ url('https://www.deviantart.com/theinfinitechaos/art/The-Thousand-Spires-850373010')}}">TheInfiniteChaos</a></li>
  </ul>
</div>


</div>