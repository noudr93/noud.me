<footer class="page-footer deep-orange">
    <div class="container">
        <div class="row">
            <div class="col m4 s12">
                <h5 class="white-text">Help Materialize Grow</h5>
                <p class="grey-text text-lighten-4">We hope you have enjoyed using Materialize! If you feel Materialize has helped you out and want to support the team, send us over a donation! Any amount would help support and continue development on this project and is greatly appreciated.</p>
            </div>
            <div class="col m4 s12">
                <h5 class="white-text">Join the Discussion</h5>
                <p class="grey-text text-lighten-4">We have a Gitter chat room set up where you can talk directly with us. Come in and discuss new features, future goals, general problems or questions, or anything else you can think of.</p>
                <a class="btn waves-effect waves-light red lighten-3" target="_blank" href="">Chat</a>
            </div>
            <div class="col m4 s12" style="overflow: hidden;">
                <h5 class="white-text">Contact</h5>
                <div>
                    <form id="contactForm" class="css-form" method="post" onsubmit="return contactSubmit();">
                        <div class="input-field">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="validate" required/>
                        </div>
                        <div class="input-field">
                            <label for="email">Email</label>
                            <input id="email" id="email" name="email" type="email" class="validate" required />
                        </div>
                        <div class="input-field">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" class="validate" required />
                        </div>
                        <div class="input-field">
                            <textarea id="textarea1" name="message" class="materialize-textarea validate" required ></textarea>
                            <label for="textarea1">Your message</label>
                        </div>
                        <button class="btn waves-effect waves-light" type="submit">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>

            </div>
        </div>

    </div>
    <div class="footer-copyright">
        <div class="container">
            &copy; 2014-2015 Materialize, All rights reserved.
            <a class="grey-text text-lighten-4 right" href="https://github.com/Dogfalo/materialize/blob/master/LICENSE">MIT License</a>
        </div>
    </div>

</footer>