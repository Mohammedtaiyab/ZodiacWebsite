<div class="form-group row">
    <label class="col-sm-3 col-md-4 col-form-label  text-md-right text-xs-left">Ayanamsa</label>
    <div class="col-sm-9 col-md-6">
        <select name="ayanamsa" class="form-control form-control-lg rounded-1">
            <option value="1">Lahiri</option>
            <option value="3">Raman</option>
            <option value="5">KP</option>
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 col-md-4 col-form-label  text-md-right text-xs-left">Date: </label>
    <div class="col-sm-9 col-md-6 ">
        <input type='datetime-local' name="datetime" class="form-control form-control-lg rounded-1" required="required" value="<?php date('Y-m-d\Th:i') ?>" />
    </div>
</div>
<input type='hidden' id="location" name="location" >


<div id="form-hidden-fields">

</div>