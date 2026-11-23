<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | SOUND Entertainment</title>
    <meta name="description"
        content="Stream new and classic songs and videos in English and regional languages. Browse by artist, album, year, genre and language, then rate and review.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@600;800&family=Figtree:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="top">
        <div class="wrap bar"><a class="logo" href="index.html"
                aria-label="SOUND home"><i><b></b><b></b><b></b><b></b></i>SOUND</a><button class="burger"
                data-act="burger" aria-label="Open menu" aria-expanded="false"><svg class="ic" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round" aria-hidden="true">
                    <path d="M3 6h18M3 12h18M3 18h18"></path>
                </svg></button>
            <div class="navwrap">
                <nav class="main" aria-label="Main"><a href="index.html" class="">Home</a>
                    <div class="dd"><button class="ddb" data-act="dd" aria-expanded="false"
                            aria-haspopup="true">Library<svg class="ic" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg></button>
                        <div class="menu"><a href="music.html"><svg class="ic" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M9 18V5l12-2v13"></path>
                                    <circle cx="6" cy="18" r="3"></circle>
                                    <circle cx="18" cy="16" r="3"></circle>
                                </svg><span><b>Music</b><small>Songs in every language</small></span></a><a
                                href="videos.html"><svg class="ic" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">
                                    <rect x="2" y="5" width="14" height="14" rx="2"></rect>
                                    <path d="M22 8l-6 4 6 4z"></path>
                                </svg><span><b>Videos</b><small>Official, live and behind the
                                        scenes</small></span></a><a href="browse.html"><svg class="ic" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M12 2l10 5-10 5L2 7z"></path>
                                    <path d="M2 12l10 5 10-5M2 17l10 5 10-5"></path>
                                </svg><span><b>Browse</b><small>By artist, album, year, genre</small></span></a></div>
                    </div><a href="services.html" class="">Services</a><a href="gallery.html" class="">Gallery</a>
                    <div class="dd"><button class="ddb" data-act="dd" aria-expanded="false"
                            aria-haspopup="true">Company<svg class="ic" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg></button>
                        <div class="menu"><a href="about.html"><svg class="ic" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="9" cy="8" r="4"></circle>
                                    <path d="M1 21c0-4 3.5-7 8-7s8 3 8 7M17 4a4 4 0 010 8M23 21c0-3-2-5.5-5-6.5"></path>
                                </svg><span><b>About us</b><small>Our story and values</small></span></a><a
                                href="portfolio.html"><svg class="ic" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="9" r="6"></circle>
                                    <path d="M8.5 14L7 22l5-3 5 3-1.5-8"></path>
                                </svg><span><b>Portfolio</b><small>Featured campaigns</small></span></a><a
                                href="blog.html"><svg class="ic" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">
                                    <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path>
                                </svg><span><b>Blog and news</b><small>Stories from SOUND</small></span></a></div>
                    </div><a href="contact.html" class="">Contact</a>
                </nav>
                <div class="who"><a class="btn sm" href="login.html">Log in</a><a class="btn sm pri"
                        href="register.html">Register</a></div>
            </div>
        </div>
    </header>
    <main id="main">
        <section class="auth">
            <div class="panel narrow">
                <h2>Create account</h2>
                <p class="muted small">All fields are required.</p>
                <form class="f" data-form="register" novalidate=""><label>User ID (must be unique)<input id="r_id"
                            name="r_id" type="text" value="" placeholder="e.g. sara_k" autocomplete="username"><span
                            class="err" id="e_r_id"></span></label><label>Full name<input id="r_name" name="r_name"
                            type="text" value="" placeholder="As on your ID" autocomplete="name"><span class="err"
                            id="e_r_name"></span></label><label>Address<input id="r_addr" name="r_addr" type="text"
                            value="" placeholder="House, street, city" autocomplete="street-address"><span class="err"
                            id="e_r_addr"></span></label>
                    <div class="row"><label>Phone number<input id="r_phone" name="r_phone" type="tel" value=""
                                placeholder="+923001234567" autocomplete="tel"><span class="err"
                                id="e_r_phone"></span></label><label>Email<input id="r_email" name="r_email"
                                type="email" value="" placeholder="you@example.com" autocomplete="email"><span
                                class="err" id="e_r_email"></span></label></div>
                    <div class="row"><label>Password<input id="r_pw" name="r_pw" type="password" value=""
                                placeholder="8+ chars, upper, lower, digit" autocomplete="new-password"><span
                                class="err" id="e_r_pw"></span></label><label>Confirm password<input id="r_pw2"
                                name="r_pw2" type="password" value="" placeholder="" autocomplete="new-password"><span
                                class="err" id="e_r_pw2"></span></label></div><button class="btn pri lg"
                        type="submit">Register</button>
                </form>
                <p class="small muted">Already registered? <a href="login.html">Log in</a></p>
            </div>
        </section>
    </main>
    <footer class="foot">
        <div class="wrap">
            <div class="fgrid">
                <div><a class="logo" href="index.html"><i><b></b><b></b><b></b><b></b></i>SOUND</a>
                    <p>New and old songs and videos, in English and your own language.</p>
                </div>
                <div>
                    <h4>Library</h4><a href="music.html">Music</a><a href="videos.html">Videos</a><a
                        href="browse.html">Browse</a><a href="gallery.html">Gallery</a>
                </div>
                <div>
                    <h4>Company</h4><a href="about.html">About us</a><a href="services.html">Services</a><a
                        href="portfolio.html">Portfolio</a><a href="blog.html">Blog and news</a>
                </div>
                <div>
                    <h4>Contact</h4>
                    <p>SOUND Group HQ, Main Boulevard, Lahore</p>
                    <p>+92 300 1234567</p>
                    <p>hello@sound.example</p><a href="contact.html">Send a message</a>
                </div>
            </div>
            <div class="fbase"><span>© 2026 SOUND Group. All rights reserved.</span><span><a href="login.html">Log
                        in</a> · <a href="register.html">Register</a></span></div>
        </div>
    </footer>
    <script src="js/menu.js"></script>
</body>

</html>