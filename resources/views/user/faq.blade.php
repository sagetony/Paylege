@include('user.headh')
@include('user.headerh')

 
<div class="page-banner-area">
    <div class="container">
    <div class="row align-items-center justify-content-center">
    <div class="col-lg-6 col-md-6">
    <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
    <h2>Frequently Questions</h2>
    <ul>
    <li>
    <a href="{{ route('home') }}">Home</a>
    </li>
    <li>Pages</li>
    <li>FAQ</li>
    </ul>
    </div>
    </div>
    <div class="col-lg-6 col-md-6">
    <div class="page-banner-image" data-aos="fade-left" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
    <img src="{{ asset('assett/assets/images/page-banner/banner.png') }}" alt="image">
    <div class="banner-shape">
    <img src="{{ asset('assett/assets/images/page-banner/shape.png') }}" alt="image">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="faq-area ptb-100">
    <div class="container">
    <div class="section-title">
    <span>Frequently Ask Questions</span>
    <h2>Let’s Answer Some Of Your Questions Or Frequently Asked Questions</h2>
    </div>
    <div class="row align-items-center">
    <div class="col-lg-6 col-md-12">
    <div class="faq-accordion mb-25">
    <div class="accordion" id="FaqAccordion">
    <div class="accordion-item">
    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
    What is Escrow?
    </button>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#FaqAccordion">
    <div class="accordion-body">
    <p>Escrow is a contractual arrangement in which a third party receives and disburses funds or documents for the primary transacting parties, with the disbursement dependent on conditions agreed to by the transacting parties.</p>
    </div>
    </div>
    </div>
    <div class="accordion-item">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    How does escrow work on the Swiftescrow platform?
    </button>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#FaqAccordion">
    <div class="accordion-body">
    <p>We built Swiftescrow Crypto Transfer System to be an escrow service for crypto trading and exchanges, with one big difference we give the power of security back to both parties (In this case, the Buyer and Seller). Swiftescrow is a true Peer-to-Peer crypto exchange escrow service, where each transaction produces a unique smart contract that only holds the designated funds for your transaction, with absolutely no pooled funds, guaranteeing a trustful trading experience.</p>
    </div>
    </div>
    </div>
    <div class="accordion-item">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    Advantages of using Swiftescrow?
    </button>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#FaqAccordion">
    <div class="accordion-body">
    <p>There are so many advantages to using Swiftescrow for your next crypto exchange transaction. The biggest reason for doing so, is to keep your funds secure. With so many potential scammers out there, Swiftescrow's patent pending technology is designed to secure your funds during the entire transaction process, with funds only being released when all parties have fully through with their obligations.</p>
    
    <p>The other reason for using Swiftescrow is its ease of use, you can start a transaction in just a few minutes, managing every step within a simple to use transaction panel. You can see the detailed status during a transaction.</p>
    </div>
    </div>
    </div>
    </div>
     </div>
    </div>
    <div class="col-lg-6 col-md-12">
    <div class="faq-accordion">
    <div class="accordion" id="FaqAccordionTwo">
    <div class="accordion-item">
    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
    How long does it take for funds to be released?
    </button>
    <div id="collapseFour" class="accordion-collapse collapse show" data-bs-parent="#FaqAccordionTwo">
    <div class="accordion-body">
    <p>Once the required funds have been received from both the buyer and seller, Normally your funds are automatically available for withdrawal to your desired wallet address, In few cases, You may need to wait for a maximum of 1 hour due to the network.</p>
    </div>
    </div>
    </div>
    <div class="accordion-item">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
    Are my personal details secure with you?
    </button>
    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#FaqAccordionTwo">
    <div class="accordion-body">
    <p>Swiftescrow takes a number of precautionary measures to ensure that the personal details of our clients are held in absolute confidence and are securely stored so as not to be accessible by unauthorized persons.</p>
    </div>
    </div>
    </div>
    <div class="accordion-item">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
    Are my funds secure?
    </button>
    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#FaqAccordionTwo">
    <div class="accordion-body">
    <p>Yes, every Swiftescrow transaction creates a unique irrefutable smart wallet listed on public wallet addresses, this smart contract will hold the funds for your transaction until time of distribution between buyer and seller.</p>
    </div>
    </div>
    <div class="accordion-item">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
    How do I Verify or Confirm a transaction?
    </button>
    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#FaqAccordionTwo">
    <div class="accordion-body">
    <p>In order to verify your account, Both parties must click on the mail sent to them after successfully creating a transaction.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    

    <div class="overview-area ptb-100">
        <div class="container">
        <div class="overview-content" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
        <span>Connect Us</span>
        <h3>Sending International Business Payments or Sending Money To Family Overseas? Snuff Are Your Fast And Simple Solution.</h3>
        <ul class="overview-btn-group">
       
        <li>
         <a href="{{ route('contact') }}" class="optional-btn">Business Account</a>
        </li>
        </ul>
        </div>
        </div>
        <div class="overview-shape">
        <img src="{{ asset('assett/assets/images/overview/shape-1.png') }}" alt="image">
        </div>
        <div class="overview-shape-2">
        <img src="{{ asset('assett/assets/images/overview/shape-2.png') }}" alt="image">
        </div>
        </div>
        





@include('user.footerh')