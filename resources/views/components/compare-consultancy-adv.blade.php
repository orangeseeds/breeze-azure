<div id="myToastEl" class="overflow-hidden bg-white toast position-relative card mt-3 shadow-none py-5"  onmouseover="enlargeTea(this)"style="width:100%;" data-bs-autohide="false" role="alert" aria-live="assertive" aria-atomic="true">
<div class="toast-header px-4 border-0 bg-transparent" style="z-index: 10;  width:50%;">
  <a href="{{route('compare')}}" class="me-auto fs-5 fw-bold compare-with-breeze" style="color:#35614A;">
    Compare with Breeze
  </a>
<button type="button" class="position-absolute btn-close btn-close-black ms-auto m-3" data-bs-dismiss="toast" aria-label="Close" style="top:0; right:0;"></button>
</div>
<img id="teaPic" class="position-absolute checkout-banner-image" src="{{url('/pic/tea.jpg')}}" alt="">
<div class="" style="z-index:10; width:60%;">
<p class=" fs-6 text-muted px-4">Add up to three consultancies to compare courses provided, class size, and even scores. Find the best consultancy that fits you like your preferred cup of tea.</p>
</div>
</div>
