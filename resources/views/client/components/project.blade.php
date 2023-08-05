{{-- projects area start  --}}
<section class="project-area pt-5">
    <div class="container pt-5">
        <h2 class=" pt-5 mb-5">Projects: </h2>
        <div class="row ">
            <div class="col-md-6">
                <div class="single_project bg-white pb-2 shadow-lg">
                    <div class="project_img">
                        <img class="img-fluid" src="{{asset("assets/img/home.png")}}" alt="">
                    </div>
                    <div class="project_content text-center">
                        <a href="#"><h3>Project Title</h3></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single_project bg-white pb-2 shadow-lg">
                    <div class="project_img">
                        <img class="img-fluid" src="{{asset("assets/img/home.png")}}" alt="">
                    </div>
                    <div class="project_content text-center">
                        <a href="#"><h3>Project Title</h3></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single_project bg-white pb-2 shadow-lg">
                    <div class="project_img">
                        <img class="img-fluid" src="{{asset("assets/img/home.png")}}" alt="">
                    </div>
                    <div class="project_content text-center">
                        <a href="#"><h3>Project Title</h3></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single_project bg-white pb-2 shadow-lg">
                    <div class="project_img">
                        <img class="img-fluid" src="{{asset("assets/img/home.png")}}" alt="">
                    </div>
                    <div class="project_content text-center">
                        <a href="#"><h3>Project Title</h3></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const cards = document.querySelectorAll('.single_project');

// Add event listeners to each card
cards.forEach(card => {
  
  card.addEventListener('mouseover', () => {
    const img = card.querySelector('.project_img img');
    img.style.transform = 'translateY(-80vh)'; // Adjust the distance to scroll
  });

  card.addEventListener('mouseout', () => {
    const img = card.querySelector('.project_img img');
    img.style.transform = 'translateY(0)';
  });
});
</script>
{{-- projects area end --}}