  @foreach($data as $result)
    <button id="compare_suggestion" value="{{$result->slug}}" type="button" class="list-group-item text-start" style="padding:0.3rem 0.6rem;">
      {{$result->name}}
      <p class="fw-lighter text-muted" style="font-size: 14px; margin-bottom:0px;">{{$result->location}}</p>

    </button>
  @endforeach
