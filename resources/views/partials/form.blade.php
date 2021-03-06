{{-- Purchased Item Form Input--}}
<div class="form-group">
    {!! Form::label("item","Purchased Item:") !!}
    {!! Form::text("item",null,["class"=>"form-control", "autocomplete"=>"on"]) !!}
    {!! $errors->first('item',"<span class='input-error'>:message</span>") !!}
</div>

{{-- Amount Form Input--}}
<div class="form-group">
    {!! Form::label("amount","Amount:") !!}
    {!! Form::input("number","amount",null,["class"=>"form-control", "step"=>"any"]) !!}
    {!! $errors->first('amount',"<span class='input-error'>:message</span>") !!}
</div>

{{-- Vendor Form Input--}}
<div class="form-group">
    {!! Form::label("vendor","Vendor:") !!}
    {!! Form::text("vendor",null,["class"=>"form-control", "autocomplete"=>"on"]) !!}
    {!! $errors->first('vendor',"<span class='input-error'>:message</span>") !!}
</div>

{{-- Payment Method Form Input--}}
<div class="form-group">
    {!! Form::label("payment","Payment Method:") !!}
    {!! Form::select("payment",[0=>"Cash", 1=>"Credit Card", 2=>"Octopus"],null,["class"=>"form-control"]) !!}
    {!! $errors->first('payment',"<span class='input-error'>:message</span>") !!}
</div>

<button class="btn btn-default" id="uploadButton">Upload Receipt</button>
<button class="btn btn-danger" id="removeButton" style="display:none">Remove Receipt</button>
{{-- Upload Receipt Form Input--}}
<div class="form-group">
    <input type="file" name="receipt" id="receipt" style="display: none;"/>
    <input type="hidden" name="remove" id="remove" value="0"/>
    {!! $errors->first('receipt',"<span class='input-error'>:message</span>") !!}
    {!! $errors->first('position',"<span class='input-error'>:message</span>") !!}
</div>

<input type="hidden" name="position" id="position" />

{!! Form::submit($submitButtonText, ["class"=>"btn btn-primary btn-block btn-lg"]) !!}