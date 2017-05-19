<?php
    include 'functions.php';

    $note_id = $_GET['n'];
    $note = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $note_id = $_POST['note_id'];

        if ($note_id == NULL) {
            $note_id = create_note ($_COOKIE['user_id'], $title);
        } else {
            update_note ($_COOKIE['user_id'], $note_id, $title);
        }

        save_note_to_disk ($note_id, $content);

        redirect ("notes.php?n={$note_id}");

    } else {
        $note = load_note ($_COOKIE['user_id'], $note_id);
        $note['content'] = load_note_from_disk ($note_id);
    }
?>



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

<input id=" "type="text" name="title" value="<?php if ($note != NULL) echo $note['note_title']?>">
<br>
<textarea rows="10" cols="50" name="content"><?php if ($note != NULL) echo $note['content']?></textarea>
<br>
<button type="submit" id="savenote">Save</button>
<?php if ($note != NULL): ?>
<input type="hidden" name="note_id" value="<?=$note_id?>">
<?php endif; ?>
</form>
</main>
<aside id="right-container"></aside>
   </div>
