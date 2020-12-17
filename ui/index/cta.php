<section id="cta">
    
    <section id="close_cta">
        <span onclick="cta('no')"> <i class="pe-7s-close"></i> </span>
    </section>

    <div id="enroll_question" class="current_cta"> 
        
        <p> Do you want to ask more questions about our school? </p>

        <div class="cta_buttons">
            <button onclick="cta('submit_number')"> Yes </button>
            <button onclick="cta('no')"> No </button>
        </div>
    </div>

    <div id="submit_number"> 

        <p> Please submit your phone number below and we'll call you to discuss </p>

        <form>

            <input type="text" name="full_name" placeholder="Your name" required>
            <input type="text" name="phone_number" placeholder="Your phone number" required>

            <div align="right">
                <button type="submit"> Submit  <i class="pe-7s-angle-right"></i> </button>
            </div>

        </form>

    </div>

    <div id="cta_success">
        <i class="pe-7s-check"></i>
        <p> We have gotten your details and would contact you as soon as possible </p>
    </div>

    <section id="cta_image">
        <img src="_assets/images/profile-picture.jpg">
    </section>

</section>