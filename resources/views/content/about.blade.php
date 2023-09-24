@extends('../index');
@section('content');
<!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img_container">
            <div class="img-box">
              <img src="{{asset('fe/images/about-img.jpg')}}" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="detail-box">
            <div class="heading_container ">
              <h2>
                Who Am I?
              </h2>
            </div>
            <p align="justify">
              Zhafia Rabbani Amalia (Fia), 7th semester at Sekolah Tinggi Teknologi Terpadu Nurul Fikri (STT NF) student who is taking the Informatics Engineering 
              study program with a specialization in web developer. Currently, Fia is carrying out independent study activities at PT Gits Indonesia 
              in the field of Web Developer expertise. With the main goal of becoming a fullstack web developer and helping the family's economy, 
              Fia's ready to make her dream come true.
            <div class="btn-box">
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
  @endsection
