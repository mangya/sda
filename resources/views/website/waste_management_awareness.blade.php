@extends('layouts.website_layout')
@section('title','Waste Management')
@section('page_content')
  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('show.website') }}"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Waste Management</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### About Us Area Start ##### -->
  <section class="about-us-area">
    <div class="container">
      <div class="row align-items-center">

        <!-- About Us Thumbnail -->
        <div class="col-12 col-lg-6">
          <div class="about-us-thumbnail">
            <img src="{{asset('img/bg-img/area_of_work.jpg')}}" alt="">
          </div>
        </div>

        <!-- About Us Content -->
        <div class="col-12 col-lg-6">
          <div class="about-us-content content">
            <!-- Section Heading -->
            <div class="section-heading mb-15">
              <p>Campaigns</p>
              <h2><span>Waste</span> Management</h2>
              <img src="img/core-img/decor.png" alt="">
            </div>
            <p>Waste management is the activities and actions required to manage waste from its inception to its final disposal. This includes the collection, transport, treatment and disposal of waste, together with monitoring and regulation of the waste management process. Generally, waste is categorized within 5 categories: Liquid waste; Solid waste; Organic waste; Recyclable waste and Hazardous waste. We, have focused on the nearest and the possible waste that needs attention and can be looked into it.  Landfills are an increasingly pressing problem. Less and less land is available to deposit refuse, but the volume of waste is growing. As a result, segregating waste is not just of environmental importance, but also of economic concern.</p>
          </div>
        </div>
        <div class="col-12 col-lg-12">
          <div class="about-us-content content">
            <h4><strong>Objectives are as follows:</strong></h4>
            <ul>
              <li>Seeking to minimise environmental impact by proper segregation of waste (dry ad wet) ultimately minimising the load on dumping yards</li>
              <li>Promote 3Rs – Reduce, Reuse and Recycle.</li>
              <li>Building on existing resources and services</li>
              <li>To create, implement and demonstrate the impact and increased sustainability of waste collection methodologies</li>
              <li>Promoting public awareness through consultation and participation</li>
            </ul>
            <br/>
            <h4><strong>Waste Management is broadly divided in two categories</strong></h4>
            <p><strong>Wet waste management</strong></p>
            <p>Wet waste typically refers to organic waste usually generated by eating establishments and is heavy in weight due to dampness. This type of waste can be easily broken down and eliminated at its formation itself. Different measures for managing the wet waste are through Decomposting; Biogas; Vermicomposting and Briquetting.</p>

            <p class="ml-30"><strong>Wet waste management and Household level</strong></p>
            <p class="ml-30">The team guides and helps the individuals to segregate the wet and dry waste at the inception level and promotes to decompose the wet waste collected at the house level. This can be done through available decomposing units for household and also provide guidance for DIY composting at home. The residual of the decomposed can be used as fertilizers and the moisture drained down as a liquid can be used as pesticide for the plants. We also offer simple ways to manage the household wet waste for a single flat up to apartment level. A simple and a ready prototype is available in the market - “Magic Bucket” (courtesy of Paryavaran Dakshata Mancha), which a perfect example for wet waste management at home.</p>
            <p class="ml-30"><strong>Wet waste at society level</strong></p>
            <p class="ml-30">Alike the wet waste process at household we provide information about the processes available for eliminating waste at society level. This is also covered at the seminars taken by the team. Along with providing information, the team also assists in implementation of large composting units for the societies.An initial step and easy process is introducing two separate disposal drums on your complex ground for the people to aid them in proper segregation of waste.We have been trying to connect with like-minded organisations which are solely dedicated to waste management in apartment complex.</p>
            <p class="ml-30">Different types of composting at society level are: Pit Composting; Concrete compost pits; vermi-compost etc.</p>

            <p><strong>Dry waste Management</strong></p>
            <p>To influence residents through “Swachha Dombivli Abhiyan” we have conducted seminars that provide easy solutions for segregation of different types of household waste and its proper management. Through the seminars, the audiences were made realized about the seriousness of the current predicament in our city and the following repercussions that might occur if not dealt with. We have defined the dry and wet waste in simple words so that people could easily understand and able to recognize the differences between them.</p>
            <p>Till date we have visited 35 residential societies, social community groups, schools and colleges across the city and gave seminar to approximately 3500 people.</p>
            <p>A key step towards dry waste manage id forming a chain of Scrap collector/ recyclers (Bhangarwala). While identifying the solutions for the increasing waste management problem, the team realized that the important and nearest person who can help in this mission is the nearest bhangarwala. This community has been an integral part of our society providing door step services and collecting all our household waste.  The team has connected all the bhangarwala and unified them in this mission by helping them to understand the different avenues available for recycling refurbishing and also tying them up with specific companies, providing a win-win solution for the bhangarwala and the society.  For eg: helping the bhangarwala understand the importance of plastic recycling; tying them with the plastic recyclers nearby, which will promote them to collect plastic from the public ultimately promoting proper management of plastics through household.</p>
            <p>List of items accepted by Bhangarwala:
              <ul>
                <li>Old cloths</li>
                <li>Plastic</li>
                <li>Paper and Cardboard</li>
                <li>Glass</li>
                <li>Metals</li>
                <li>E-waste</li>
              </ul>
              <br/>
            <p>Note: These people are providing not only provide door to door service but also aid in proper management of waste, ultimately preventing waste going to dumping yards. Therefore, please do not expect anything in return from them.</p>
          </div>
        </div>
        <div class="row mb-30">
          <div class="col-12 col-lg-6">
            <p>The above is a practical application of wet waste management at household. The wet waste originating from the house is decomposed in a homemade composting bucket.</p>
            <img src="{{asset('img/bg-img/home_composting.jpg')}}" class="img-responsive mb-15" style="margin: auto;" alt="">
          </div>
          <div class="col-12 col-lg-6"><p>A perfect example of how one can segregate house hold plastic waste. These images show segregation of different types of plastic waste like milk bags, wrappers of eatable items, water bottles etc. This waste is then given to the nearest Bhangarwala.</p>
          <img src="{{asset('img/bg-img/plastic_seperation.jpg')}}" class="img-responsive mb-15" style="margin: auto;" alt=""></div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### About Us Area End ##### -->

  <!-- ##### FAQ Area Start ##### -->
  <section class="famie-faq-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center">
            <p>HAVE A QUESTION?</p>
            <h2><span>Get answers</span> to FAQs about waste management</h2>
            <img src="img/core-img/decor2.png" alt="">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">What do you mean by waste segregation ?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a></h6>
              <div id="collapseOne" class="accordion-content collapse show">
                <p class="ml-30">Waste segregation basically means keeping wet, dry and sanitary/reject waste separately, so that dry can be recycled, wet waste can be composted and sanitary waste can be incinerated.</p>
              </div>
            </div>

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6>
                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Why should I do it ?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseTwo" class="accordion-content collapse">
                <p class="ml-30">So that it reduces waste that reaches landfills and reduces pollution to air and water.</p>
                <p class="ml-30">So that different processes- composting, recycling, incineration can be applied to different kinds of waste.</p>
              </div>
            </div>

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6>
                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">What are the different types of waste ?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseThree" class="accordion-content content collapse">
                <ul>
                  <li><strong>Wet waste</strong>: Wet waste consists of kitchen waste - including vegetable and fruit peels and pieces, tea leaves, coffee grounds, eggshells, bones and entrails, fish scales, as well as cooked food (both veg and non-veg).</li>
                  <li><strong>Dry Waste</strong>: Paper, plastics, metal, glass, rubber, thermocol, styrofoam, fabric, leather, rexine, wood – anything that can be kept for an extended period without decomposing is classified as dry waste.</li>
                  <li><strong>Hazardous waste</strong>: Household hazardous waste (HHW) include three sub-categories – E-waste; toxic substances such as paints, cleaning agents, solvents, insecticides and their containers, other chemicals; and biomedical waste.</li>
                  <li><strong>E-waste</strong>: E-waste or electronic waste consists of batteries, computer parts, wires, electrical equipment of any kind, electrical and electronic toys, remotes, watches, cell phones, bulbs, tube lights and CFLs. Store them in separate container which is kept closed, away from moisture and in which nothing else is put.</li>
                  <li><strong>Biomedical waste</strong>: This includes used menstrual cloth, sanitary napkins, disposable diapers, bandages and any material that is contaminated with blood or other body fluids.</li>
                </ul>
              </div>
            </div>

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6>
                <a role="button" aria-expanded="true" aria-controls="collapseFour" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFour">How do I practice waste management at home ?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseFour" class="accordion-content content collapse">
                <ul>
                  <li>Keep separate containers for dry and wet waste in the kitchen.</li>
                  <li>Keep 4 bags dry waste collection- paper, plastic, glass, metal for the rest of the household waste.</li>
                  <li>Compost your wet waste at home.</li>
                  <li>Home composting can easily be done in any aerated container. #MagicBucket</li>
                  <li>Compost your wet waste at the community level</li>
                  <li>If you live in a large apartment building, a community composting system like tank composting could be set up for all the wet waste from the residents. If not, the wet waste can be given out every day to your Municipality collection system.</li>
                  <li>Keep a paper bag for throwing the sanitary waste.</li>
                </ul>
              </div>
            </div>

            <!-- Single Accordian Area -->
            <div class="panel single-accordion">
              <h6>
                <a role="button" aria-expanded="true" aria-controls="collapseFive" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFive">Can I compost at home ?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseFive" class="accordion-content collapse">
                <p class="ml-30">Of course. Home composting can be easily done in Daily Dump’s pot system, or #MagicBucket (courtesy Paryavaran Dakhshta Mandal).</p>
              </div>
            </div>

            <div class="panel single-accordion">
              <h6>
                <a role="button" aria-expanded="true" aria-controls="collapseSix" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseSix">I don’t have time to compost at home, what are my alternatives?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseSix" class="accordion-content collapse">
                <p class="ml-30">If you live in a large apartment building, a community composting system like tank composting  could be set up for all the wet waste from the residents.</p>
                <p class="ml-30">If not, the wet waste can be given out every day to the "Ghantagadi" of KDMC.</p>
              </div>
            </div>
            <!-- 7 -->
            <div class="panel single-accordion">
              <h6>
                <a role="button" aria-expanded="true" aria-controls="collapseSeven" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseSeven">How do I dispose sanitary pads, diapers, condoms/soiled cotton?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseSeven" class="accordion-content collapse">
                <p class="ml-30">They should be wrapped in a newspaper, marked with a red cross, and given everyday to  the "Ghantagadi" of KDMC.</p>
              </div>
            </div>
            <!-- 8 -->
            <div class="panel single-accordion">
              <h6>
                <a role="button" aria-expanded="true" aria-controls="collapseEight" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseEight">Will Dry waste smell if I store it for a week?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseEight" class="accordion-content collapse">
                <p class="ml-30">Not if it is clean and dry. Make sure that plastic sachets of milk, curds, oil, any food item, are cleaned of all their contents and dried before being put in the dry waste bag. Then they will never stink.</p>
              </div>
            </div>
            <!-- 9 -->
            <div class="panel single-accordion">
              <h6>
                <a role="button" aria-expanded="true" aria-controls="collapseNine" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseNine">What do I do with old clothes/ shoes/ handbags/belts/toys ?
                  <span class="accor-open"><i class="arrow_carrot-up" aria-hidden="true"></i></span>
                  <span class="accor-close"><i class="arrow_carrot-down" aria-hidden="true"></i></span>
                </a>
              </h6>
              <div id="collapseNine" class="accordion-content collapse">
                <p class="ml-30">If they are still in usable condition, they should be given to some organization that collects them. If they are totally unusable, or very damaged, they are still categorized as dry waste.</p>
                <p class="ml-30">Even your nearest "Bhangarwala / kabadiwala" will take all this dry waste (includes all above categories of dry waste).</p>
                <p class="ml-30">One can participate in "Urja Foundation" drive wherein they collect such waste from people. Visit their centres at notified time and give all clean dry waste.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### FAQ Area End ##### -->
@endsection