<?php 
    $Message = $message->fetch_assoc();
?>
<fieldset>
    <legend>Edit message</legend>
    <form method="POST" action="./contact_us&method=edit_message">
        <input type="text" value="<?php echo $Message["id"]; ?>" name="id" hidden />
        name : <input type="text" value="<?php echo $Message["name"]; ?>" name="name" disabled /><br/>
        email : <input type="email" value="<?php echo $Message["email"]; ?>" name="email" disabled /><br/>
        phone : <input type="tel" value="<?php echo $Message["phone"]; ?>" name="phone" disabled /><br/>
        message : <input type="text" value="<?php echo $Message["message"]; ?>" name="message" /><br/>
        <input type="submit" value="edit"/>
    </form>
</fieldset>