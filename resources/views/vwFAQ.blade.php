@include('vwHeader')
	
	<style type="text/css">

		.accordion {
			--bs-accordion-border-color: unset !important;
		}
	    .owl-dot {
	        display: none !important;
	    }
	    .about-section {
	        padding-bottom: 0px;
	    }
	    .play_video0{
	        position: relative;
	    }
	    .play_video0 .butn{
	        position: absolute;
	        width: 100%;
	        height: 100%;
	        z-index: 99;
	        cursor: pointer;
	    }
	    .play_video0 .butn img{
	        width: 100%;
	        height: 100%;
	        object-fit: cover;
	    }
	    .play_video0 iframe{
	        position: relative;
	    }

	    @import url('https://fonts.googleapis.com/css?family=Hind:300,400&display=swap');
	     * {
	         box-sizing: border-box;
	    }
	     *::before, *::after {
	         box-sizing: border-box;
	    }
	   
	    .about-section .container {
	         /*margin: 0 auto*/;
	         /*padding: 4rem 0;*/
	         width: 100%;
	    }
	     .accordion .accordion-item {
	         border-bottom: 1px solid #e5e5e5;
	    }
	     .accordion .accordion-item button[aria-expanded='true'] {
	         border-bottom: 1px solid #0A3161;
	    }
	     .accordion button {
	         position: relative;
	         display: block;
	         text-align: left;
	         width: 100%;
	         padding: 1em 0;
	         color: #222;
	         font-size: 1.15rem;
	         font-weight: 600;
	         border: none;
	         background: none;
	         outline: none;
	    }
	     .accordion button:hover, .accordion button:focus {
	         cursor: pointer;
	         color: #0A3161;
	    }
	     .accordion button:hover::after, .accordion button:focus::after {
	         cursor: pointer;
	         color: #0A3161;
	         border: 1px solid #0A3161;
	    }
	     .accordion button .accordion-title {
	         padding: 1em 1.5em 1em 0;
	    }
	     .accordion button .icon {
	         display: inline-block;
	         position: absolute;
	         top: 18px;
	         right: 0;
	         width: 22px;
	         height: 22px;
	         border: 1px solid;
	         border-radius: 22px;
	    }
	     .accordion button .icon::before {
	         display: block;
	         position: absolute;
	         content: '';
	         top: 9px;
	         left: 5px;
	         width: 10px;
	         height: 2px;
	         background: currentColor;
	    }
	     .accordion button .icon::after {
	         display: block;
	         position: absolute;
	         content: '';
	         top: 5px;
	         left: 9px;
	         width: 2px;
	         height: 10px;
	         background: currentColor;
	    }
	     .accordion button[aria-expanded='true'] {
	         color: #0A3161;
	    }
	     .accordion button[aria-expanded='true'] .icon::after {
	         width: 0;
	    }
	     .accordion button[aria-expanded='true'] + .accordion-content {
	         opacity: 1;
	         /*max-height: 9em;*/
	         max-height: 100%;
	         transition: all 200ms linear;
	         will-change: opacity, max-height;
	    }
	     .accordion .accordion-content {
	         opacity: 0;
	         max-height: 0;
	         overflow: hidden;
	         transition: opacity 200ms linear, max-height 200ms linear;
	         will-change: opacity, max-height;
	    }
	     .accordion .accordion-content p {
	         font-size: 1rem;
	         font-weight: 400;
	         margin: 2em 0;
	    }

	    .about-section.about-page {
	        padding-top: 0;
	    }

	    .clients-section {
	        padding-top: 0;
	    }

	    .accordion button[aria-expanded='true'] + .accordion-content {
	    	padding: 20px 0;
	    }

	    .heading {
	    	margin-top: 4%;
	    }

	    .about-tiktok-banner-inner {
	    	margin: 4% 0;
	    }

	    @media (max-width: 575px) {
	        .about-section .container {
	            padding: 0 2rem;
	        }

	        .about-section.about-page {
	            padding-bottom: 40px !important;
	        }

	        .accordion .accordion-content p {
	            margin: 1em 0;
	        }
	    }
	</style>

	<div class="_container">

		<h2 class="text-center heading">FAQ</h2>

		<div class="about-tiktok-banner-inner">
			<div class="tiktok-text-sec">
				<section class="about-section about-page">
				    <div class="auto-container">
				        <div class="row clearfix">
				            <div class="container">  
				              <div class="accordion">
				                
				                <div class="accordion-item">
				                  <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">What is the Minimum budget for the campaign?</span><span class="icon" aria-hidden="true"></span></button>
				                  <div class="accordion-content">$1000</div>
				                </div>

				                <div class="accordion-item">
				                  <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Do i have to pay each creator my self?</span><span class="icon" aria-hidden="true"></span></button>
				                  <div class="accordion-content">No, Open-Label handles all payments to all creators</div>
				                </div>

				                <div class="accordion-item">
				                  <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">What happens if a creator deletes their video?</span><span class="icon" aria-hidden="true"></span></button>
				                  <div class="accordion-content">If videos are deleted within 2 weeks the creator will not receive their payment and it will be added back to your campaign or refunded.</div>
				                </div>

				                <div class="accordion-item">
				                  <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">What kind of support does BigTinySound have for sponsors?</span><span class="icon" aria-hidden="true"></span></button>
				                  <div class="accordion-content">We take support for sponsorships very seriously! Our team is available over email or zoom calls whenever needed.</div>
				                </div>

				                <div class="accordion-item">
				                  <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Can i request for custom package on request?</span><span class="icon" aria-hidden="true"></span></button>
				                  <div class="accordion-content">Yes, You can Request for custom package.</div>
				                </div>

				                <div class="accordion-item">
				                  <button id="accordion-button-6" aria-expanded="false"><span class="accordion-title">How can i create custom package?</span><span class="icon" aria-hidden="true"></span></button>
				                  <div class="accordion-content">Login to Artist Profile, Go to Creation & select the custom package option, Fill in your custom requirement & submit, Which will be approved by Open-label.</div>
				                </div>

				                <div class="accordion-item">
				                  <button id="accordion-button-7" aria-expanded="false"><span class="accordion-title">Is My Payment is Safe?</span><span class="icon" aria-hidden="true"></span></button>
				                  <div class="accordion-content">Yes, Your payment is safe & in Open-label Escrow account</div>
				                </div>

				                <div class="accordion-item">
				                  <button id="accordion-button-8" aria-expanded="false"><span class="accordion-title">How Open- Label Escrow works?</span><span class="icon" aria-hidden="true"></span></button>
				                  <div class="accordion-content">
				                  	<p>If a Artist and a Creator enter into an Any Hire Contract, whether fixed-price, these Any Hire Contract Escrow Instructions (“<strong>Escrow Instructions</strong>”) apply. These Escrow Instructions govern Escrow Accounts for Any Hire Contracts. Service Contracts are governed by the applicable escrow instructions.</p>

				                  	<p>To the extent permitted by applicable law, we may modify these Escrow Instructions without prior notice to you, and any revisions to these Escrow Instructions will take effect when posted on the Site unless otherwise stated. Please check the Site often for updates.</p>

				                  	<p>These Escrow Instructions hereby incorporate by reference the <a target="_blank" href="{{ url('terms-of-services') }}">Terms of Service</a> (“<strong>Terms of Service</strong>”). Capitalized terms not defined in these Escrow Instructions are defined in the User Agreement, elsewhere in the Terms of Service, or have the meanings given such terms on the Site. These Escrow Instructions only apply to Any Hire Contracts.</p>

				                  	<p>Escrow services are provided by Open-Label Escrow Inc. (“<strong>Open-Label Escrow</strong>”) pursuant to Internet Escrow Agent license no. 9635086, issued by the California Department of Financial Protection and Innovation.</p>

				                  	<p><strong>1. DIGITAL SIGNATURE</strong></p>

				                  	<p>By clicking to accept an Any Hire Contract, whether fixed-price or hourly, Artist and Creator are deemed to have executed these Escrow Instructions electronically, effective on the date Artist clicks to accept the Any Hire Contract, pursuant to California Civil Code section 1633.8 and the federal Electronic Signatures in Global and National Commerce Act, 15 U.S.C. Sec. 7001, et seq., as may be amended from time to time (the "<strong>E-Sign Act</strong>"). Doing so constitutes an acknowledgement that Artist and Creator agree to conduct the transaction electronically, and are able to electronically receive, download, and print these Escrow Instructions.</p>

				                  	<p><strong>2. ESCROW</strong></p>

				                  	<p><strong>2.1 Any Hire Fixed-Price Contracts</strong></p>

				                  	<p>Artist agrees to deposit funds to the Any Hire Contract Escrow Account on a biweekly basis the amount of any milestone(s) or the full amount of the Any Hire Contract if there is only one milestone for each active fixed-price Any Hire Contract during the biweekly billing cycle. Any funds deposited by Artists remain in the Any Hire Contract Escrow Account until they are released to the Creator Escrow Account or released to the Artist. Open-Label Escrow will not release funds held in escrow except as described in these Escrow Instructions.</p>

				                  	<p><strong>3. RELEASE AND DELIVERY OF AMOUNTS IN ESCROW</strong></p>

				                  	<p>Artist and Creator irrevocably authorize and instruct Open-Label Escrow to release applicable portions of the Any Hire Contract Escrow Account (each portion, a “<strong>Release</strong>”) to their Creator Escrow Account or Artist Escrow Account, as applicable, upon the occurrence of and in accordance with one or more Release Conditions provided below or as otherwise required by applicable law or the Terms of Service. If the funds are released to the Artist Escrow Account, they will be automatically returned to the Artist’s Payment Method that was charged to fund escrow. The amount of the Release will be delivered to the applicable Escrow Account in accordance with Creator’s or Artist’s instructions, as applicable, these Escrow Instructions, and the other Terms of Service.</p>

				                  	<p><strong>3.1 RELEASE CONDITIONS</strong></p>

				                  	<p>As used in these Escrow Instructions, “<strong>Release Condition</strong>” means any of the following:</p>

				                  	<ol>
				                  		<li>For fixed-price Any Hire Contracts, Artist affirmatively clicks to accept the milestone(s) or fixed-price Any Hire Contract work submitted by Creator for approval.</li>

				                  		<li>For fixed-price Any Hire Contracts, Artist affirmatively clicks to accept the milestone(s) or fixed-price Any Hire Contract work performed, but not yet submitted by Creator for approval.</li>

				                  		<li>For fixed-price Any Hire Contracts, Artist does not take any action for 14 days from the date Creator submits the milestone or Fixed-Price Contract work for approval, in which case Creator and Artist agree that Open-Label Escrow is authorized and irrevocably instructed to immediately release to Creator the amount associated with the applicable milestone(s) in connection with such Release request.</li>

				                  		<li>For fixed-price Any Hire Contracts, Creator cancels the contract before a payment has been released to Creator, in which case the funds are to be returned to the Artist.</li>

				                  		<li>For fixed-price Any Hire Contracts, Artist cancels the contract before a payment has been released to Creator and Creator approves the request or takes no action within 7 days, in which case the funds are to be released to the Artist.</li>

				                  		<li>For hourly Any Hire Contracts, Artist has approved all or a portion of the Creator's Hourly Invoice, or has taken no action during the four days following the close of the weekly invoice period, which is deemed approval of all hours invoiced for purposes of this Release Condition.</li>

				                  		<li>Artist and Creator have submitted joint written instructions for a Release.</li>

				                  		<li>Issuance of the final order of a court or arbitrator of competent jurisdiction from which appeal is not taken, in which case the funds will be released in accordance with such order.</li>

				                  		<li>We believe, in our sole discretion, that fraud, an illegal act, or a violation of Open-Label's Terms of Service has been committed or is being committed or attempted, in which case Artist and Creator irrevocably authorize and instruct Open-Label Escrow to take such actions as we deem appropriate in our sole discretion and in accordance with applicable law, in order to prevent or remedy such acts, including without limitation to return the funds associated with such acts to their source of payment.</li>
				                  	</ol>

				                  	<p><strong>4. INSTRUCTIONS IRREVOCABLE</strong></p>

				                  	<p>On the occurrence of a Release Condition, Artist and Creator are deemed to and hereby agree that the instruction to Open-Label Escrow and its wholly owned subsidiaries to release funds is irrevocable. Without limiting the foregoing, Artist’s instruction to Open-Label Escrow and its wholly owned subsidiaries to pay a Creator is irrevocable. Such instruction is Artist’s authorization to transfer funds to Creator from the Artist Escrow Account or authorization to charge Artist’s Payment Method. Such instruction is also Artist’s representation that Artist has received, inspected and accepted the subject work or expense. Artist acknowledges and agrees that upon receipt of Artist’s instruction to pay Creator, Open-Label Escrow will transfer funds to the Creator and that Open-Label, Open-Label Escrow, and other Affiliates have no responsibility to and may not be able to recover such funds. Therefore, and in consideration of services described in this Agreement, Artist agrees that once Open-Label Escrow or its subsidiary has charged Artist’s Payment Method, the charge is non-refundable.</p>

				                  	<p><strong>5. MAKING OR RECEIVING A BONUS OR EXPENSE PAYMENT</strong></p>

				                  	<p>Artist may also make a bonus, tip, expense, or other miscellaneous payment to Creator using the Site. To make such a payment to a Creator, Artist must follow the instructions and links on the Site and provide the information requested. If Artist clicks to pay such a payment to Creator, Artist irrevocably instructs Open-Label Escrow to and Open-Label Escrow will release escrow funds to Creator.</p>

				                  	<p><strong>6. REFUNDS AND CANCELLATIONS</strong></p>

				                  	<p>Artist and Creator are encouraged to come to a mutual agreement if refunds or cancellations are necessary. Open-Label will hold funds in the Any Hire Contract Escrow Account until a Release Condition, as defined in Section 3.1 is fulfilled. If there are no funds in escrow, Creator may issue a refund via the Open-Label platform up to the full amount paid on the Any Hire Hourly or Any Hire Fixed-Price Contract.</p>

				                  	<p><strong>7. EXCLUSIONS</strong></p>

				                  	<p>Open-Label’s Dispute Assistance Program and Payment Protection Programs do not apply to Any Hire Contracts. Open-Label, Open-Label Escrow, and Affiliates do not guarantee that Creator will be paid by Artist. Upon occurrence of a Release Condition, as defined in Section 3.1, Open-Label Escrow can release only the amount of funds that have been deposited by Artist to the Any Hire Contract Escrow Account. Open-Label, Open-Label Escrow, and Affiliates are under no circumstances liable to Creator for payment for Artist’s failure to deposit funds to the Any Hire Contract Escrow Account to cover payment to Creator.</p>

				                  	<p><strong>8. NOTICES</strong></p>

				                  	<p>All notices to a User required by these Escrow Instructions will be made via email sent by Open-Label to the User’s registered email address. Users are solely responsible for maintaining a current, active email address registered with Open-Label, for checking their email and for responding to notices sent by Open-Label to the User’s registered email address.</p>

				                  	<p><strong>9. ABUSE</strong></p>

				                  	<p>Open-Label, in its sole discretion, reserves the right to suspend or terminate your Account immediately upon giving notice to you if Open-Label believes you are in violation of the Terms of Service.</p>

				                  	<p><strong>10. APPOINTMENT OF Open-Label ESCROW AS PAYMENTS AGENT OF THE Creator</strong></p>

				                  	<p>Each Creator hereby appoints Open-Label Escrow as its payment collection agent for the limited purpose of receiving, holding, and settling payments from Artists pursuant to this Agreement. Each Creator further agrees and understands that a payment received by Open-Label Escrow from a Artist, on Creator’s behalf, shall be considered the same as payment made directly to the Creator. Such payment shall be deemed to satisfy the Artist’s obligation to pay Creator, and the Creator will provide its services to the Artist in the agreed-upon manner as if the Creator had received the payment directly from the Artist. Each Creator understands that Open-Label Escrow’s obligation to pay the Creator is subject to, and conditional upon, successful receipt of the associated payments from the Artist. Creator further agrees that Open-Label Escrow is not required to settle such payment to Creator in the event that Artist initiates a chargeback, ACH return, or otherwise disputes the payment. In the event that Open-Label Escrow does not make a payment to Creator as required by this Agreement, Creator will have recourse against only Open-Label Escrow and not against Artist. In accepting appointment as the limited payment collection agent of the Creator, Open-Label Escrow assumes no liability for any acts or omissions of the Creator.</p>

				                  	<p>Each Artist acknowledges and agrees that, notwithstanding the fact that Open-Label Escrow is not a party to the agreement between the Artist and the Creator, Open-Label Escrow acts as each Creator’s payment collection agent for the limited purpose of accepting payments from the Artist on behalf of the Creator. Upon a Artist’s payment of the funds to Open-Label Escrow, the Artist’s payment obligation to the Creator for the agreed upon amount is extinguished, and Open-Label Escrow is responsible for remitting the funds successfully received by Open-Label Escrow to the Creator in the manner described in this Agreement. In the event that Open-Label Escrow does not remit any such amounts, the Creator will have recourse only against Open-Label Escrow and not the Artist directly.</p>

				                  	<p><strong>11. NO RESPONSIBILITY FOR SERVICES OR PAYMENTS</strong></p>

				                  	<p>Open-Label and Affiliates merely provide a platform for Internet payment services. Open-Label and Affiliates do not have any responsibility or control over the Creator Services that Artist purchases, except as explicitly provided in Section 10. Nothing in this Agreement deems or will be interpreted to deem Open-Label or any Affiliate as Artist’s or Creator’s agent with respect to any Creator Services, or expand or modify any warranty, liability or indemnity stated in the Terms of Service. For example, Open-Label does not guarantee the performance, functionality, quality, or timeliness of Creator Services or that a Artist can or will make payments.</p>
				                  </div>
				                </div>

				                <div class="accordion-item">
				                  <button id="accordion-button-9" aria-expanded="false"><span class="accordion-title">Can i request for Refund, if Not Required?</span><span class="icon" aria-hidden="true"></span></button>
				                  <div class="accordion-content">No, Deposited amount is not refunded.</div>
				                </div>

				                <div class="accordion-item">
				                  <button id="accordion-button-10" aria-expanded="false"><span class="accordion-title">Did i miss something to ask or not in the FAQ list?</span><span class="icon" aria-hidden="true"></span></button>
				                  <div class="accordion-content">If their is any question left un-anwswered, You can ask directly to open-label support at <a href="mailto:info@upliftworks.com">info@upliftworks.com</a>, We will answer your question.</div>
				                </div>

				              </div>
				            </div>
				        </div>
				    </div>
				</section>

			</div>
		</div>
	</div>

	<script type="text/javascript">
	    const items = document.querySelectorAll(".accordion button");

	    function toggleAccordion() {
	      const itemToggle = this.getAttribute('aria-expanded');
	      
	      for (i = 0; i < items.length; i++) {
	        items[i].setAttribute('aria-expanded', 'false');
	      }
	      
	      if (itemToggle == 'false') {
	        this.setAttribute('aria-expanded', 'true');
	      }
	    }

	    items.forEach(item => item.addEventListener('click', toggleAccordion));
	</script>

@include('vwFooter')
