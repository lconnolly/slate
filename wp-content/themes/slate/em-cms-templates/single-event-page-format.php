<section class="event-meta">
    {has_location}
        <div class="event-meta-venue-link">#_LOCATIONLINK</div>
    {/has_location}

    <div class="event-meta-date">
        {not_long}
            <div class="event-date--open">
                <div class="event-date-date">#D. #F #j, #Y</div>
                {no_time}<div class="event-date-time">#g:#i</div>{/no_time}
                {has_time}<div class="event-date-time">#g:#i&ndash;#@g:#@i#a</div>{/has_time}
            </div>
        {/not_long}
        {is_long}
            <div class="event-date--overnight">
                <div class="event-date-date">#D. #F #j, #Y</div>
                <div class="event-date-time">#g:#i#a&ndash;#@g:#@i#@a</div>
            </div>
        {/is_long}
        {all_day}
            <div class="event-date--allday">
                <div class="event-date-date">#M. #j-#@j, #Y</div>
            </div>
        {/all_day}
    </div>

    <div class="event-meta-description">
        #_EVENTNOTES
    </div>

    <div class="event-meta-tags">
        <h2>Categories</h2>
        #_EVENTTAGS
    </div>

    {has_bookings}
        <div class="event-meta-booking">
            <h2>Bookings</h2>
            #_BOOKINGFORM
        </div>
    {/has_bookings}

    {has_location}
        <div class="event-meta-map">
            #_LOCATIONMAP
        </div>
    {/has_location}
</section>
