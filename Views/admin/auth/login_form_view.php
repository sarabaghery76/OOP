<div class="content">
    <div class="login-form">
        
        <fieldset>
            <legend>Admin login form</legend>

            <div class="alert alert-danger <?= isset($errors) ? "show" : ""; ?>">
                <?= isset($errors) ? $errors : ""; ?>
            </div>
            <form method="POST" action="./admin/login">
                <div class="form-group">
                    <label for="">Username:
                        <span class="require">*</span>
                    </label>
                    <input type="text" placeholder="username" name="admin_username" /><br/>
                </div>
                <div class="form-group">
                    <label for="">Password:
                        <span class="require">*</span>
                    </label>
                    <input type="password" placeholder="*******" name="admin_password" /><br/>
                </div>
                <div class="form-group">
                    <input type="submit" value="Send"/>
                </div>
            </form>
        </fieldset>
    </div>
</div>
        
        
        
                