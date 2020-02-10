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
            <h3>viva isla specializes in <span style="font-weight: 400;">real estate brokerage &amp; development</span> across the Philippines.</h3>
            <p>Our international leadership team is determined to make your property purchase &amp; construction <span style="font-weight: 400;">straight-forward and simple —</span> providing the utmost security and quality assurance for your investment</p>
        </div>
        <div class="flex">
            <div>
                <h4 style="color: #6BAB00">Real Estate Services</h4>
            </div>
            <div>
                <h4>Development Services</h4>
            </div>
            <div>
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
</main>
<?php
    include('layout/footer.php');
?>