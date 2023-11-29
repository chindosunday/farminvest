
@include('pages.header')


      <main>
        <div class="main-section">
          <div class="container">
            <div class="main-section-data">
              <div class="row">
                <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                  <div class="main-left-sidebar no-margin">
                    <!--user-data end-->
                    <div class="suggestions full-width d-none d-sm-block">
                      <div class="sd-title">
                        <h3>Suggestions</h3>
                        <i class="la la-ellipsis-v"></i>
                      </div>
                      <!--sd-title end-->
                      <div class="suggestions-list">
                        <div class="suggestion-usd">
                          <img src="./index_files/s1.png" alt="" />
                          <div class="sgt-text">
                            <h4>Jessica William</h4>
                            <span>Graphic Designer</span>
                          </div>
                          <span><i class="la la-plus"></i></span>
                        </div>
                        <div class="suggestion-usd">
                          <img src="./index_files/s2.png" alt="" />
                          <div class="sgt-text">
                            <h4>John Doe</h4>
                            <span>PHP Developer</span>
                          </div>
                          <span><i class="la la-plus"></i></span>
                        </div>
                        <div class="suggestion-usd">
                          <img src="./index_files/s3.png" alt="" />
                          <div class="sgt-text">
                            <h4>Poonam</h4>
                            <span>Wordpress Developer</span>
                          </div>
                          <span><i class="la la-plus"></i></span>
                        </div>

                        <div class="view-more">
                          <a href="" title="">View More</a>
                        </div>
                      </div>
                      <!--suggestions-list end-->
                    </div>
                    <!--suggestions end-->
                    <div class="tags-sec full-width d-none d-sm-block">
                      <ul>
                        <li>
                          <a href="" title="">Help Center</a>
                        </li>
                        <li>
                          <a href="" title="">About</a>
                        </li>
                        <li>
                          <a href="" title="">Privacy Policy</a>
                        </li>
                        <li>
                          <a href="" title="">Community Guidelines</a>
                        </li>
                        <li>
                          <a href="" title="">Cookies Policy</a>
                        </li>
                        <li>
                          <a href="" title="">Career</a>
                        </li>
                        <li>
                          <a href="" title="">Language</a>
                        </li>
                        <li>
                          <a href="" title="">Copyright Policy</a>
                        </li>
                      </ul>
                      <div class="cp-sec">
                        <!-- <img src="./index_files/logo2.png" alt="" /> -->
                        <p>
                          <img src="./index_files/cp.png" alt="" />Copyright
                          2019
                        </p>
                      </div>
                    </div>
                    <!--tags-sec end-->
                  </div>
                  <!--main-left-sidebar end-->
                </div>
                <div class="col-lg-6 col-md-8 no-pd">
                  <div class="main-ws-sec">
                    <div class="post-topbar">
                      <div class="user-picy">
                        <img src="./index_files/user-pic.png" />
                      </div>
                      <!-- ============ post-topbar input ===========-->
                        <form action="">
                      <form action="" class="create-post">
                        <div class="create-post-input">
                          <textarea
                            rows="2"
                            placeholder="Write a post "
                          ></textarea>
                        </div>
                        <div class="create-post-links">
                          <li><img src="images/photo.png" /> Photo</li>
                          <li><img src="images/video.png" />Video</li>
                          <li><img src="images/event.png" />Event</li>
                          <li><button style="width: 100%; background-color:green; color:#fff; border:0; outline:none" >Post</button></li>
                        </div>
                      </form>
                    </div>
                    <!--post-st end-->

                    <!--post-topbar end-->
                    <div class="posts-section">
                      <!-- posts and stories -->

                      <!--post-bar end-->
                      @if($posts->count())

                        @foreach ($posts as $post)
                          
                        <div class="posty">
                          <div class="post-bar no-margin">
                            <div class="post_topbar">
                              <div class="usy-dt">
                                <img src="./index_files/us-pc2.png" alt="" />
                                <div class="usy-name">
                                  <h3>{{ $post->user->fname . " " .  $post->user->lname}} </h3>
                                  <span
                                    ><img src="./index_files/clock.png" alt="" />{{ $post->created_at->diffForHumans() }}
                                </span
                                  >
                                </div>
                              </div>
                              <div class="ed-opts">
                                <a href="" title="" class="ed-opts-open"
                                  ><i class="la la-ellipsis-v"></i
                                ></a>
                                <ul class="ed-options">
                                  <li>
                                    <a href="" title="">Edit Post</a>
                                  </li>
                                  <li>
                                    <a href="" title="">Unsaved</a>
                                  </li>
                                  <li>
                                    <a href="" title="">Unbid</a>
                                  </li>
                                  <li>
                                    <a href="" title="">Close</a>
                                  </li>
                                  <li>
                                    <a href="" title="">Hide</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div class="epi-sec">
                              <ul class="descp">
                                <li>
                                  <img
                                    src="./index_files/icon8.png"
                                    alt=""
                                  /><span>Epic Coder</span>
                                </li>
                                <li>
                                  <img
                                    src="./index_files/icon9.png"
                                    alt=""
                                  /><span>India</span>
                                </li>
                              </ul>
                            </div>
                            <div class="job_descp">
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Aliquam luctus hendrerit metus, ut
                                ullamcorper quam finibus at. Etiam id magna sit
                                amet...
                                <a href="" title="">view more</a>
                              </p>
                              <ul class="skill-tags">
                                <li>
                                  <a href="" title="">HTML</a>
                                </li>
                                <li>
                                  <a href="" title="">PHP</a>
                                </li>
                                <li>
                                  <a href="" title="">CSS</a>
                                </li>
                                <li>
                                  <a href="" title="">Javascript</a>
                                </li>
                                <li>
                                  <a href="" title="">Wordpress</a>
                                </li>
                              </ul>
                            </div>
                            <div class="job-status-bar">
                              <ul class="like-com">
                                <li>
                                  <a href=""><i class="fas fa-heart"></i> Like</a>
                                  <img src="./index_files/liked-img.png" alt="" />
                                  <span>25</span>
                                </li>
                                <li>
                                  <a href="" class="com"
                                    ><i class="fas fa-comment-alt"></i> Comment
                                    15</a
                                  >
                                </li>
                              </ul>
                              <a href=""><i class="fas fa-eye"></i>Views 50</a>
                            </div>
                          </div>
                          <!--post-bar end-->
                          <div class="comment-section">
                            <a href="" class="plus-ic">
                              <i class="la la-plus"></i>
                            </a>
                            <div class="comment-sec">
                              <ul>
                                <li>
                                  <div class="comment-list">
                                    <div class="bg-img">
                                      <img
                                        src="./index_files/bg-img1.png"
                                        alt=""
                                      />
                                    </div>
                                    <div class="comment">
                                      <h3>{{ $post->user->fname . " " .  $post->user->lname}} </h3>
                                      <span
                                        ><img
                                          src="./index_files/clock.png"
                                          alt=""
                                        />
                                        3 min ago</span
                                      >
                                      <p>Lorem ipsum dolor sit amet,</p>
                                      <a href="" title="" class="active"
                                        ><i class="fa fa-reply-all"></i>Reply</a
                                      >
                                    </div>
                                  </div>
                                  <!--comment-list end-->
                                  <ul>
                                    <li>
                                      <div class="comment-list">
                                        <div class="bg-img">
                                          <img
                                            src="./index_files/bg-img2.png"
                                            alt=""
                                          />
                                        </div>
                                        <div class="comment">
                                          <h3>{{ $post->user->fname . " " .  $post->user->lname}} </h3>
                                          <span
                                            ><img
                                              src="./index_files/clock.png"
                                              alt=""
                                            />
                                            3 min ago</span
                                          >
                                          <p>Hi John</p>
                                          <a href="" title=""
                                            ><i class="fa fa-reply-all"></i
                                            >Reply</a
                                          >
                                        </div>
                                      </div>
                                      <!--comment-list end-->
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <div class="comment-list">
                                    <div class="bg-img">
                                      <img
                                        src="./index_files/bg-img3.png"
                                        alt=""
                                      />
                                    </div>
                                    <div class="comment">
                                      <h3>{{ $post->user->fname . " " .  $post->user->lname}} </h3>
                                      <span
                                        ><img
                                          src="./index_files/clock.png"
                                          alt=""
                                        />
                                        3 min ago</span
                                      >
                                      <p>
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Aliquam luctus hendrerit
                                        metus, ut ullamcorper quam finibus at.
                                      </p>
                                      <a href="" title=""
                                        ><i class="fa fa-reply-all"></i>Reply</a
                                      >
                                    </div>
                                  </div>
                                  <!--comment-list end-->
                                </li>
                              </ul>
                            </div>
                            <!--comment-sec end-->
                            <div class="post-comment">
                              <div class="cm_img">
                                <img src="./index_files/bg-img4.png" alt="" />
                              </div>
                              <div class="comment_box">
                                <form>
                                  <input
                                    type="text"
                                    placeholder="Post a comment"
                                  />
                                  <button type="submit">Send</button>
                                </form>
                              </div>
                            </div>
                            <!--post-comment end-->
                          </div>
                          <!--comment-section end-->
                        </div>

                        @endforeach


                      @endif
                    
                      <!--posty end-->
                      <div class="process-comm">
                        <div class="spinner">
                          <div class="bounce1"></div>
                          <div class="bounce2"></div>
                          <div class="bounce3"></div>
                        </div>
                      </div>
                      <!--process-comm end-->
                    </div>
                    <!--posts-section end-->
                  </div>
                  <!--main-ws-sec end-->
                </div>
                <div class="col-lg-3 pd-right-none no-pd">
                  <div class="right-sidebar">
                    <div class="widget widget-about">
                      <!-- <img src="./index_files/wd-logo.png" alt="" /> -->
                      <h3>Track Time on Workwise</h3>
                      <span>Pay only for the Hours worked</span>
                      <div class="sign_link">
                        <h3>
                          <a
                            href="https://gambolthemes.net/workwise-new/sign-in.html"
                            title=""
                            >Sign up</a
                          >
                        </h3>
                        <a href="" title="">Learn More</a>
                      </div>
                    </div>
                    <!--widget-about end-->
                    <div class="widget widget-jobs">
                      <div class="sd-title">
                        <h3>Weather News</h3>
                        <i class="la la-ellipsis-v"></i>
                      </div>
                      <div class="jobs-list">
                        <!--job-info end-->
                        <div class="job-info">
                          <div class="job-details">
                            <h3>Senior Developer Designer</h3>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing
                              elit..
                            </p>
                          </div>
                          <div class="hr-rate">
                            <span>$25/hr</span>
                          </div>
                        </div>
                        <!--job-info end-->
                      </div>
                      <!--jobs-list end-->
                    </div>
                  </div>
                  <!--right-sidebar end-->
                </div>
              </div>
            </div>
            <!-- main-section-data end-->
          </div>
        </div>
      </main>


          <a href="" title=""><i class="la la-times-circle-o"></i></a>
        </div>
        <!--post-project end-->
      </div>
      <!--post-project-popup end-->

      <div class="chatbox-list" style="right: 89.5px">
        <div class="chatbox">
          <div class="chat-mg">
            <a href="" title=""
              ><img src="./index_files/usr-img1.png" alt=""
            /></a>
            <span>2</span>
          </div>
          <div class="conversation-box">
            <div class="con-title mg-3">
              <div class="chat-user-info">
                <img src="./index_files/us-img1.png" alt="" />
                <h3>John Doe <span class="status-info"></span></h3>
              </div>
              <div class="st-icons">
                <a href="" title=""><i class="la la-cog"></i></a>
                <a href="" title="" class="close-chat"
                  ><i class="la la-minus-square"></i
                ></a>
                <a href="" title="" class="close-chat"
                  ><i class="la la-close"></i
                ></a>
              </div>
            </div>
            <div
              class="chat-hist mCustomScrollbar _mCS_1"
              data-mcs-theme="dark"
            >
              <div
                id="mCSB_1"
                class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside"
                style="max-height: none"
                tabindex="0"
              >
                <div
                  id="mCSB_1_container"
                  class="mCSB_container"
                  style="position: relative; top: 0; left: 0"
                  dir="ltr"
                >
                  <div class="chat-msg">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Donec rutrum congue leo eget malesuada. Vivamus suscipit
                      tortor eget felis porttitor.
                    </p>
                    <span>Sat, Aug 23, 1:10 PM</span>
                  </div>
                  <div class="date-nd">
                    <span>Sunday, August 24</span>
                  </div>
                  <div class="chat-msg st2">
                    <p>Cras ultricies ligula.</p>
                    <span>5 minutes ago</span>
                  </div>
                  <div class="chat-msg">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Donec rutrum congue leo eget malesuada. Vivamus suscipit
                      tortor eget felis porttitor.
                    </p>
                    <span>Sat, Aug 23, 1:10 PM</span>
                  </div>
                </div>
                <div
                  id="mCSB_1_scrollbar_vertical"
                  class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark mCSB_scrollTools_vertical"
                  style="display: block"
                >
                  <div class="mCSB_draggerContainer">
                    <div
                      id="mCSB_1_dragger_vertical"
                      class="mCSB_dragger"
                      style="
                        position: absolute;
                        min-height: 30px;
                        display: block;
                        height: 198px;
                        max-height: 270px;
                        top: 0px;
                      "
                    >
                      <div
                        class="mCSB_dragger_bar"
                        style="line-height: 30px"
                      ></div>
                    </div>
                    <div class="mCSB_draggerRail"></div>
                  </div>
                </div>
              </div>
            </div>
            <!--chat-list end-->
            <div class="typing-msg">
              <form>
                <textarea placeholder="Type a message here"></textarea>
                <button type="submit"><i class="fa fa-send"></i></button>
              </form>
              <ul class="ft-options">
                <li>
                  <a href="" title=""><i class="la la-smile-o"></i></a>
                </li>
                <li>
                  <a href="" title=""><i class="la la-camera"></i></a>
                </li>
                <li>
                  <a href="" title=""><i class="fa fa-paperclip"></i></a>
                </li>
              </ul>
            </div>
            <!--typing-msg end-->
          </div>
          <!--chat-history end-->
        </div>
        <div class="chatbox">
          <div class="chat-mg">
            <a href="" title=""
              ><img src="./index_files/usr-img2.png" alt=""
            /></a>
          </div>
          <div class="conversation-box">
            <div class="con-title mg-3">
              <div class="chat-user-info">
                <img src="./index_files/us-img1.png" alt="" />
                <h3>John Doe <span class="status-info"></span></h3>
              </div>
              <div class="st-icons">
                <a href="" title=""><i class="la la-cog"></i></a>
                <a href="" title="" class="close-chat"
                  ><i class="la la-minus-square"></i
                ></a>
                <a href="" title="" class="close-chat"
                  ><i class="la la-close"></i
                ></a>
              </div>
            </div>
            <div
              class="chat-hist mCustomScrollbar _mCS_2"
              data-mcs-theme="dark"
            >
              <div
                id="mCSB_2"
                class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside"
                tabindex="0"
                style="max-height: none"
              >
                <div
                  id="mCSB_2_container"
                  class="mCSB_container"
                  style="position: relative; top: 0; left: 0"
                  dir="ltr"
                >
                  <div class="chat-msg">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Donec rutrum congue leo eget malesuada. Vivamus suscipit
                      tortor eget felis porttitor.
                    </p>
                    <span>Sat, Aug 23, 1:10 PM</span>
                  </div>
                  <div class="date-nd">
                    <span>Sunday, August 24</span>
                  </div>
                  <div class="chat-msg st2">
                    <p>Cras ultricies ligula.</p>
                    <span>5 minutes ago</span>
                  </div>
                  <div class="chat-msg">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Donec rutrum congue leo eget malesuada. Vivamus suscipit
                      tortor eget felis porttitor.
                    </p>
                    <span>Sat, Aug 23, 1:10 PM</span>
                  </div>
                </div>
                <div
                  id="mCSB_2_scrollbar_vertical"
                  class="mCSB_scrollTools mCSB_2_scrollbar mCS-dark mCSB_scrollTools_vertical"
                  style="display: block"
                >
                  <div class="mCSB_draggerContainer">
                    <div
                      id="mCSB_2_dragger_vertical"
                      class="mCSB_dragger"
                      style="
                        position: absolute;
                        min-height: 30px;
                        display: block;
                        height: 198px;
                        max-height: 270px;
                        top: 0px;
                      "
                    >
                      <div
                        class="mCSB_dragger_bar"
                        style="line-height: 30px"
                      ></div>
                    </div>
                    <div class="mCSB_draggerRail"></div>
                  </div>
                </div>
              </div>
            </div>
            <!--chat-list end-->
            <div class="typing-msg">
              <form>
                <textarea placeholder="Type a message here"></textarea>
                <button type="submit"><i class="fa fa-send"></i></button>
              </form>
              <ul class="ft-options">
                <li>
                  <a href="" title=""><i class="la la-smile-o"></i></a>
                </li>
                <li>
                  <a href="" title=""><i class="la la-camera"></i></a>
                </li>
                <li>
                  <a href="" title=""><i class="fa fa-paperclip"></i></a>
                </li>
              </ul>
            </div>
            <!--typing-msg end-->
          </div>
          <!--chat-history end-->
        </div>
        <div class="chatbox">
          <div class="chat-mg bx">
            <a href="" title=""><img src="./index_files/chat.png" alt="" /></a>
            <span>2</span>
          </div>
          <div class="conversation-box">
            <div class="con-title">
              <h3>Messages</h3>
              <a href="" title="" class="close-chat"
                ><i class="la la-minus-square"></i
              ></a>
            </div>
            <div class="chat-list">
              <div class="conv-list active">
                <div class="usrr-pic">
                  <img src="./index_files/usy1.png" alt="" />
                  <span class="active-status activee"></span>
                </div>
                <div class="usy-info">
                  <h3>John Doe</h3>
                  <span
                    >Lorem ipsum dolor
                    <img src="./index_files/smley.png" alt=""
                  /></span>
                </div>
                <div class="ct-time">
                  <span>1:55 PM</span>
                </div>
                <span class="msg-numbers">2</span>
              </div>
              <div class="conv-list">
                <div class="usrr-pic">
                  <img src="./index_files/usy2.png" alt="" />
                </div>
                <div class="usy-info">
                  <h3>John Doe</h3>
                  <span
                    >Lorem ipsum dolor
                    <img src="./index_files/smley.png" alt=""
                  /></span>
                </div>
                <div class="ct-time">
                  <span>11:39 PM</span>
                </div>
              </div>
              <div class="conv-list">
                <div class="usrr-pic">
                  <img src="./index_files/usy3.png" alt="" />
                </div>
                <div class="usy-info">
                  <h3>John Doe</h3>
                  <span
                    >Lorem ipsum dolor
                    <img src="./index_files/smley.png" alt=""
                  /></span>
                </div>
                <div class="ct-time">
                  <span>0.28 AM</span>
                </div>
              </div>
            </div>
            <!--chat-list end-->
          </div>
          <!--conversation-box end-->
        </div>
      </div>
      <!--chatbox-list end-->
    </div>
    <!--theme-layout end-->

    <script
      type="text/javascript"
      src="./index_files/jquery.min.js.download"
    ></script>
    <script
      type="text/javascript"
      src="./index_files/popper.js.download"
    ></script>
    <script
      type="text/javascript"
      src="./index_files/bootstrap.min.js.download"
    ></script>
    <script
      type="text/javascript"
      src="./index_files/jquery.mCustomScrollbar.js.download"
    ></script>
    <script
      type="text/javascript"
      src="./index_files/slick.min.js.download"
    ></script>
    <script
      type="text/javascript"
      src="./index_files/scrollbar.js.download"
    ></script>
    <script
      type="text/javascript"
      src="./index_files/script.js.download"
    ></script>

    <div id="torrent-scanner-popup" style="display: none">
      <template shadowrootmode="open"
        ><link
          rel="stylesheet"
          href="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/css/custom.css"
        />
        <div id="yf-bt-wrapper" class="free">
          <div class="header">
            <img
              class="sts-logo"
              src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/ts-free-logo.png"
            />
            <div class="search-content">
              <input
                id="search-input"
                class="search-input"
                type="search"
                placeholder="Start your search here..."
              /><span id="search-btn" class="search-btn"></span>
            </div>
          </div>
          <div class="container">
            <div class="main-container">
              <div id="torrent-data" class="torrent-content">
                <div class="t-table">
                  <div class="t-header">
                    <div class="t-name">Torrent search results</div>
                  </div>
                  <div id="checked-sites" class="checked-sites-section">
                    <div class="left">Checked Sites</div>
                    <div class="right">
                      <span id="sites-count" class="sites-count">0</span>
                    </div>
                  </div>
                  <div id="table-body" class="t-body">
                    <div id="loading" class="spinner">
                      <div class="bounce1"></div>
                      <div class="bounce2"></div>
                      <div class="bounce3"></div>
                    </div>
                    <div class="table-message-container" id="table-message">
                      <p>
                        No items to list <br />
                        Use the search bar above for instant results
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tooltip">
                <p class="tooltip-text">
                  To see search results, type here and hit `Enter`
                </p>
              </div>
              <div class="footer">
                <span
                  ><span id="numberScanned" class="numberScanned"
                    >No results</span
                  ></span
                >
              </div>
              <div class="upgradeProPanel">
                <div class="upgradeProPanelTitle">
                  Try our Pro Versions to unlock:
                </div>
                <div class="upgradeProPanelList">
                  <div><p>Faster Results</p></div>
                  <div><p>Secure Torrenting</p></div>
                  <div>
                    <p>Unlimited Search Results with detailed torrent info</p>
                  </div>
                  <div>
                    <p>
                      1-YR Subscription to CyberGhost VPN
                      <span style="font-size: 8px">(PRO+VPN only)</span>
                    </p>
                  </div>
                </div>
                <a
                  class="upgrade-to-pro-button-2"
                  id="buy-pro-vpn"
                  href="https://www.utorrent.com/webpro-offer/?utm_source=Lavasoft&amp;utm_medium=version_1.0&amp;utm_campaign=Scanner"
                  target="_blank"
                  >BUY PRO + VPN</a
                ><a
                  class="upgrade-to-pro-button-2"
                  id="buy-pro"
                  href="https://www.utorrent.com/webpro-offer/?utm_source=Lavasoft&amp;utm_medium=version_1.0&amp;utm_campaign=Scanner"
                  target="_blank"
                  >BUY PRO</a
                >
              </div>
            </div>
            <div class="sync-container nav-se-container">
              <div class="nav-se-content">
                <img
                  class="sync-icon nav-se-icon"
                  src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/icon-sync.svg"
                />
                <div class="nav-se-title">
                  One more step to go before you start torrenting!
                </div>
                <p class="nav-se-text">
                  This extension can sync results with BitTorrent and/or
                  uTorrent for instant downloading.
                </p>
                <p class="nav-se-text">
                  To activate this feature, please click on the button below,
                  and then on the Chrome message to activate the 'Messaging
                  Permission'.
                </p>
                <button class="sync-permission-btn nav-se-btn">
                  Activate Messaging Permission
                </button>
              </div>
              <div class="nav-se-content display-none">
                <img
                  class="sync-icon nav-se-icon"
                  src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/icon-sync.svg"
                />
                <div class="nav-se-title">Syncing...</div>
                <p class="nav-se-text">
                  Please allow Messaging Permissions in the proceeding Chrome
                  message.
                </p>
              </div>
              <div class="nav-se-content display-none">
                <img
                  class="sync-icon nav-se-icon"
                  src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/icon-success.svg"
                />
                <div class="nav-se-title">Sync Complete</div>
                <p class="nav-se-text">
                  You have successfully activated the “Messaging Permission”
                  feature. All your search results will sync with BitTorrent
                  and/or uTorrent.
                </p>
              </div>
            </div>
            <div class="license-container nav-se-container">
              <div class="nav-se-content">
                <img
                  class="nav-se-icon"
                  src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/icon-key2.svg"
                />
                <div class="nav-se-title">Enter License Key</div>
                <p class="nav-se-text">
                  Enter your license key and click on the activate button to
                  start using <span>µTorrent Web Pro.</span>
                </p>
                <input
                  type="text"
                  id="license-input-key"
                  class="license-input-key"
                  placeholder="Enter Key"
                />
                <div class="license-spinner">
                  <div class="bounce1"></div>
                  <div class="bounce2"></div>
                  <div class="bounce3"></div>
                </div>
                <button
                  id="license-activate-button"
                  class="license-activate-button nav-se-btn"
                >
                  Activate
                </button>
                <p>
                  Don't have a license key?
                  <a class="license-buy-link" target="_blank">Click here</a>
                </p>
              </div>
              <div class="nav-se-content display-none">
                <img
                  class="nav-se-icon"
                  src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/icon-success.svg"
                />
                <div class="nav-se-title">Happy Torrenting!</div>
                <p class="nav-se-text">You are now an active PRO user</p>
                <p class="nav-se-text">
                  Your key is valid until <span class="expiry-date"></span>
                </p>
              </div>
              <div class="nav-se-content display-none">
                <img
                  class="nav-se-icon"
                  src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/icon-alert.svg"
                />
                <div class="nav-se-title">Your license key has expired</div>
                <p class="nav-se-text">
                  Looks like your license key has expired, to renew your PRO
                  license key, please select a license type:
                </p>
                <a
                  class="upgrade-to-pro-button-2 buy-license-expiry-button"
                  href="https://www.utorrent.com/webpro-offer/?utm_source=Lavasoft&amp;utm_medium=version_1.0&amp;utm_campaign=Scanner"
                  target="_blank"
                  >Buy Pro + VPN</a
                ><a
                  class="upgrade-to-pro-button-2 buy-license-expiry-button"
                  href="https://www.utorrent.com/webpro-offer/?utm_source=Lavasoft&amp;utm_medium=version_1.0&amp;utm_campaign=Scanner"
                  target="_blank"
                  >Buy Pro</a
                >
                <p class="nav-se-text">
                  Already have a license key?
                  <a class="link" id="show-license-panel">Click here</a>
                </p>
              </div>
              <div class="nav-se-content display-none">
                <img
                  class="nav-se-icon"
                  src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/icon-success.svg"
                />
                <div class="nav-se-title">Pro User</div>
                <p class="nav-se-text">
                  Your key is valid until <span class="expiry-date"></span>
                </p>
                <p class="nav-se-text">Your License Key:</p>
                <p class="nav-se-text"></p>
                <p class="nav-se-text margin-top-50">
                  Switch back to Torrent Scanner Free?
                </p>
                <button class="activate-free-btn nav-se-btn">
                  Revert to Free Version
                </button>
              </div>
            </div>
            <div class="feedback-container nav-se-container">
              <div class="nav-se-content">
                <img
                  class="nav-se-icon"
                  src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/icon-feedback.svg"
                />
                <div class="nav-se-title">Feedback</div>
                <p class="nav-se-text">
                  Help us improve Torrent Scanner, send us comments, bugs,
                  feedback, and suggestions.
                </p>
                <button id="feedback-button" class="feedback-button nav-se-btn">
                  Send Feedback
                </button>
              </div>
            </div>
            <div class="settings-container nav-se-container">
              <div class="nav-se-content">
                <div class="settings-title">Settings</div>
              </div>
              <div class="s-table">
                <div class="s-row">
                  <div class="s-title">
                    FAQ
                    <div class="s-arrow"><span class="arrow-down"></span></div>
                  </div>
                  <div class="s-content faq-content">
                    <p class="faq-text">
                      FAQ:
                      <a
                        href="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/faq.html"
                        target="_blank"
                        >Click here</a
                      >
                    </p>
                  </div>
                </div>
                <div class="s-row">
                  <div class="s-title">
                    Rate the extension
                    <div class="s-arrow"><span class="arrow-down"></span></div>
                  </div>
                  <div class="s-content">
                    <p class="rate-text">
                      How did you like the extension experience?
                    </p>
                    <div class="rating">
                      <span class="rating-star">★</span
                      ><span class="rating-star">★</span
                      ><span class="rating-star">★</span
                      ><span class="rating-star">★</span
                      ><span class="rating-star">★</span>
                    </div>
                    <button class="rating-btn nav-se-btn" disabled="">
                      Submit
                    </button>
                  </div>
                </div>
                <div class="s-row">
                  <div class="s-title">
                    About
                    <div class="s-arrow"><span class="arrow-down"></span></div>
                  </div>
                  <div class="s-content about-content">
                    <div class="about-version">
                      Version 1.3.0 <br /><br />
                      What's New
                    </div>
                    <div class="about-new">
                      <p></p>
                      <ul>
                        <li>
                          Experience a complete new User Interface of the
                          extension. It is enhanced and user friendly now.
                        </li>
                        <li>Squashed some bugs.</li>
                      </ul>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="s-row">
                  <div class="s-title">
                    Privacy Policy
                    <div class="s-arrow"><span class="arrow-down"></span></div>
                  </div>
                  <div class="s-content">
                    <div class="policy-text">
                      Adaware Software (7270356 Canada Inc.) is the operator of
                      the Adaware products suites and related services (the
                      “<b>Company</b>”, ”<b>we</b>” or “<b>us</b>”). We respect
                      your privacy rights and we are committed to protecting
                      them. This privacy policy (“<b>Privacy Policy</b>” or
                      simply “<b>policy</b>”) governs our products, services and
                      websites that link to this Privacy Policy, and describes
                      our practices of processing data from you. By
                      “<b>you</b>”, we refer to either or all of the following:
                      (i) visitors to our websites that links to this Privacy
                      Policy (“<b>Visitor</b>” and “<b>Website</b>”,
                      respectively); (ii) our customers using our software
                      products and Services (“<b>User</b>”); and (c) a business
                      customer, a business partner that has a contractual
                      relationship with us or a prospective customer that is yet
                      to be engaged in a contract with us (“Business Customer”).
                      Unless explicitly mentioned otherwise, the information in
                      this Privacy Policy refers to any and all data subject
                      types (“you” or “your’). <br /><br />
                      For the purpose of this policy, the “<b>Service(s)</b>”
                      shall include any software licensed by the Company,
                      including features offered by or within the installed
                      software or additional software scripts available therein
                      (either downloaded from one of our websites, pre-installed
                      on your device, downloaded through a third party website,
                      obtained on a physical medium, or otherwise), or services
                      provided through and/or on top such software, services
                      offered on our websites, communication forums, support
                      services, account operation, updates, enhancements, new
                      features, premium support, extended guarantees, online
                      version and free versions of a software or additional
                      services or features as we ay make available from time to
                      time. <br /><br />
                      If you are a California resident, please also see our
                      <a href="https://www.adaware.com/CCPA/" target="_blank"
                        >CCPA Notice</a
                      >. <br /><br />
                      <a
                        href="https://www.adaware.com/privacy-policy/"
                        target="_blank"
                        >Read more</a
                      >
                    </div>
                  </div>
                </div>
                <div class="s-row" style="display: none">
                  <div class="s-title">
                    Contact Us
                    <div class="s-arrow"><span class="arrow-down"></span></div>
                  </div>
                  <div class="s-content">
                    <div class="contact-text">
                      For any payment and order-related support, please contact
                      us at Email:
                      <a href="mailto:support@torrentscanner.zendesk.com"
                        >support@torrentscanner.zendesk.com</a
                      >
                      or
                      <a href="mailto:pcsoftwareinfo.com">pcsoftwareinfo.com</a
                      ><br /><br />Phone:
                      <a
                        href="https://pcsoftwareinfo.com/contact.aspx"
                        target="_blank"
                        >Click here</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="nav">
            <button id="btnSync" class="nav-btn">Sync</button
            ><button id="btnLicense" class="nav-btn">License</button
            ><button id="btnHome" class="nav-btn">Home</button
            ><button id="btnFeedback" class="nav-btn">Feedback</button
            ><button id="btnSettings" class="nav-btn">Settings</button>
          </div>
        </div></template
      >
    </div>
    <div
      id="loom-companion-mv3"
      ext-id="liecbddmkiiihnedobmlmillhodjkdmb"
    ></div>
  </body>
</html>
