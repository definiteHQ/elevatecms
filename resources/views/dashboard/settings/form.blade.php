@if(Session::has('message'))
    <div class="ui success message">
      <i class="close icon"></i>
      <div class="header">
        {{ Session::get('message') }}
      </div>
    </div>
@endif
    
{!! Form::model(new App\Models\Setting, [
    'class' => 'ui grid form',
    'url' => route('backend.settings.store'),
    'files' => true
]) !!}
  <div class="six wide computer sixteen wide mobile column">
    <div class="field">
      <label>Site Title</label>
      <input type="text" name="site.name" value="{{ App\Models\Setting::getValue('site_name') }}">
    </div>
    <div class="field">
      <label>Site Tagline</label>
      <input type="text" name="site.tagline" value="{{ App\Models\Setting::getValue('site_tagline') }}">
    </div>
    <div class="field">
      <label>Site Description</label>
      <textarea name="site.description" id="">{{ App\Models\Setting::getValue('site_description') }}</textarea>
    </div>
  </div>
  <div class="six wide computer sixteen wide mobile column">
    <div class="field">
      <label>Site Logo</label>
      img
      <input type="file" name="site.logo" accept="jpg, jpeg, png" value="{{ App\Models\Setting::getValue('site_logo') }}">
    </div>
    <div class="field">
      <label>Site Default Image</label>
      <input type="file" name="site.default.image" accept="jpg, jpeg, png" value="{{ App\Models\Setting::getValue('site_default_image') }}">
    </div>
    <div class="field">
      <label>Google Anlytics Code</label>
      <input type="text" name="site.ga" placeholder="Google Anlytics Code" value="{{ App\Models\Setting::getValue('site_ga') }}">
    </div>
    <div class="field">
      <label>Admin Email</label>
      <input type="email" name="site.email" value="{{ App\Models\Setting::getValue('site_email') }}">
    </div>
    <div class="field">
      <input type="submit" class="ui primary submit button" value="Submit">
    </div>
  </div>
{!! Form::close() !!}