<section class="resume-section p-4 p-lg-5 text-center" id="contact">
  <div class="my-auto">

    <!-- Heading -->
    <h2 class="mb-4">Stay Connected!!</h2>
<!-- Contact Info -->
    <ul class="fa-ul mb-4 ml-0 text-left mx-auto" style="max-width: 600px;">
      <!-- <li>
        <i class="fas fa-envelope-open mr-2 contact-icons"></i>
        <a href="mailto:info@expeditionasia.com.pk">info@expeditionasia.com.pk</a>
      </li> -->
      <li>
        <i class="fas fa-envelope-open mr-2 contact-icons"></i>
        <a href="mailto:expeditionasiaa@gmail.com">expeditionasiaa@gmail.com</a>
      </li>
      <li>
        <i class="fas fa-mobile-alt mr-2 contact-icons"></i>
        <a style="color:#282e6a;" href="tel:+923004708813">+92 (300) 4708813</a>
      </li>
      <li>
        <i class="fas fa-mobile-alt mr-2 contact-icons"></i>
        <a style="color:#282e6a;" href="tel:+925815456667">+92 (58154) 56667</a>
      </li>
    </ul>
    <!-- Address Section -->
    <div class="container mb-4">
      <div class="row text-left align-items-start">

        <!-- Skardu -->
        <div class="col-12 col-md-3 font-weight-bold">
          Skardu (Main Office): 
        </div>
        <div class="col-12 col-md-9 text-muted">
          Near Boys Degree College Skardu, Gilgit Baltistan 
        </div>

        <!-- Islamabad -->
        <div class="col-12 col-md-3 font-weight-bold mt-3 mt-md-2">
          Islamabad (Sub Office): 
        </div>
        <div class="col-12 col-md-9 text-muted mt-md-2">
          27-E, 3rd Floor, Office # 5, Ali Plaza, Fazl-e-Haq Road, Blue Area, Islamabad, Pakistan
        </div>

      </div>
    </div>

    <!-- Message Text -->
    <p>
      ...or leave your message below and I will be back to you as soon as possible.
    </p>

    <!-- Contact Form -->
    <form
      class="contact-form d-flex flex-column align-items-center"
      action="{{ url('/send') }}"
      method="POST"
    >
      @csrf()
      {{ csrf_field() }}

      <div class="form-group w-75">
        <input
          type="text"
          class="form-control"
          placeholder="Name"
          name="name"
          required
        />
      </div>

      <div class="form-group w-75">
        <input
          type="email"
          class="form-control"
          placeholder="Email"
          name="email"
          required
        />
      </div>

      <div class="form-group w-75">
        <input
          type="tel"
          class="form-control"
          placeholder="Phone +12 00 000 0000"
          name="phone"
          required
        />
      </div>

      <div class="form-group w-75">
        <textarea
          class="form-control"
          placeholder="Message"
          rows="7"
          name="message"
          required
        ></textarea>
      </div>

      <button type="submit" class="btn btn-submit btn-info w-75">
        Submit
      </button>
    </form>

  </div>
</section>
