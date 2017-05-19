

     <main id="web-content-contact">
         <p id="titlepage-register">Contact</p>
         <hr id="register-line">

         <div id="contact-content">
             <div id="contact-left">
                 <p>Messages</p>
                 <hr>

                 <div id="inboxmessage">
                     <h1>Maria</h1>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                 </div>
             </div>

             <div id="contact-right">
                     <form action="contactform.php" method="get">

                         <div id="sendto-subject">

                             <div id ="sendto">
                                <label for="contactname">Send to:</label>
                                 <input type="text" id="contactname" placeholder="Contact Name" required>
                             </div>






                             <div id="subject">
                                 <label for="inputsubject">Subject:</label>
                                 <input type="text" id="inputsubject" placeholder="Add a Subject">
                             </div>
                         </div>

                         <textarea id="writemessage" placeholder="Compose Message..."></textarea>

                         <div id="extra">








<input type="file" name="files[]" multiple="">





                             <button type="submit" id="discardmsg">Discard</button>

                             <button type="submit" id="sendmsg">Send</button>
                         </div>


                     </form>

             </div>
         </div>
     </main>
