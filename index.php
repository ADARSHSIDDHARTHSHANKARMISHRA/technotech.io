<?php include "header1.php" ?>
<div class="container text-center">
  <div class="alert alert-dark alert-dismissible fade show" role="alert">
    <strong>WELCOME ! To TechnoTech Software Company.</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" id="home">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner carousel-fade">
    <div class="carousel-item active ">
      <img src="image/1.jpg" class="d-block w-100 caroselsize"  alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Learn New Things EveryDay</h5>

      </div>
    </div>
    <div class="carousel-item">
      <img src="image/2.jpg" class="d-block w-100 caroselsize"  alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Know More About Programming</h5>

      </div>
    </div>
    <div class="carousel-item">
      <img src="image/3.jpg" class="d-block w-100 caroselsize"  alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>No.1 Company In India</h5>

      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- feature -->

<!-- requirement -->
<section class="container pt-5">
  <div class="section" style="margin-left:3rem;">
    <h1>Ten reasons why you need a website for your small business</h1>
    <ul>
      <li class="text-break pt-3">84% of today’s consumers think a website makes your business more credible than companies who only have social media profiles. Your website is also the perfect place to show off any professional certifications or awards your business has.
        Beyond that, having your own website lets you create a branded email address (e.g. diana@yoursite.com) which adds a level of professionalism to all of your correspondence, especially if you’ve used a personal email address to conduct business up until now.</li>
      <li class="text-break pt-3">One of the major advantages of having a website is that it is accessible to anyone, anywhere, anytime.
        Even during non-business hours, customers can access your website and avail your services or get the
        information they need, which is one of the key elements in the importance of a website in business. The website is
        always at work to ensure that customers who come in are always served in the comfort of their homes.</li>
      <li class="text-break pt-3"> Providing customer support is a tough job for any business. However, providing customer support online is easier and more cost-efficient than hiring personnel to provide support. This is where the importance of
        having a website becomes clear as customer support through a website can be provided in various ways like Chatbox anf FAQS</li>
      <li class="text-break pt-3">Over 50% of the customers expect any brand or
        business to have an online presence where they can access their services. One of the most captivating
        aspects of a website is how easy it makes information accessible to customers. At its core, a website is nothing
        but a medium to communicate with customers and to provide them with information and resources.</li>
    </ul>
  </div>
</section>
<section id="aboutus">
  <div class="container">
    <h1 class="text-center"> About Us</h1>
    <div class="row text-center mb-4">
      <div class="col-md-12 my-4"><img src="image/about.jpg" alt="" class="img-fluid"></div>

    </div>
    <div class="row">
      <div class="col-md-12">
        <h5 class="textcenter text-break">
          Welcome to TechnoTech, your number one source for all things [product, ie: Software]. We're dedicated to giving you the very best of [product], with a focus on [three characteristics, ie: dependability, customer service and uniqueness.]
          Founded in <span style="color:orange;">2000</span> by <span style="color:orange;">Adarsh SiddharthShankar Mishra</span> TechNoTech has come a long way from its beginnings in a Mumbai.</h5>

        <h5>
          We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
          Sincerely,
         [<span style="color:orange;">Adarsh SiddharthShankar Mishra</span>]  [<span style="color:orange;">Owner</span>]
        </h5>
      </div>
    </div>




  </div>
</section>
<!-- contactus -->
<section id="contactus">
  <div class="container">
    <h1 class="text-center ">Contact Us</h1>
    <div class="row g-3">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Email</label>
        <input type="email" class="form-control" id="email">
      </div>
      <div class="col-12">
      <label for="floatingTextarea2">Address</label>
        <div class="form-floating">
          <textarea class="form-control" placeholder="Enter Your Address" id="address" style="height: 100px"></textarea>
         
        </div>
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="city">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
        <input type="text" class="form-control" id="state">
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="number" class="form-control" id="pincode">
      </div>
<div class="col-md-12">
  <p id="errormessage">

  </p>
</div>
      <!-- <div class="col-12">
    <button type="submit" class="btn btn-primary btn-default">Submit</button>
  </div> -->
      <div class="container ">
        <div class="row">
          <div class="col  d-grid gap-2">
            <button class="btn btn-primary" id="value" type="submit" style="width: 50%;" onclick="save()">Submit</button>
          </div>
        </div>
      </div>
</div>
  </div>
</section>

<?php include "footer.php" ?>