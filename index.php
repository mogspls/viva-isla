<?php
    $pagetitle = "Welcome to Viva Isla!";
    include("layout/header.php");
?>
<main id="home">
    <!-- Landing -->
    <section id="landing">
        <div class="container">
            <div id="title">
                <div id="title-wrapper">
                    <h1 style="color: white; font-weight: 400; text-align: center;"></h1>
                    <h3 style="color: white; font-weight: 400; margin: 0 auto; text-align: center; font-weight: 100; text-transform: uppercase;"></h3>
                </div>
                
                <div id="filter">
                    <!-- please finish this -->
                    <div id="filterFunction"></div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About -->
    <section id="about">
        <div class="container">
            <h1>Welcome to <span style="color: #6BAB00 ">VIVA ISLA</span></h1>
            <h3>viva isla specializes in <span style="font-weight: 600;">real estate brokerage &amp; development</span> across the Philippines.</h3>
            <p>Our international leadership team is determined to make your property purchase &amp; construction <span style="font-weight: 600;">straight-forward and simple —</span> providing the utmost security and quality assurance for your investment</p>
        </div>
        <div class="flex">
            <div>
                <img src="assets/img/icons/realestateservices.svg" alt="" height="100px">
                <h4>Real Estate Services</h4>
            </div>
            <div>
                <img src="assets/img/icons/developmentservices.svg" alt="" height="100px">
                <h4>Development Services</h4>
            </div>
            <div>
                <img src="assets/img/icons/consultationservices.svg" alt="" height="100px">

                <h4>Consultation Services</h4>
            </div>
        </div>
    </section>
    
    <!-- Featured Properties -->
    <section id="featured-properties">
        <div class="container">
            <div class="flex">
                <h1 id="featuredProperties">FEATURED PROPERTIES</h1>
                <p id="location"><span style="font-weight: 600;">Location:</span>&nbsp;General Luna, Siargao</p>
            </div>
        </div>
        <div class="property-container">
            <button id="carouselLeft">
                <i class="fas fa-arrow-left"></i>
            </button>
            <div class="wrapper">
                <!-- Properties 
                 | Please loop this on PHP, limit to 3 loops only.
                -->
                <div class="property">
                    <!-- POST LOOP -->
                    <div class="card">
                        <div style="background: #333; width: 100%; height: 364px;"></div>
                        <div class="flex" style="margin: 10px 0px;">
                            <h4 style="display: flex; flex: 1; align-items: center;">General Luna, Siargao</h4>
                            <h1 style="display: flex; flex: 1; justify-content: flex-end;" class="prices" data-base-price="987654321">987654321</h1>
                        </div>
                    </div>
                    <!-- POST LOOP -->
                    <div class="card">
                        <div style="background: #333; width: 100%; height: 364px;"></div>
                        <div class="flex" style="margin: 10px 0px;">
                            <h4 style="display: flex; flex: 1; align-items: center;">General Luna, Siargao</h4>
                            <h1 style="display: flex; flex: 1; justify-content: flex-end;" class="prices" data-base-price="123456789">123456789</h1>
                        </div>
                    </div>
                    <!-- POST LOOP -->
                    <div class="card">
                        <div style="background: #333; width: 100%; height: 364px;"></div>
                        <div class="flex" style="margin: 10px 0px;">
                            <h4 style="display: flex; flex: 1; align-items: center;">General Luna, Siargao</h4>
                            <h1 style="display: flex; flex: 1; justify-content: flex-end;" class="prices" data-base-price="4500000">4500000</h1>
                        </div>
                    </div>
                </div>
            </div>
            <button id="carouselRight">
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </section>
    
    <!-- We Build Perfection -->    
    <section id="build-perfection">
        <div class="container flex">
            <div style="display: flex; flex-direction: column; justify-content: center; padding: 0px 20px;">
                <h1>We Build Perfection.</h1>
                <p style="margin: 15px 0px;"><span style="font-weight: 600;">Design &amp; build  </span>your construction project with viva isla, from homes to hotels - We build with precision and and <span style="font-weight: 600;">unsurpassed quality</span> to bring your project from an idea to completion.</p>
                <p style="margin: 15px 0px;">We focus on meticulous quality control, competitive pricing, safety and fast-track scheduling to <span style="font-weight:600">guarantee your success</span></p>
                <br>
                <div>
                    <a href="#" style="background-color: #E8891B; padding: 15px 30px; font-family: 
                    'Poppins', sans-serif; font-weight: 600; color: #fff; text-transform: uppercase; text-decoration: none; font-size: 16px; border-radius: 10px;">LEARN MORE</a>
                </div>
            </div>
            <img src="assets/img/iStock-177120516.jpg" alt="">
        </div>
    </section>
    
    <!-- Our Listings -->
    <section id="listings">
        
    </section>
</main>
<?php
    include('layout/footer.php');
?>