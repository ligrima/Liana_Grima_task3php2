
<div id="site-container">
       <aside id="left-container">
           <p id="subjects">Subjects</p>
           <hr id="subjects-line">
           <div id="newsubjectmenu">

               <button class="accordion">Unit 1</button>
               <div class="panel">
                   <p id="lesson">
                       <a href="http://www.w3schools.com" id="lessonhref">Lesson 1</a>
                   </p>
                   <p id="lesson">
                       <a href="http://www.w3schools.com" id="lessonhref">Lesson 2</a>
                   </p>
               </div>

               <button class="accordion">Unit 2</button>
               <div class="panel">
                   <p id="lesson">
                       <a href="http://www.w3schools.com" id="lessonhref">Lesson 1</a>
                   </p>
                   <p id="lesson">
                       <a href="http://www.w3schools.com" id="lessonhref">Lesson 2</a>
                   </p>
               </div>

               <button class="accordion">Unit 3</button>
               <div class="panel">
                   <p id="lesson">
                       <a href="http://www.w3schools.com" id="lessonhref">Lesson 1</a>
                   </p>
                   <p id="lesson">
                       <a href="http://www.w3schools.com" id="lessonhref">Lesson 2</a>
                   </p>
               </div>

               <button class="accordion">Unit 4</button>
               <div class="panel">
                   <p id="lesson">
                       <a href="http://www.w3schools.com" id="lessonhref">Lesson 1</a>
                   </p>
                   <p id="lesson">
                       <a href="http://www.w3schools.com" id="lessonhref">Lesson 2</a>
                   </p>
               </div>



           </div>


           <div id="newsubjectdiv">
               <button type="submit" id="newsubject">
               New
               </button>
           </div>


       </aside>






<main id="maincontainer">


<form action="notes.php" method="post" id="notetaking">

<input id=" "type="text" name="title" value="">
<br>
<textarea rows="10" cols="50" name="content"></textarea>
<br>
<button type="submit" id="savenote">Save</button>

<input type="hidden" name="note_id" value="">

</form>
</main>
<aside id="right-container"></aside>
   </div>
