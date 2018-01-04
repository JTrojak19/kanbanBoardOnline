<?php echo validation_errors();?>
<?php
echo form_open("event/create"); ?>
<form>
    <label for="event">Event</label>
    <input type="text" name="event"/></br>
    <label for="estimatedTime">Estimated Time</label>
    <input type="date" name="estimatedTime"/></br>
    <label for="realTime">Real Time</label>
    <input type="date" name="realTime"/></br>
    <label for="creationDate">Creation Date</label>
    <input type="date" name="creationDate"/></br>
    <input type="submit" name="submit" value="Create Event"/>
</form>

