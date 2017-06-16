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
              </div>


          </aside>



                    <div id="notes-takingpage">
                    <!-- Note taking show/hide bar -->
                    <input type="checkbox" id="toggle-app-sidebar" class="site-control">
                    <header id="app-header" >
                        <label for="toggle-app-sidebar" class="fa fa-arrow-circle-right"></label>
                    </header>
                    <aside id="app-sidebar">
                        <header id="app-sidebar-header">
                            <div class="flex-space"></div>
                            <label for="toggle-app-sidebar" class="fa fa-close"></label>
                        </header>


                        <?php foreach ($notes->result_array() as $note): ?>
                            <a href="<?=site_url("notes/view_note/{$note['note_content']}")?>"><?=$note['note_title']?></a>
                            <h3><?=$note['note_content'] ?> </h3>
                            <br>
                            <br>
                        <?php endforeach; ?>

                    </aside>






                    <main id="maincontainer">






                    <script type="text/javascript" src="js/app.js"></script>
                        <!-- note taking area -->
                    <div id="notetaking">

                    <?=form_open ('notes/do_add_notes'); ?>

                            <div id="titleoptions">
                                <label>Title : </label>
                                <?=form_input ($form['n_title']); ?>
                            <br>
                            </div>

                            <div id="content">
                                <?=form_input ($form['n_content']); ?>
                            </div>

                            <!-- <textarea  rows="10" cols="50" name="content"> </textarea> -->
                            <br>
                            <div id ="savenote">
                                <?=form_submit (null, 'Save');?>
                            </div>
                            <?=form_close (); ?>
                        </div>
                        </div>
</main>
<aside id="right-container"></aside>

    </div>
