<?php include "header.php";?>

<!--carousel start Here-->

<div id="my-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#my-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#my-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#my-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active c-item">
            <img src="assects/images/c1.jpg" class="d-block w-100 c-img" alt="..." >
            <div class="carousel-caption top-0 mt-3">
              <p class="mt-3 fs-2 text-uppercase" >Discover Taste Of Coffee</p>
              <h6 class="display-3 fw-bolder text-captalize">Cafe muse</h6>
                  <a href="#menu-list" class="btn btn-primary px-2 py-1 fs-2 mt-3">Shop Now</a>
              
            </div>
          </div>
          <div class="carousel-item c-item">
            <img src="assects/images/c2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption top-0 mt-3">
              <p class="mt-3 fs-2 text-uppercase">Start Your Day With Fresh Coffee</p>
              <h6 class="display-3 fw-bolder text-captalize">Muse Coffee</h6>
              <a href="#menu-list" class="btn btn-primary px-2 py-1 fs-2 mt-3">Shop Now</a>
            </div>
          </div>
          <div class="carousel-item c-item">
            <img src="assects/images/c3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption top-0 mt-3">
                <p class="mt-3 fs-2 text-uppercase">Explore the Nature With Codffee</p>
                <h6 class="display-3 fw-bolder text-captalize">Coffee Cafe</h6>
                <a href="#menu-list" class="btn btn-primary px-2 py-1 fs-2 mt-3">Shop Now</a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#my-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#my-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<!--carousel End here--> 

<?php include "footer.php";?>

