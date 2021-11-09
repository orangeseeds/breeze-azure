
<div class="col-md-4 ps-3 mb-3">
  <div class="card py-0 overflow-hidden position-relative">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="290" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
      <title>Placeholder</title>

    <clipPath id="myRect">
      <rect width="100%" height="70%" fill="#868e96"></rect>
      <text x="40%" y="35%" fill="#dee2e6" dy=".3em">Image cap</text>
    </clipPath>
    <image width="100%" href="{{ asset('/storage/'.$consultancy->cover_picture) }}" clip-path="url(#myRect)" />
      <!-- <circle class="position-relative" cx="50%" cy="70%" fill="red" r="60">
        <image class="position-absolute" width="60" src="https://i.pinimg.com/236x/c3/49/96/c34996634d4aa85394fcfba1f1afad17.jpg" alt="">
      </circle> -->
      <!-- <defs> -->
      <circle class="" cx="50%" cy="70%" fill="white" r="65"/>
    <clipPath id="myCircle">
       <circle class="profilePic" cx="50%" cy="70%" fill="red" r="60"/>
    </clipPath>
 <!-- </defs> -->
 <image width="70%" height="160%" href="{{ asset('/storage/'.$consultancy->profile_picture) }}" clip-path="url(#myCircle)" />
    </svg>
    <div class="card-body pt-2">

      <div class="d-flex text-center" style="justify-content: space-around;">

<div class="icons">
<a class=" px-2 border" href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<em>{{$consultancy->location}}</em>">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-compass" viewBox="0 0 16 16">
<path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
<path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z"/>
</a>
</svg>

<a class=" px-2 border" href="https://{{$consultancy->website}}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<em>{{$consultancy->website}}</em>">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
<path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
<path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
</a>
</svg>

<a class=" px-2 border" href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<em>Contacts</em>">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</a>
</svg>

<a class="px-2 border" href="{!! route('compare') !!}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<em>Start Compairing</em>">
<span class="badge" style="color:currentColor;">Compare</span>
</a>

</div>
    </div>

      <a class="consultancy-name" href="{!! route('consultancy.show',$consultancy) !!}">
        <h5 class="card-title text-center mt-4 fw-bold" style="color: #444444;">{{$consultancy->name}}</h5>
      </a>
      <p class="fw-lighter fs-6 text-center text-muted">{{$consultancy->location}}</p>
      <center>
        <a class="fs-5 border pb-2 px-5 rounded-3" href="{!! route('consultancy.apply', $consultancy) !!}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="<em>Apply for Enrollment</em>">
          <span class="badge mb-3 mt-1" style="color:currentColor;">Apply now</span>
        </a>
      </center>
      <div class="fw-lighter fs-6 text-center text-muted">
        <x-rating-stars rating="{{$consultancy->rating}}" /> <!--16-->
        <div class="mt-0">
          {{$consultancy->reviews->count()}}
          <a href="{{route('review.index',$consultancy)}}" style="color: #444444;">
            reviews
          </a>
        </div>
      </div>
      <!-- <a href="#" class="btn text-white fw-bold" style="width: 100%; background-color:#6C3FB3;">Apply For Consultany</a>
      <a href="#" class="btn btn-light mt-2" style="width: 100%;">Claim Your Consultancy</a> -->
    </div>
    @if ($consultancy->user_id != null)
      <div class="card-footer text-center" style="background-color:#6C3FB3;" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-html="true" title="This Consultancy has been claimed by the consultancy or its representative.">
        <small class="fw-bold text-light">Claimed</small>
      </div>
    @else
      <div class="card-footer text-center" style="background-color:white;" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-html="true" title="This Consultancy hasn't been claimed by the consultancy or its representative.">
        <small class="fw-bold" style="color:#6C3FB3;">Not Claimed</small>
      </div>
    @endif
  </div>

  <!-- <nav  class="navbar navbar-light bg-light px-3 position-fixed">
      <a class="navbar-brand" href="#">Navbar</a> -->

      @if (request()->route()->getName() == "consultancy.show")
        <x-consultancy-scrollspy/>
      @endif


</div>
