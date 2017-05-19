
   <div id="titlenews">
       <p id="titlepage-news">Newsfeed</p>
       <hr id="news-line">
   </div>

   <main id="news-content">
       <div id="post-a-post">
           <form id="questionform" action="news.php" method="get">
           <input type="comment" placeholder = "Write your comment here">

            <button type="submit" id="post">Post</button>
       </form>

       </div>
       <div id="todo-list">
           <div class="news-todo">
               <h1>Today</h1>
               <a href="calendar.php">Calendar</a>
               <hr>
           </div>
           <div id="todonews">
               <img src="images/todo.png" alt="to-do">
               <div id="unit-timenews">
                    <h1>Unit</h1>
                    <p>Time</p>
               </div>
           </div>
       </div>
       <div id="posts-posted">


           <!-- COMMENT 1 -->
           <a href="news.php">
               <img class="user-image" src="images/bean.png" alt="logo">
           </a>

           <div id="post">
               <span id="username">Mr. Grima</span>
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <span id="unit">PHP</span>


               <p id="postcomment">I might be a little late! Wait for me near the classroom. Thank you.</p>


               <div id="likes-comments">
                    <i class="fa fa-heart-o likesystem" aria-hidden="true"></i>
                   <span id="like">2 persons likes this</span>
                   <span id="date-time">24/11/16 at 11:20</span>
                   <hr id="comments-line">

                   <form id="postmessage" action="news.php" method="get">
                       <input id="input-question" type="Name" placeholder = "Write a comment">
                   </form>

               </div>
           </div>


       </div>

   </main>
