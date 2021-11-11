<x-app-layout>

    <div class="container mt-5 py-5">
      <div class="row row-container">
        <div class="col spacing-col">
        </div>

        <x-consultancy-profile-card :consultancy="$consultancy" />

        <div class="col-md-7 content-col" data-spy="scroll" data-target="#EpicNavbars" data-offset="10">
          <div class="card px-2 py-4">
            <!-- <div class="card-header text-white fw" style="opacity: 60%; background: red;">
              Featured
            </div> -->
            <div class="card-body">
              <h5 id="About" class="card-title fs-5 fw-bold">About Us</h5>
              <p class="card-text py-3">
                {!! nl2br($consultancy->description) !!}
              </p>
            </div>
          </div>

          <x-claim-consultancy-adv/>

          <div class="card mt-3 px-2 py-4">
            <!-- <div class="card-header">
              Featured
            </div> -->
            <div class="card-body pb-0">
                <h5 id="Courses"class="card-title fs-5 fw-bold">Courses</h5>

              <div class="accordion accordion-flush" id="accordionFlushExample">

                @foreach ($consultancy->courses->take(4) as $course)
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="ps-0 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$loop->iteration}}" aria-expanded="false" aria-controls="flush-collapseOne{{$loop->iteration}}">
                        {{$course->name}}
                      </button>
                    </h2>
                    <div id="flush-collapseOne{{$loop->iteration}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">{{$course->pivot->description}}</div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
            <div class="card-body mt-0 pt-0 border-0">
              <div class="collapse" id="collapseExample">
                <div class="accordion accordion-flush  border-top" id="accordionFlushExample">
                  @foreach ($consultancy->courses->skip(4) as $course)
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="ps-0 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$loop->iteration}}" aria-expanded="false" aria-controls="flush-collapseOne{{$loop->iteration}}">
                          {{$course->name}}
                        </button>
                      </h2>
                      <div id="flush-collapseOne{{$loop->iteration}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">{{$course->pivot->description}}</div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
              <p class="pt-3 pb-0 mb-0">
                <a class="card-link coursesExpand" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  View All Courses >
                </a>
              </p>
              <a href="#" class="card-link text-decoration-none"></a>
            </div>
          </div>

          <div class="card px-2 mt-3 py-4">
            <!-- <div class="card-header text-white fw" style="opacity: 60%; background: red;">
              Featured
            </div> -->
            <div class="card-body pb-4">
              <h5 id="Costs-Statistics" class="card-title fs-5 fw-bold">Costs & Statistics</h5>

              @foreach ($consultancy->courses as $course)
                <x-course-stats :course="$course" />
              @endforeach

            </div>
          </div>

          <x-compare-consultancy-adv attribute="value" />

          <div class="card px-2 mt-3 py-4">
            <div class="card-body">
              <h5 id="Countries" class="card-title mb-2 fs-5 fw-bold">Countries</h5>
              <x-country-icon attribute="value" />
            </div>
          </div>

          <div class="card px-2 mt-3">
            <!-- <div class="card-header text-white fw" style="opacity: 60%; background: red;">
              Featured
            </div> -->
            <div class="card-body py-4">
              <h5 id="Reviews" class="card-title fs-5 fw-bold">Reviews</h5>
              <x-rating-stars rating="{{$consultancy->rating}}" /> <!--16-->
              <p class="fw-lighter fs-6 text-start text-muted">{{$consultancy->reviews->count()}} reviews</p>
              <x-review-scorecard :scorecard="$consultancy->scorecard()" />

              <div class="card py-4 mt-4 border-0 border-bottom border-top rounded-0">
                <!-- <div class="card-header text-white fw" style="opacity: 60%; background: red;">
                  Featured
                </div> -->
                <div class="card-body pl-3 rate">
                  <a style="text-decoration:none;" href="{{route('review.create', $consultancy)}}">
                    <h5 class="card-title fs-5 fw-bold mb-2" style="color:#444444;">How Would You Rate Your Experience with
                    <span class="fw-bold" >{{$consultancy->name}}?</span>
                    </h5>
                    <div class="" style="cursor:pointer;">
                    <x-rating-stars size="25" rating="3" /> <!--25-->
                    </div>
                  </a>
                </div>
              </div>

              @foreach ($consultancy->reviews->take(5) as $review)
                @if ($loop->last)
                  <x-review-card :review="$review" bottom="hide"/>
                  @break
                @endif
                <x-review-card :review="$review"/>
              @endforeach


            </div>
            <div class="card-footer bg-white text-primary text-center">
              <a href="{!! route('review.index',$consultancy) !!}">
                Read More
              </a>
            </div>
          </div>
      </div>

      <div class="col spacing-col">
      </div>

    </div>
    </div>

    <style media="screen">
      .content-col{
        /* width: 72%;
        padding-right: 0px !important; */
        height: auto;
      }
      .consultancy-profile-card{
        min-width: 380px;
      }
      @media screen and (max-width: 1200px) {
        .container{
          max-width:96vw;
          border-radius: 8px;
        }
        .spacing-col{
          display: none;
        }
        .content-col{
          /* width: calc(100% - 400px);
          padding-right: 0px !important; */
          width: 665px;
        }
        .row-container{
          justify-content: center;
        }
      }
      @media screen and (max-width: 1024px) {
        .content-col{
          /* width: calc(100vw - 10%);
          min-width: 770px; */
          width: 770px;
          padding-right: 0.5rem !important;
          margin:auto;
        }
      }
      @media screen and (max-width: 1090px) {
        .content-col{
          width: calc(100% - 380px);
        }
      }
      @media screen and (max-width: 1000px) {
        .container{
          margin-top: 2rem !important;
          padding-top: 0 !important;
        }
        .costs-card{
          padding-top: 1.5rem !important;
        }
        #EpicNavbar{
          display: none;
        }
        .content-col{
          width: 770px;
          padding: 0rem !important;
        }
        .consultancy-profile-card{
          padding: 0rem !important;
          width: 770px;
        }
      }
      @media screen and (max-width: 575px) {
        .course-container-row{
          justify-content: center !important;
        }
        .course-stat{
          width: 40% !important;
        }
      }
      @media screen and (max-width: 500px) {
        .costs-card{
          text-align: center;
        }
        .container{
          padding: 0px !important;
          overflow-x: hidden;
          margin: 0px auto !important;
          max-width: 99vw;
        }
        .consultancy-profile-card{
          min-width: 100%;
        }
      }
    </style>

<script type="text/javascript">
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
var myToastEl = document.getElementById('myToastEl')
var myToast = bootstrap.Toast.getOrCreateInstance(myToastEl)

var myToastAs = document.getElementById('myToastAs')
var myToastas = bootstrap.Toast.getOrCreateInstance(myToastAs)

myToastas.show();
myToast.show();

function enlargeTea(element) {
  var tea = document.getElementById('teaPic');

  if (tea.classList.contains('hover')) {
    return 0;
  }

  var timer = setTimeout("teaHover()",400); //wait 2 seconds
  element.onmouseleave = function() {
    clearTimeout(timer);
    regularTea();
  } //remove timer
}
function teaHover(){
  var tea = document.getElementById('teaPic');
  tea.classList.add('hover');
}
function regularTea() {
  var tea = document.getElementById('teaPic');
  tea.classList.remove('hover');
}

function enlargeMail(element) {
  var mail = document.getElementById('mailPic');

  if (mail.classList.contains('hover')) {
    return 0;
  }

  var timer = setTimeout("mailHover()",400); //wait 2 seconds
  element.onmouseleave = function() {
    clearTimeout(timer);
    regularMail();
  } //remove timer
}

function mailHover() {
  var mail = document.getElementById('mailPic');
  mail.classList.add('hover');
}

function regularMail() {
  var mail = document.getElementById('mailPic');
  mail.classList.remove('hover');
}

window.addEventListener("resize", ResizeWindow );

function ResizeWindow(){
  var dataSpyList = [].slice.call( document.querySelectorAll(
  '[data-bs-spy="scroll"]'
  ));

  dataSpyList.forEach( function ( dataSpyElement ) {
    bootstrap.ScrollSpy.getInstance( dataSpyElement ).refresh()
  } );
}
</script>

</x-app-layout>
