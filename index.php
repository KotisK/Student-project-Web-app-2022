<?php
include_once('elements/header.php');
?>

<style>
    #overlay2 {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0,0.5);
        z-index: 2;
        cursor: pointer;
    }
</style>

<div id="overlay2">
    <div class="App-header2" >
        <button onclick="off1()">X</button>
        <video id="media1" width="320" height="240" controls>
            <source src="videos/1o-ns.mp4" type="video/mp4">
        </video>
    </div>
</div>
<script>
    function on1() {
        document.getElementById("overlay2").style.display = "block";
    }

    function off1() {
        document.getElementById("overlay2").style.display = "none";
        document.getElementById('media1').muted = true;
    }
</script>
<script>window.onload = on1();</script>

<section>
    <div class="rt-container">
        <div class="col-rt-12">
            <div class="Scriptcontent">

                <!-- Start slider -->
                <section class="auto-slider">
                    <div id="slider">
                        <figure>
                            <img src="sl-images/image-1.jpg" alt="Image">
                            <img src="sl-images/image-2.jpg" alt="Image">
                            <img src="sl-images/image-3.jpg" alt="Image">
                            <img src="sl-images/image-4.jpg" alt="Image">
                            <img src="sl-images/image-5.jpg" alt="Image">

                        </figure>
                        <div class="indicator"></div>
                    </div>
                </section>
                <!-- end slider -->

            </div>
        </div>
    </div>
</section>

<header class="py-5">
    <div class="container px-lg-5">
        <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
            <div class="m-4 m-lg-5">
                <h1 class="display-5 fw-bold">Λίγα Λόγια!</h1>
                <p class="fs-4">Η ισότητα στις μέρες μας περνάει κρίση, πρέπει όμως να κάνουμε κάτι για να το αλλάξουμε αυτό. Εδώ θα βρείτε οποιαδήποτε πληροφορία χρειαστείτε για τον πολιτισμό της χώρας μας και θα ενημερωθείτε για κάθε νεο γεγονός.</p>
                <!--<a class="btn btn-primary btn-lg" href="#!">Call to action</a>-->
            </div>
        </div>
    </div>
</header>
<!-- Page Content-->
<section class="pt-4">
    <div class="container px-lg-5">
        <!-- Page Features-->
        <div class="row gx-lg-5">
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                        <h2 class="fs-4 fw-bold">Διάδραση φωνητικά</h2>
                        <p class="mb-0">Ο επισκέπτης θα μπορεί να ενημερωθεί με ήχο.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                        <h2 class="fs-4 fw-bold">Κατέβασε</h2>
                        <p class="mb-0">Μελλοντικά προβλέπουμε σε μία εφαρμογή για τις υπηρεσίες μας.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-card-heading"></i></div>
                        <h2 class="fs-4 fw-bold">Διάδραση με νοηματική</h2>
                        <p class="mb-0">Το σημαντικότερο κομμάτι μας, ο επισκέπτης μπορεί να διαδράσει χρησιμοποιώντας νοηματική γλώσσα!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-bootstrap"></i></div>
                        <h2 class="fs-4 fw-bold">Φωνητικές εντολές</h2>
                        <p class="mb-0">Ο επισκέπτης μπορεί να αναζητά οτιδήποτε με φωνητικές εντολές!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-code"></i></div>
                        <h2 class="fs-4 fw-bold">Απάντηση επίσης σε νοηματική</h2>
                        <p class="mb-0">Οι απαντήσεις δίνονται επίσης στην νοηματική!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-patch-check"></i></div>
                        <h2 class="fs-4 fw-bold">Υποστήριξη για ΑΜΕΑ</h2>
                        <p class="mb-0">Η σελίδα έχει διαμορφωθεί καταλλήλως για μερικές κατηγορίες ΑΜΕΑ!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once('elements/footer.php');
?>