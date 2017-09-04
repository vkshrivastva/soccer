<div class="row title text-capitalize h5">
    <div class="col-lg-12">Player's List of team "{{$selectedTeam->name}}"</div>
</div>
<div class="row">
    <div class="col-lg-12">&nbsp;</div>
</div>
<div class="row title text-capitalize strong">
<div class="col-lg-2">&nbsp;</div>
    <div class="col-lg-1">#</div>
    <div class="col-lg-2">Last Name</div>
    <div class="col-lg-2">First Name</div>
    <div class="col-lg-5">Photo</div>
</div>
@foreach($players as $key=>$player)
    <div class="row">
        <div class="col-lg-2">&nbsp;</div>
        <div class="col-lg-1">{{$key+1}}</div>
        <div class="col-lg-2">{{ $player->last_name }}</div>
        <div class="col-lg-2">{{ $player->first_name }}</div>
        <div class="col-lg-5">
            <img class="thumbnail pull-left img-thumbnail" alt="{{ $player->first }}" src="images/players/{{ $player->image_uri }}" style="width:100px;height:75px;" />
        </div>
    </div>
@endforeach