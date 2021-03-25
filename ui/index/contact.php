<section id="contact">
    
    <h2> CONTACT US <img src="_assets/icons/down-arrow.svg" height="30" class="arrow"> </h2>

    <section id="send_email">

        <form dd_submit="yes" action="app/index/send_mail">

            <input type="text" name="email" placeholder="Your email">

            <textarea name="content" rows="10" placeholder="Type your message here"></textarea>

            <div align="right">
                <button type="submit"> Send email  <i class="pe-7s-angle-right"></i> </button>
            </div>

        </form>

    </section>

    
    <div id="contact_details">
        
        <section id="contact_address"> 

            <div id="address"> 
                <p> 166 PTI Road, beside RainOil filling station, Effurun, Delta State. </p>
                <a href=""> View map <i class="icon pe-7s-angle-right"> </i></a>
            </div>
            <div id="map">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.0235317057222!2d5.792473513560625!3d5.5635298959662585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1041adb341059367%3A0x85ef7875cfab9aab!2sBlue%20Diamond%20School!5e0!3m2!1sen!2sng!4v1600442938081!5m2!1sen!2sng" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
            </div>

        </section>
        
        <section id="other_contacts">
         
            <div id="phone_number">
                <p> +23470 6154 0102 </p> 
                <a href="tel: +2347061540102">
                    <i class="icon pe-7s-call"></i>
                </a> 
            </div>

            <div id="email_header"> 
                <i class="icon pe-7s-mail"></i> 
                <p> Reach us through <span> otwopaul@gmail.com</span>  or send a mail using the form above. </p>
            </div>
            
        </section>

    </div>

    <?php loadUI('cta'); ?>

</section>
