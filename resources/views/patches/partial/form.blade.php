<!-- Patch Name -->
<div class="form-group">
    <label for="patch-name" class="col-sm-3 control-label">Patch Name:</label>

    <div class="col-sm-6">
        <input type="text" name="patch_name" id="patch-name" class="form-control" value="{{isset($patch->patch_name)? $patch->patch_name:''}}">
    </div>
</div>

<!-- Patch Price -->
<div class="form-group">
    <label for="price" class="col-sm-3 control-label">Price:</label>

    <div class="col-sm-6">
        <input type="text" name="price" id="price" class="form-control" value="{{isset($patch->price) ? $patch->price: ''}}">
    </div>
</div>

<!-- Patch Description -->
<div class="form-group">
    <label for="description" class="col-sm-3 control-label">Patch Description:</label>

    <div class="col-sm-6">
        <textarea class="form-control" id="comments" name="comments" rows="5" placeholder="{{isset($patch->description) ? $patch->description: ''}}"></textarea>
        {{--<input type="text" name="description" id="description" class="form-control" value="{{isset($patch->description) ? $patch->description: ''}}">--}}
    </div>
</div>