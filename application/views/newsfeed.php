<div id="titlenews">
    <p id="titlepage-news">Newsfeed</p>
    <hr id="news-line">
</div>

<main id="news-content">
    <div id="post-a-post">
          <!-- <form id="questionform" action="newsfeed.php" method="get"> -->
              <?=form_open ('newsfeed/do_add_posts'); ?>
              <?=form_input ($form['body']); ?>
              <div id="postpost">
                  <?=form_submit (null, 'Submit');?>
              </div>
              <?=form_close (); ?>
              <!-- <input type="Name" placeholder = "Write your question here" id="input-question" class="flex-space">
              <button type="submit" id="button-post">
              <i class="fa fa-paper-plane" aria-hidden="true"></i>
              </button
        </form> -->
    </div>
<!-- END OF ASK QUESTION -->

<!-- comments start from below -->
<!-- SORT BY -->
    <div id="posts-posted">
        <!-- COMMENT 1 -->
        <!-- <div class="post">
            <a href="index.php">
                <img class="user-image" src="<?=base_url('images/user-image.png')?>"alt="logo">
            </a> -->

        <div id="post">
          <br>

          <div id="postcomment">
                <?php foreach($comments as $post) : ?>
                <div id="postsection">
                </h3> Posted by <?php echo $post['user_email']; ?></h3>
                <small id="likes-comments"> Posted on: <?=date('d M Y,H:i', $post['c_date']);?></small>
                <br/>
                <div id="commentcontent">

                <?php echo $post['c_content']; ?>


                </div>
                <br><br><br>
                </div>
                <br>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <div id="todo-list">
        <div class="news-todo">
            <h1>Today</h1>
            <a href="<?=site_url('newcalendar')?>">Calendar</a>
            <hr>
        </div>
        <div id="todonews">


            <img src="<?=base_url('images/todo.png')?>" alt="to-do">
            <div id="unit-timenews">
                 <h1>Unit</h1>
                 <p>Time</p>
            </div>
        </div>
    </div>

</main>
