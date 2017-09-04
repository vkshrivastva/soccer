<div class="row title text-capitalize h5">
    <div class="col-lg-12">List of All Soccer Team</div>
</div>

<div class="row">
    <div class="col-lg-12">&nbsp;</div>
</div>
<div class="row title text-capitalize header">
    <div class="col-lg-1">#</div>
    <div class="col-lg-2">Photo</div>
    <div class="col-lg-5">Team Name</div>
</div>
@foreach($teams as $key=>$team)
    <div id={{$team->id}} class="row {{$selectedTeam->id==$team->id ? 'mark':'' }}">
        <div class="col-lg-1">{{$key+1}}</div>
        <div class="col-lg-2">
            <a href="javascript:void(0);" onclick="javascript:getPlayers({{$team->id}});">
                <img class="thumbnail pull-left img-thumbnail" alt="{{ $team->name }}" src="images/teams/{{ $team->logo_uri }}" style="width:100px;height:75px;" />
            </a>
        </div>
        <div class="col-lg-5"> {{ $team->name }}</div>
    </div>
@endforeach