<!-- Begin Form, copy, and paste onto your page for access   *******  Begin Form, copy, and paste onto your page for access  -->
<div class="form-panel">
    <div class="form-container">
        <form class="form-input" method="get"action="./handler/handler.php">
            <div class="input-panel">
                <label for="company" >Business Name:</label>
                <input type="text" id="name" class="section" name="company" placeholder="Your Company, Inc." required="true">
            </div>
            <div class="input-panel">
                <label for="name" >Name:</label>
                <input type="text" id="name" class="section" name="name" placeholder="Jane/John Doe" required="true">
            </div>
            <div class="input-panel">
                <label for="email" >Email Address:</label>
                <input type="email" id="email" class="section" name="email" placeholder="You@yourdomain.com" required="true">
            </div>
            <div class="input-panel">
                <label for="phone" >Phone Number:</label>
                <input type="tel" id="phone" class="section" name="phone" title="phone (Format: 999-999-9999)" size="10" minlength="10" maxlength="10" required="true">
            </div>
            <div class="input-panel">
                <label for="street" >Street Address:</label>
                <input type="text" id="street" class="section" name="street" placeholder="1234 Anywhere Blvd."  required="true">
            </div>
            <div class="input-panel">
                <label for="city" id="adress-label">City:</label>
                <input type="text" id="city" class="section address" name="city" placeholder="Denver"  required="true">
                <label for="state" id="adress-label">State:</label>
                <input type="text" id="state" class="section address" name="state" placeholder="CO"  required="true">
                <label for="zip" id="adress-label">Zip:</label>
                <input type="text" id="zip" class="section address" name="zip" placeholder="80000"  pattern="[0-9]{5-12}" required="true">
            </div><br />
            <div class="input-panel">
                <button type="submit" id="submit" class="section" name="submit"  required="true">
                    <label for="product" >Submit</label>
                </button>
            </div>
        </form>
    </div>
</div>
<!-- END Form, copy, and paste onto your page for access ********  END Form, copy, and paste onto your page for access  -->