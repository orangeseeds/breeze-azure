<div class="card border-0 py-0">
  <div class="card-body ps-3">
    <h5 class="card-title py-2 fs-4">{{$course->name}}</h5>
    <!-- <h6 class="card-subtitle text-muted">Cost</h6> -->
    <div class="container px-0 mt-2 border rounded-0 px-4 py-4 costs-card">
      <div class="row align-items-start mb-5 cost-row">
        <div class="col-sm pt-1 card-subtitle text-muted fs-6">
          Cost
        </div>
        <div class="col-sm">
          Rs. {{$course->pivot->price}}
        </div>
        <div class="col-sm-2">
        </div>
        <div class="col-sm pt-1 card-subtitle text-muted fs-6">
          Avg. Score
        </div>
        <div class="col-sm">
          {{$course->pivot->average_score}}
        </div>
      </div>
      <div class="row align-items-start">
        <div class="col-sm pt-1 card-subtitle text-muted fs-6">
          Duration
        </div>
        <div class="col-sm">
          {{$course->pivot->course_duration}} months
        </div>
        <div class="col-sm-2">
        </div>
        <div class="col-sm pt-1 card-subtitle text-muted fs-6">
          Avg. Class Size
        </div>
        <div class="col-sm">
          {{$course->pivot->class_size}}
        </div>
      </div>
    </div>
  </div>
</div>
