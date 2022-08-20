@extends('layouts.main')
@section('container')


<section>

{{-- start container --}}

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="slide-1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="slide-2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="slide-3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/640x320?internet" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/640x320?computer" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/640x320?laptop" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container">
  {{-- accordion --}}
 <section class="mt-4 mb-4">
<h1>JAVAWEBHOST NETWORK</h1>
<h3>WebHosting dengan dukungan LiteSpeed WebServer untuk kecepatan maksimum</h3>
<h3>Uptime 24/7</h3>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem sequi velit iste quas. Quibusdam sit repellat est mollitia laborum perferendis nisi. Voluptate magnam necessitatibus cumque earum voluptatem nobis culpa fugiat eaque alias facere quae, aspernatur esse, totam velit excepturi recusandae ut sequi, doloribus fugit quasi eveniet dolores. Non ad quidem dolore nesciunt placeat, iure culpa nemo laboriosam et consequuntur asperiores, optio voluptas quae eaque natus voluptate adipisci nostrum accusantium iste minus blanditiis amet. Modi, quas nobis nisi porro, quaerat tempora ducimus dolorem sapiente laborum obcaecati voluptatem? Consequatur culpa adipisci inventore modi commodi saepe iure nobis, possimus accusantium sapiente blanditiis rem!</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quos alias blanditiis natus eaque distinctio vero tenetur voluptates tempora est dolorum ea deleniti, sed quia earum beatae dignissimos commodi reprehenderit debitis minus numquam delectus! Tempore repellendus adipisci totam ea ut culpa ducimus ipsa repudiandae, dolor magnam. Eaque esse consectetur et ducimus ut omnis maxime veniam perspiciatis autem placeat voluptate atque deserunt debitis exercitationem, adipisci officiis. Hic cupiditate cumque eaque dolorem maiores, ratione doloremque voluptatibus aperiam?</p>
<h3>Lorem ipsum dolor sit amet.</h3>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio iure doloremque a error sit, ad facere cumque vitae repellendus dolorem amet libero quibusdam provident? Laudantium ab facilis officiis fugiat culpa eius consequatur recusandae vitae totam quos sapiente, adipisci eveniet dolorum earum quo, dolorem quibusdam velit vel nisi illum! Iusto alias, adipisci beatae optio tenetur est. Voluptates, culpa ipsam. Vero libero at quis aliquid rem blanditiis veniam distinctio quod esse soluta, facere consequatur labore eaque aperiam voluptatibus unde atque repellendus, ratione natus nesciunt modi ab ut architecto? Assumenda repellat nihil iusto facere excepturi reiciendis, totam sequi ipsum hic reprehenderit nisi fugit officia, sapiente nesciunt quisquam numquam perferendis vitae culpa maiores. Mollitia aperiam maxime ratione non cum fugit quos expedita ex porro libero, laboriosam inventore quasi deleniti quo optio minus harum architecto, sapiente adipisci commodi incidunt. Laudantium, voluptas sint perferendis dolore illum neque reprehenderit quidem aliquid dolores exercitationem, vero labore voluptatum veritatis.</p>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam mollitia commodi quidem vel autem voluptatum consectetur atque esse, explicabo reiciendis.</p>




 </section>

  {{-- card --}}
  
  {{-- card --}}
<section class="mt-4 mb-4">
  <div class="card text-center">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    <div class="card-footer text-muted">
      2 days ago
    </div>
  </div>
</section>
  
<section class="mb-4">
  <div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-pills card-header-pills">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</section>
 
<section class="mb-4">
  <div class="card mb-3">
    <img src="https://source.unsplash.com/640x320?laptop" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</section>

<section class="mb-4">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    <img src="https://source.unsplash.com/640x320?gadget" class="card-img-bottom" alt="...">
  </div>
</section>
{{-- end card --}}
<section class="mb-4">
<h3>F.A.Q</h3>
<div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          Accordion Item #1
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          Accordion Item #2
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
          Accordion Item #3
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
      </div>
    </div>
  </div>
</section>


{{-- end container --}}
</div>
</section>
@endsection