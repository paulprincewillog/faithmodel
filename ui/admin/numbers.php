<section id="check_numbers" backTo="#admin_dashboard">

    <form id="search_for_numbers" class="searchbox" dd_submit="yes" dd_bindResult="#all_numbers" method="POST" action="app/admin/check_numbers">
        <input type="text" name="search" placeholder="Type a name or number to search">
        <button type="submit"> <i class="pe-7s-search"></i> </button>
    </form>

    <section id="all_numbers" dd_pagination="no" dd_amount="all">

        <div class="each_number" dd_clone="2">

            <section>
                <p dd_display="full_name" class="dd_longline"></p>
                <p dd_display="phone_number" class="dd_shortline"></p>
            </section>

            <a href="tel: [phone_number]" dd_attr="phone_number"> <button> <i class="pe-7s-call"></i> </button> </a>
        </div>

    </section>

</section>