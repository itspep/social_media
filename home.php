<!DOCTYPE html>
<html lang="en">
<head>
    <!--my external css file linkk-->
    <link rel="stylesheet" href="style.css">
    <!--the link for the icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VVU Social</title>
</head>
<body>
    <nav>
        <div class="container">
            <h2 class="logo">
                ViewLife
            </h2>
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="search" placeholder="search">
            </div>
            <div class="create">
                <label class="btn btn-primary" for="create-post">create</label>
                <div class="profile-picture">
                    <img src="images/profile-1.jpg" alt="profile">
                </div>
            </div>
        </div>
    </nav>

    <!-------------------MAIN------------->
    <main>
        <div class="container">
            <!--LEFT-->
            <div class="left">
                <a class="profile">
                    <div class="profile-picture">
                        <img src="images/profile-1.jpg" alt="">
                    </div>
                    <div class="handle">
                        <h4>Pep Tahiru</h4>
                        <p class="text-muted">
                            @pep
                        </p>
                    </div>
                </a>

                <!--SIDE BAR-->
                <div class="sidebar">
                    <a class="menu-item active">
                        <span><i class="fas fa-home"></i></span><h3>Home</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="fas fa-compass"></i></span><h3>Explore</h3>
                    </a>
                    <a class="menu-item" id="notifications">
                        <span><i class="fas fa-bell"><small class="notification-count">9+</small></i></span><h3>Notification</h3>
                        <!--Notification Pop-up-->
                        <div class="notification-popup">
                            <div class="profile-picture">
                                <img src="images/profile-2.jpg" alt="profile picture">
                            </div>
                            <div class="notification-body">
                                <b>Anang Sam </b>accepted your friend request
                                <small class="text-muted">2 DAYS AGO</small>
                            </div>
                            <div class="profile-picture">
                                <img src="images/profile-3.jpg" alt="profile picture">
                            </div>
                            <div class="notification-body">
                                <b>Minso Mark</b> accepted your friend request
                                <small class="text-muted">5 HOURS AGO</small>
                            </div>
                            <div class="profile-picture">
                                <img src="images/profile-4.jpg" alt="profile picture">
                            </div>
                            <div class="notification-body">
                                <b>Amoah Kingsley </b>accepted your friend request
                                <small class="text-muted">1 DAY AGO</small>
                            </div>
                            <div class="profile-picture">
                                <img src="images/profile-5.jpg" alt="profile picture">
                            </div>
                            <div class="notification-body">
                                <b>Patience Ahema </b>accepted your friend request
                                <small class="text-muted">1 HOUR AGO</small>
                            </div>
                            <div class="profile-picture">
                                <img src="images/profile-6.jpg" alt="profile picture">
                            </div>
                            <div class="notification-body">
                                <b>Patience Ahema </b>commented on your post
                                <small class="text-muted">1 MINUTES AGO</small>
                            </div>
                        </div>
                        <!--END NOTIFICATION POPUP-->
                    </a>
                    <a class="menu-item" id="message-notification">
                        <span><i class="fas fa-envelope"><small class="notification-count">6</small></i></span><h3>Message</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="fas fa-bookmark"></i></span><h3>Bookmarks</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="fas fa-store"></i></span><h3>E-market</h3>
                    </a>
                    <a class="menu-item" id="theme">
                        <span><i class="fas fa-palette"></i></span><h3>Theme</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="fa fa-cog"></i></span><h3>Settings</h3>
                    </a>
                </div>
                <!--    END OF SIDEBAR-->
                <label for="create-post" class="btn btn-primary">Create Post</label>
            </div>
            <!--END OF LEFT-->


            <!--MIDDLE-->
            <div class="middle">
                <!--STORIES-->
                <div class="stories">
                    <div class="story">
                        <div class="profile-picture">
                            <img src="images/profile-8.jpg" alt="">
                        </div>
                        <p class="name">your story</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src="images/profile-9.jpg" alt="">
                        </div>
                        <p class="name">James Lilla</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src="images/profile-10.jpg" alt="">
                        </div>
                        <p class="name">Nathan Jacob</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src="images/profile-11.jpg" alt="">
                        </div>
                        <p class="name">Isaac richy</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src="images/profile-12.jpg" alt="">
                        </div>
                        <p class="name">Nash Kambari</p>
                    </div>
                    <div class="story">
                        <div class="profile-picture">
                            <img src="images/profile-13.jpg" alt="">
                        </div>
                        <p class="name">Musah Mohammed</p>
                    </div>
                </div>
                <!--END OF STORIES-->
                <form action="" class="create-post">
                    <div class="profile-picture">
                        <img src="images/profile-1.jpg" alt="">
                    </div>
                    <input type="text" placeholder="What is on your mind, Pep" id="create-post">
                    <input type="submit" value="post" class="btn btn-primary">
                </form>

                <!-------------FEED------------->
                <div class="feeds">

                    <!--FIRST FEED-->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="images/profile-13.jpg" alt="">
                                </div>
                                <div class="info">
                                    <h3>Lara Rose</h3>
                                    <small>Oyibi, 15 MINUTES AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis"></i>Edit
                            </span>
                        </div>
                        <div class="picture">
                            <img src="images/feed-1.jpg" alt="">
                        </div>
                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="fas fa-heart"></i></span>
                                <span><i class="fas fa-comment-dots"></i></span>
                                <span><i class="fas fa-share-alt"></i></span>
                            </div>
                            <div class="book-mark">
                                <span><i class="fas fa-bookmark"></i></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="images/profile-10.jpg"></span>
                            <span><img src="images/profile-4.jpg"></span>
                            <span><img src="images/profile-15.jpg"></span>
                            <p>Liked by <b> Ernest Achiever</b> and <b>2,523 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Lana Rose</b> yh, I sawitcoming along way, by the good luck!<span class="hashtag"> #freelifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 277 comments</div>
                    </div>
                    <!--SECOND FEED-->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="images/profile-14.jpg" alt="">
                                </div>
                                <div class="info">
                                    <h3>Hajj Romeo</h3>
                                    <small>Kumasi, 30 MINUTES AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis"></i>Edit
                            </span>
                        </div>
                        <div class="picture">
                            <img src="images/feed-2.jpg" alt="">
                        </div>
                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="fas fa-heart"></i></span>
                                <span><i class="fas fa-comment-dots"></i></span>
                                <span><i class="fas fa-share-alt"></i></span>
                            </div>
                            <div class="book-mark">
                                <span><i class="fas fa-bookmark"></i></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="images/profile-2.jpg"></span>
                            <span><img src="images/profile-3.jpg"></span>
                            <span><img src="images/profile-5.jpg"></span>
                            <p>Liked by <b> Jacob Afeke</b> and <b>100 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Jakob Afeke</b> Even the day mustgiveway to the night<span class="hashtag"> #westlife</span></p>
                        </div>
                        <div class="comments text-muted">View all 27 comments</div>
                    </div>
                    <!--THIRD FEED-->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="images/profile-15.jpg" alt="">
                                </div>
                                <div class="info">
                                    <h3>Maame White</h3>
                                    <small>Techiman, 45 MINUTES AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis"></i>Edit
                            </span>
                        </div>
                        <div class="picture">
                            <img src="images/feed-3.jpg" alt="">
                        </div>
                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="fas fa-heart"></i></span>
                                <span><i class="fas fa-comment-dots"></i></span>
                                <span><i class="fas fa-share-alt"></i></span>
                            </div>
                            <div class="book-mark">
                                <span><i class="fas fa-bookmark"></i></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="images/profile-11.jpg"></span>
                            <span><img src="images/profile-4.jpg"></span>
                            <span><img src="images/profile-6.jpg"></span>
                            <p>Liked by <b> John Doe</b> and <b>523 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Lana Rose</b> I will be back<span class="hashtag"> #Terminator</span></p>
                        </div>
                        <div class="comments text-muted">View all 1,000 comments</div>
                    </div>
                    <!--FOURTH FEED-->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="images/profile-16.jpg" alt="">
                                </div>
                                <div class="info">
                                    <h3>Jane Doe</h3>
                                    <small>Tamale, 1 HOUR AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis"></i>Edit
                            </span>
                        </div>
                        <div class="picture">
                            <img src="images/feed-4.jpg" alt="">
                        </div>
                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="fas fa-heart"></i></span>
                                <span><i class="fas fa-comment-dots"></i></span>
                                <span><i class="fas fa-share-alt"></i></span>
                            </div>
                            <div class="book-mark">
                                <span><i class="fas fa-bookmark"></i></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="images/profile-12.jpg"></span>
                            <span><img src="images/profile-10.jpg"></span>
                            <span><img src="images/profile-11.jpg"></span>
                            <p>Liked by <b> Jack Smith</b> and <b>2,000 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Argawal</b>No young man no matter how great can know his destiny<span class="hashtag"> #Merlin</span></p>
                        </div>
                        <div class="comments text-muted">View all 1220 comments</div>
                    </div>
                    <!--FIFTH FEED-->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="images/profile-17.jpg" alt="">
                                </div>
                                <div class="info">
                                    <h3>Lara Isaac</h3>
                                    <small>Takoradi, 15 HOURS AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis"></i>Edit
                            </span>
                        </div>
                        <div class="picture">
                            <img src="images/feed-5.jpg" alt="">
                        </div>
                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="fas fa-heart"></i></span>
                                <span><i class="fas fa-comment-dots"></i></span>
                                <span><i class="fas fa-share-alt"></i></span>
                            </div>
                            <div class="book-mark">
                                <span><i class="fas fa-bookmark"></i></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="images/profile-10.jpg"></span>
                            <span><img src="images/profile-4.jpg"></span>
                            <span><img src="images/profile-15.jpg"></span>
                            <p>Liked by <b> Ernest Achiever</b> and <b>2,523 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Lana Rose</b>yh, I sawitcoming along way, by the good luck!<span class="hashtag">freelifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 277 comments</div>
                      </div>
                    <!--SIXTH FEED-->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="images/profile-17.jpg" alt="">
                                </div>
                                <div class="info">
                                    <h3>Nuru Kambari</h3>
                                    <small>Otibi, 1 DAY AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis"></i>Edit
                            </span>
                        </div>
                        <div class="picture">
                            <img src="images/feed-6.jpg" alt="">
                        </div>
                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="fas fa-heart"></i></span>
                                <span><i class="fas fa-comment-dots"></i></span>
                                <span><i class="fas fa-share-alt"></i></span>
                            </div>
                            <div class="book-mark">
                                <span><i class="fas fa-bookmark"></i></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="images/profile-10.jpg"></span>
                            <span><img src="images/profile-4.jpg"></span>
                            <span><img src="images/profile-15.jpg"></span>
                            <p>Liked by <b> Ernest Smith</b> and <b>2,523 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Lana Rose</b>yh, I sawitcoming along way, by the good luck!<span class="hashtag">freelifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 277 comments</div>
                    </div>
                    <!--SEVENTH FEED-->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-picture">
                                    <img src="images/profile-13.jpg" alt="">
                                </div>
                                <div class="info">
                                    <h3>Pep Kambari</h3>
                                    <small>Techiman, 2 DAYS AGO</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="fas fa-ellipsis"></i>Edit
                            </span>
                        </div>
                        <div class="picture">
                            <img src="images/feed-7.jpg" alt="">
                        </div>
                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="fas fa-heart"></i></span>
                                <span><i class="fas fa-comment-dots"></i></span>
                                <span><i class="fas fa-share-alt"></i></span>
                            </div>
                            <div class="book-mark">
                                <span><i class="fas fa-bookmark"></i></span>
                            </div>
                        </div>
                        <div class="liked-by">
                            <span><img src="images/profile-10.jpg"></span>
                            <span><img src="images/profile-4.jpg"></span>
                            <span><img src="images/profile-15.jpg"></span>
                            <p>Liked by <b> Ernest Achiever</b> and <b>2,523 others</b></p>
                        </div>
                        <div class="caption">
                            <p><b>Lana Rose</b>yh, I sawitcoming along way, by the good luck!<span class="hashtag">freelifestyle</span></p>
                        </div>
                        <div class="comments text-muted">View all 277 comments</div>
                    </div>
                    <!--END OF  HEAD-->
                </div>
                <!--END OF  FEEDS-->
            </div>
            <!--END OF MIDDLE-->


            <!--RIGHT-->
            <div class="right">
                <div class="messages">
                    <div class="heading">
                        <h4>Messages</h4><i class="fas fa-edit"></i>
                    </div>
                    <!--SEARCH BAR-->
                    <div class="search-bar">
                        <i class="fas fa-search"></i>
                        <input type="search" placeholder="search messages" id="message-search">
                    </div>
                    <!--MESSAGE CATEGORY-->
                    <div class="category">
                        <h6 class="active">Primary</h6>
                        <h6>General</h6>
                        <h6 class="message-requests">Requests(7)</h6>
                    </div>
                    <!--MESSAGE-->
                     <!--MESSAGE-->
                     <div class="message">
                        <div class="profile-picture">
                            <img src="images/profile-7.jpg" alt="">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Isaac Gilbert</h5>
                            <p class="text-muted">Happy birthday bruh</p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="images/profile-8.jpg" alt="">
                        </div>
                        <div class="message-body">
                            <h5>Mark Zucker</h5>
                            <p class="text-muted">See you there</p>
                        </div>
                    </div>
                     <!--MESSAGE-->
                     <div class="message">
                        <div class="profile-picture">
                            <img src="images/profile-18.jpg" alt="">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Prince Arthur</h5>
                            <p class="text-muted">The king must be saved</p>
                        </div>
                    </div>
                     <!--MESSAGE-->
                     <div class="message">
                        <div class="profile-picture">
                            <img src="images/profile-19.jpg" alt="">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Merlin Emryts</h5>
                            <p class="text-muted">The boy is magical</p>
                        </div>
                    </div>
                                         <!--MESSAGE-->
                     <div class="message">
                        <div class="profile-picture">
                            <img src="images/profile-20.jpg" alt="">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Legolas Gimli</h5>
                            <p class="text-muted">My bow and my axe</p>
                        </div>
                    </div>
                     <!--MESSAGE-->
                     <div class="message">
                        <div class="profile-picture">
                            <img src="images/profile-5.jpg" alt="">
                        </div>
                        <div class="message-body">
                            <h5>Bilbo Baggins</h5>
                            <p class="text-muted">What an Adventure!</p>
                        </div>
                    </div>
                     <!--MESSAGE-->
                     <div class="message">
                        <div class="profile-picture">
                            <img src="images/profile-9.jpg" alt="">
                        </div>
                        <div class="message-body">
                            <h5>Frodo Baggins</h5>
                            <p class="text-muted">I must destroy the ring</p>
                        </div>
                    </div>
                </div>
                <!--END OF MESSAGE-->
                <div class="friend-requests">
                    <h4>Resquest</h4>
                    <!--REQUEST 1-->
                    <div class="request">
                        <div class="info">
                            <div class="profile-picture">
                                <img src="images/profile-13.jpg" alt="">
                            </div>
                            <div>
                                <h5>Hajia Bintu</h5>
                                <p class="text-muted">1 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn">Decline</button>
                        </div>
                    </div>
                      <!--REQUEST 2-->
                      <div class="request">
                        <div class="info">
                            <div class="profile-picture">
                                <img src="images/profile-19.jpg" alt="">
                            </div>
                            <div>
                                <h5>Samwise Gamgee</h5>
                                <p class="text-muted">8 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn">Decline</button>
                        </div>
                    </div>
                      <!--REQUEST 3-->
                      <div class="request">
                        <div class="info">
                            <div class="profile-picture">
                                <img src="images/profile-18.jpg" alt="">
                            </div>
                            <div>
                                <h5>Jason Stathom</h5>
                                <p class="text-muted">12 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary">Accept</button>
                            <button class="btn">Decline</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--END OF RIGHT-->
        </div>
    </main>

    <!--THEME CUSTOMIZATION-->
    <div class="customize-theme">
        <div class="card">
            <h2>Customize your view</h2>
            <p class="text-muted">Manage your font size, color, and background</p>
            <!--FONT SIZE-->
            <div class="font-size">
                <h4>Font Size</h4>
                <div>
                    <h6>Aa</h6>
                <div class="choose-size">
                    <span class="font-size-1"></span>
                    <span class="font-size-2 active"></span>
                    <span class="font-size-3"></span>
                    <span class="font-size-4"></span>
                    <span class="font-size-5"></span>
                </div>
                <h3>Aa</h3>
                </div>
            </div>
             <!--PRIMARY COLOR-->
            <div class="color">
                <h4>Color</h4>
                <div class="choose-color">
                    <span class="color-1 active"></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>

            <!--BACKGROUND COLOR-->
            <div class="background">
                <h4>Background</h4>
                    <div class="choose-bg">
                        <div class="bg-1">
                            <span></span>
                            <h5 class="bg-one">Light</h5>
                        </div>
                        <div class="bg-2">
                            <span></span>
                            <h5>Dim</h5>
                        </div>
                        <div class="bg-3">
                            <span></span>
                            <h5 class="bg-3">Dark</h5>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
