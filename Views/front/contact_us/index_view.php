<div class="content contact-us-content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi at beatae cupiditate deserunt </p>

    <div class="alert alert-danger" >Email & Message are require.</div>
    <div class="alert alert-success" >Your message was send successfully.</div>
    <form method="POST" action="./contact_us&method=insertMessage">
        <div class="form-group">
            <label for="">Full name:
                <span class="require">*</span>
            </label>
            <input type="text" name="full-name">
        </div>

        <div class="form-group">
            <label for="">Email:
                <span class="require">*</span>
            </label>
            <input type="email" name="email">
        </div>
        
        <div class="form-group">
            <label for="">Phone:</label>
            <input type="tel" name="phone">
        </div>

        <div class="form-group">
            <label for="">Message:
                <span class="require">*</span>
            </label>
            <textarea name="message" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" value="Send" />
        </div>
    </form>
</div>