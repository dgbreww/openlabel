@include('vwHeader')

<style>
    .pricing-table{
        padding: 4% 0;
        text-align: center;
    }
    .pricing-table h2.head{
        margin-bottom: 24px;
        position: relative;
    }
    .pricing-table h2.head:after{
        content: '';
        position: absolute;
        bottom: -10px;
        width: 38%;
        height: 1px;
        background: linear-gradient(0deg, #004071 10%, #0083b6 90%);
        left: 50%;
        transform: translate(-50%, 0%);
    }
    .subscription-container {
        display: flex;
        align-items: center;
        flex-flow: row wrap;
        justify-content: flex-start;
        width: 100%;
        max-width: 990px;
        margin: auto;
        padding: 5% 0;
        column-gap: 8.3%;
        row-gap: 24px;
    }
    
    .price_tabs{
        margin-top: 3%;
    }
    
    .price_tabs a{
        font-size: var(--sub-heading-3-28);
        margin: 0 6px;
        color: #212529;
    }
    
    .price_tabs a.active{
        color: var(--blue-sapphire);
        border-bottom: 2px solid var(--blue-sapphire);
    }
    
    .subscription__title,
    .subscription__main-feature,
    .subscription__price {
      text-transform: uppercase;
      margin-top: 0;
      margin-bottom: 0;
      color: #85A9C1;
    }
    
    .subscription__title {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 10px;
      margin-top: 20px;
      font-size: var(--sub-heading-3-28);
      color: var(--blue-sapphire);
      width: 100%;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    
    .subscription__icon {
      margin-top: 10px;
      font-size: var(--heading-3-40);
      background: #F2F5FF;
      padding: 30px;
      border-radius: 50%;
    }
    
    /*.subscription__price {*/
    /*  display: block;*/
    /*  width: 90%;*/
    /*  text-align: center;*/
    /*  text-transform: lowercase;*/
    /*  font-size: 32px;*/
    /*  color: #262223;*/
    /*  padding-bottom: 10px;*/
    /*  border-bottom: 2px solid #EFF1F3;*/
    /*}*/
    
    /*.subscription__price-month {*/
    /*  font-size: 18px;*/
    /*  color: #C8CDD1;*/
    /*}*/
    
    .subscription__list {
      padding: 0 15px;
      margin: 10px 0;
      list-style-type: none;
    }
    
    .subscription__item {
      display: flex;
      margin: 20px 0;
      font-size: var(--body-3-18);
      color: #666662;
    }
    
    .subscription__item-text {
      color: #AEAEAC;
      font-size: var(--micro-1-16);
    }
    
    .icon-subscription {
      color: #C8CDD1;
      margin-right: 5px;
    }
    
    .subscription__button {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 275px;
      margin: 5px 0;
      padding: 0;
      border-radius: 10px;
      background: #FFF;
      box-shadow: 0 4px 13px 0 rgba(0, 0, 0, 0.45);
      transition: transform 0.5s;
      cursor: pointer;
    }
    .subscription__button button{
      display: block;
      font-family: var(--roboto-medium);
      font-size: var(--body-3-18);
      text-align: center;
      padding: 4px;
      color: var(--blue-sapphire);
      width: 80%;
      border-radius: 5px;
      margin-bottom: 25px;
      border: solid 2px var(--blue-sapphire);
      transition: 0.5s;
    }
    .subscription__button button.active{
      background: var(--blue-sapphire);
      color: white;
    }
    .subscription__button button:hover{
      background: var(--blue-sapphire);
      color: white;
    }
    .subscription__button:hover{
      background: white;
      transform: scale(1.09);
      transition: transform 0.5s;
      box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.65);
    }
    .form-group label{
        margin-bottom: 2%;
        margin-top: 4%;
        display: block;
        text-align: left;
    }
    .modal-content #closePopup{
        background: transparent;
    }
    @media(max-width: 1200px){
        .subscription__button{
            width: 28%;
        }
    }
    @media(max-width: 768px){
        .subscription__item{
            margin: 12px 0;
        }
        .price_tabs{
            margin-top: 5%;
        }
    }
    @media(max-width: 600px){
        .subscription__button{
            width: 40%;
        }
        .subscription-container{
            row-gap: 32px;
            justify-content: center;
        }
    }
    @media(max-width: 480px){
        .subscription__button{
            width: 55%;   
        }
    }
    @media(max-width: 390px){
        .subscription__button{
            width: 70%;
        }
    }
</style>

<div class="banner">
	<img src="{{ url('public/frontend') }}/img/home-banner.png" alt="" class="bg">
	<div class="main">
		<div class="content">
			<h1>How<br> <a href="{{ url('/about-us') }}"><span>TikTok</span></a> helped these artists promote their music and how you can too.</h1>
			<!-- <div class="search">
				<i class="fa-solid fa-magnifying-glass"></i>
				<input type="text" placeholder="What are you looking for?">
				<button>Search</button>
			</div> -->
            <div class="search new-search">
                <a href="{{ url('/contact-us') }}"><button type="button">Explore More</button></a>
            </div>
		</div>
	</div>
</div>
@if(!empty($categoryList))
<div class="pricing-table">
    <div class="_container">
        <h2 class="head">Plans & Packages</h2>
        <p>Choose the right package for your business and get connected with the Content Creators reowned</p>
        <div class="price_tabs">
        	@foreach($categoryList as $category)
            <a href="#{{ $category->category_slug }}">{{ $category->category_name }}</a>
            @endforeach
        </div>

        @foreach($categoryList as $category)
	        @php

	        	$packagesList = getPackageListByCategory($category->id);

	        @endphp
        <div class="subscription-container" id="{{ $category->category_slug }}">
          	
          	@if(!empty($packagesList))
          		@foreach($packagesList as $package)
			        <div class="subscription__button">
			            <h3 class="subscription__title subscription__title--personal">
			            	{{ $package->package_name }}<span class="subscription__icon">${{ $package->price*1 }}</span> 
			            </h3>
			              <!--<span class="subscription__price">$5 <span class="subscription__price-month">/ mo</span> </span>-->
			            <ul class="subscription__list">
			                <li class="subscription__item">
			                <!--<i class="icon-subscription fas fa-check-circle"></i>-->
			                	<span>
			                    	{{ $package->no_of_videos }} Reels/Videos (Accepted)
			                    	<!--<span class="subscription__item-text">20 reels/videos</span>           -->
			                  	</span>
			                </li>

                            <li class="subscription__item">
                               <span>{{ $package->no_of_videos_received }} Reels/Videos (Reveived)</span>
                            </li>

			                <li class="subscription__item">
			                	<!-- <i class="icon-subscription fas fa-check-circle"></i> --><span>Timeline {{ $package->timeline }} {{ ($package->timeline > 1)? 'Days':'Day'; }}</span>
			                </li>


			                <!--<li class="subscription__item">-->
			                <!--  <i class="icon-subscription fas fa-check-circle"></i>-->
			                <!--  <span>-->
			                <!--  More text: <span class="subscription__item-text">Explicabo nemo corporis nesciunt aspernatur</span>            -->
			                <!--  </span>-->
			        
			                <!--</li> -->
			                <!--<li class="subscription__item">-->
			                <!--  <i class="icon-subscription fas fa-check-circle"></i>-->
			                <!--  Free Event passes-->
			                <!--</li>-->
			            </ul>
			            <button type="button" class="checkout" data-id="{{ $package->id }}" data-token="{{ csrf_token() }}">Buy Now</button>
			        </div>
	        	@endforeach
	        @endif
          
        </div>

        @endforeach

        <!-- <a class="btn">Create Custom Package</a> -->
        <div class="search new-search" style="display: block;">
            <a id="showPopup" href="javascript:void(0);"><button type="button">Create Custom Package</button></a>
        </div>

        <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Create Custom Package</h5>
                <button id="closePopup" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form id="customMessageForm" action="{{ url('/ajax/doCustomPackageMsg') }}" method="post">
                <div class="modal-body">

                  <div class="form-group">
                    <label for="category">Category <span class="error">*</span></label>
                    <select name="category" class="form-control">
                        <option value="">Select Category</option>
                        @if(!empty($allCategoryList))
                        @foreach($allCategoryList as $catList)
                        <option value="{{ $catList->id }}">{{ $catList->category_name }}</option>
                        @endforeach
                        @endif
                    </select>
                    <span id="categoryErr" class="error removeErr"></span>
                  </div>

                  <div class="form-group">
                    <label for="videos">No of Videos (Accepted)<span class="error">*</span></label>
                    <input type="number" name="videos" class="form-control" placeholder="Videos">
                    <span id="videosErr" class="error removeErr"></span>
                  </div>

                  <div class="form-group">
                    <label for="videoReceived">No of Videos (Received)<span class="error">*</span></label>
                    <input type="number" name="videoReceived" class="form-control" placeholder="No of Videos (Received)">
                    <span id="videoReceivedErr" class="error removeErr"></span>
                  </div>

                  <div class="form-group">
                    <label for="timeline">Timeline (Days) <span class="error">*</span></label>
                    <input type="number" name="timeline" class="form-control" placeholder="Timeline">
                    <span id="timelineErr" class="error removeErr"></span>
                  </div>

                  <div class="form-group">
                    <label for="requirements">Requirements <span class="error">*</span></label>
                    <textarea class="form-control" name="requirement"></textarea>
                    <span id="requirementErr" class="error removeErr"></span>
                  </div>

                </div>
                <div class="modal-footer border-top-0 d-flex justify-content-center">
                    @csrf
                  <button id="customMessageFormBtn" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>

    </div>
</div>
@endif

<script>
	$('.price_tabs a:first-child').addClass('active');
    $('.subscription-container').hide();
    $('.subscription-container:first').show();
    $('.price_tabs a').click(function(){
      $('.price_tabs a').removeClass('active');
      $(this).addClass('active');
      $('.subscription-container').hide();
      
      var activeTab = $(this).attr('href');
      console.log(activeTab);
      $(activeTab).fadeIn();
      return false;
    });

    $("#showPopup").click(function (e) {
        $("#form").modal('show');
    });

    $("#closePopup").click(function (e) {
        $("#form").modal('hide');
        $("#customMessageForm")[0].reset();
    });
</script>

@include('vwFooter')
