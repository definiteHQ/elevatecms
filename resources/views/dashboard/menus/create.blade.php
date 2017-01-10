@extends('dashboard.layouts.main')
@section('content')
  <h1 class="ui header">
  Add New Menu
  </h1>
  <div class="ui grid">
    <div class="eleven wide computer sixteen wide mobile column">
      <div class="ui huge form">
        <div class="field">
          <input placeholder="Enter title here" type="text">
        </div>
        <div class="ui form">
          <div class="field">
            <label><strong>Menu Structure</strong></label>
          </div>
          <div class="field">
            <div class="ui styled fluid accordion">
              <div class="title">
                <i class="dropdown icon"></i>
                <!-- judul menu mengikuti value dari menu name -->
                Menu
              </div>
              <div class="content">
                <div class="field">
                  <input type="text" placeholder="Title">
                </div>
                <div class="field">
                  <input type="text" placeholder="URL">
                </div>
                <div class="field">
                  <!-- parent baru akan aktif setelah menu pertama dibuat -->
                  <select name="" id="" disabled="disabled" class="ui dropdown">
                    <option value="">Menu Parent</option>
                  </select>
                </div>
                <div class="field">
                  <textarea name="" id="" cols="30" rows="5" placeholder="Description"></textarea>
                </div>
                <div class="field">
                  <input type="number" class="order" placeholder="Order">
                </div>
              </div>
            </div>
          </div>
          <div class="field text-right">
            <button class="ui button primary" id="add-menu">Add Menu</button>
          </div>
        </div>
      </div>
    </div>
    <div class="five wide computer sixteen wide mobile column">
      <div class="ui card">
        <div class="content">
          <div class="header">Publish</div>
        </div>
        <div class="content">
          <div class="ui small feed">
            <div class="event">
              <i class="pin icon"></i>
              <div class="content">
                Status
                <div class="ui inline dropdown">
                  <div class="text">Draft</div>
                  <i class="dropdown icon"></i>
                  <div class="menu">
                    <div class="active item" data-text="draft">Draft</div>
                    <div class="item" data-text="published">Published</div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="extra content">
          <div class="fluid ui buttons">
            <button class="ui button">Delete</button>
            <div class="or"></div>
            <button class="ui primary button">Publish</button>
          </div>
        </div>
      </div> <!-- end ui card -->
    </div>
  </div>
@stop