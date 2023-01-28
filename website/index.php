<!DOCTYPE html>
<html lang="en">

<head>

	<?php 
		include("includes/header.php");
	?>

    <!-- Website Title -->
    <title>Aris Bot | Home</title>
</head>

<body>

    <!-- Navbar -->
	<?php 
		include("includes/navbar-index.php");
	?>


    <!-- Info -->
    <section class="bg-dark text-light text-center py-5">
        <div class="container">
            <div class="d-flex">
                <div>
                    <h1><span class="text-accent-colour">Aris</span> Bot</h1>
                    <p>Aris Bot is an integrated bot that separates you from the rest of the bots and everything you
                        need is in it.</p>
                    <a class="btn btn-accent" href="">Invite Bot</a>
                    <a class="m-2 btn btn-light" href="">Support Server</a>
                </div>
                <img class="img-fluid w-50" src="assets/img/ArisBot.svg" alt="">
            </div>
        </div>
    </section>


    <!-- Features -->
    <section  id="Features" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">
                Features
            </h2>
            <div class="row text-center">
                <div class="col-sm">
                    <div class="card bg-dark text-light mb-3">
                        <div class="h1 mt-3">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title text-accent-colour">Easy to Use</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae
                                illo nihil nesciunt cum sequi rem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card bg-dark text-light mb-3">
                        <div class="h1 mt-3">
                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title text-accent-colour">24/7 Online</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae
                                illo nihil nesciunt cum sequi rem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card bg-dark text-light mb-3">
                        <div class="h1 mt-3">
                            <i class="fa-solid fa-folder-open"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title text-accent-colour">Open Source</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae
                                illo nihil nesciunt cum sequi rem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Statistics -->
    <section id="Statistics" class="py-5 bg-dark text-light">
        <div class="container">
            <div class="py-2 text-center">
                <h2>Statistics</h2>
            </div>
            <div class="row align-items-center justify-content-center text-center -5">
                <div class="col">
                    <img src="assets/img/statics.svg" alt="" class="img-fluid d-none d-md-block">
                </div>
                <div class="col-sm p-5 h1">
                    <i class="fa-solid fa-server text-accent-colour"></i>
                    <h5>100</h5>
                    <h5>Server</h5>
                </div>
                <div class="col-sm p-5 h1">
                    <i class="fa-solid fa-user-group text-accent-colour"></i>
                    <h5>100</h5>
                    <h5>Users</h5>
                </div>
                <div class="col-sm p-5 h1">
                    <i class="fa-solid fa-hashtag text-accent-colour"></i>
                    <h5>100</h5>
                    <h5>Channels</h5>
                </div>
            </div>

        </div>
    </section>


    <!-- FAQ -->
    <section id="FAQ" class="py-5">
        <div class="container">
            <h2 class="text-center mb-3">
                Frequently Asked Questions
            </h2>
            <div class="accordion accordion-flush" id="your-faq">
                <div class="accordion-item">
                    <h5 class="accordion-header" id="qusetion-1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer-1">
                            Question One
                        </button>
                    </h5>
                    <div class="accordion-collapse collapse" id="answer-1" data-bs-parent="#your-faq">
                        <div class="p-3">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae libero cumque, obcaecati soluta voluptatibus in!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h5 class="accordion-header" id="qusetion-2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer-2">
                            Question Two
                        </button>
                    </h5>
                    <div class="accordion-collapse collapse" id="answer-2" data-bs-parent="#your-faq">
                        <div class="p-3">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae libero cumque, obcaecati soluta voluptatibus in!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h5 class="accordion-header" id="qusetion-3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer-3">
                            Question Three
                        </button>
                    </h5>
                    <div class="accordion-collapse collapse" id="answer-3" data-bs-parent="#your-faq">
                        <div class="p-3">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae libero cumque, obcaecati soluta voluptatibus in!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer -->
	<?php 
		include("includes/footer.php");
	?>

    <!-- Javascript -->
	<?php 
		include("includes/javascript.php");
	?>
</body>

</html>