@props(['mode'=>"purple", 'color' => "#E2E4F2"])

@if ($mode == "white")
  @php
  $color = "#FFFFFF";
  @endphp
@endif

<footer>
  <div class="sub-info">
    <h5>Breeze</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>

  <div class="banner-bottom">
    © 2021 ACSS | Breeze
  </div>
</footer>

<style media="screen">

footer{
  background: {{$color}};
  border: 1px solid rgba(68, 68, 68, 0.2);
}

footer h5{
  margin: 0px;
  font-weight: 600;
  font-size: 24px;
  line-height: 32px;
  letter-spacing: -0.015em;
}

.sub-info{
  @if (request()->route()->getName() == "landing")
    margin: 100px 0px 50px 80px;
  @else
    margin: 100px 0px 50px 9.5%;
  @endif
  width: 40%;
  font-weight: 300;
  font-size: 16px;
  line-height: 30px;
  letter-spacing: -0.015em;
}

.banner-bottom{
  padding: 8px;
  text-align: center;
  color: white;
  background: #6C3FB3;
}
</style>
