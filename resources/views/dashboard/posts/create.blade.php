@extends('dashboard.layouts.main')

@section('content')
    <h1 class="ui header">
        Add New Post
    </h1>

    <div class="ui grid">
        <div class="eleven wide computer sixteen wide mobile column">
            <div class="ui huge form">
                <div class="field">
                    <input placeholder="Enter title here" type="text">
                </div>
                <div class="ui mini form">
                  <div class="field">
                    <label for="">Permalink:</label>
                    <input type="text" value="http://localhost/elevate-dashboard/add-new.php">
                  </div>
                  <br>
                </div>

                <div class="field">
                    <textarea name="" id="wysiwyg" cols="30" rows="10"></textarea>
                </div>
                <div class="ui form">
                    <div class="field">
                        <label for="excerpt">Excerpt</label>
                        <textarea name="" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div class="field">
                        <div class="ui styled fluid accordion">
                              <div class="title active">
                                <i class="dropdown icon"></i>
                                SEO Content
                              </div>
                              <div class="content active">
                                <div class="field">
                                    <input type="text" placeholder="Title">
                                </div>
                                <div class="field">
                                    <textarea name="" id="" cols="30" rows="5" placeholder="Description"></textarea>
                                </div>
                              </div>
                        </div>
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
                  <div class="event">
                      <i class="calendar icon"></i>
                      <div class="content">
                        Published on:
                        <div class="clearfix" style="margin-top: 10px;"></div>
                        <div class="ui  form">
                            <div class="three fields">
                                <div class="field">
                                    <select name="" id="">
                                        <option value="">Date</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <select name="" id="">
                                        <option value="">Month</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <select name="" id="">
                                        <option value="">Year</option>
                                    </select>
                                </div>
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

            <div class="ui special cards">

              <div class="card">
                <div class="content">
                <div class="header">Featured Image</div>
              </div>
              <!-- remove this section if image not available -->
               <div class="blurring dimmable image">
                  <div class="ui dimmer">
                    <div class="content">
                      <div class="center">
                        <div class="ui inverted button">Remove</div>
                      </div>
                    </div>
                  </div>
                  <img src="http://semantic-ui.com/images/avatar/large/elliot.jpg">
                </div>
                 <!-- remove this section if image not available -->
                <div class="extra content">
                  <div class="ui bottom attached button">
                      <i class="add icon"></i>
                      Upload Image
                    </div>
                </div>
              </div>
            </div>

            <div class="ui card">
                <div class="content">
                    <div class="header">Category</div>
                </div>
                <div class="content">
                    <ul class="ui form ui list ">
                        <li class="inline field item">
                            <div class="ui checkbox">
                              <input type="checkbox" tabindex="0" class="hidden">
                              <label>Parent Category</label>
                            </div>
                            <ul>
                                <li class="inline">
                                    <div class="ui checkbox">
                                      <input type="checkbox" tabindex="0" class="hidden">
                                      <label>Child</label>
                                    </div>
                                </li>
                                <li class="inline">
                                    <div class="ui checkbox">
                                      <input type="checkbox" tabindex="0" class="hidden">
                                      <label>Child</label>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="inline field item">
                            <div class="ui checkbox">
                              <input type="checkbox" tabindex="0" class="hidden">
                              <label>Parent Category</label>
                            </div>
                            <ul>
                                <li class="inline">
                                    <div class="ui checkbox">
                                      <input type="checkbox" tabindex="0" class="hidden">
                                      <label>Child</label>
                                    </div>
                                </li>
                                <li class="inline">
                                    <div class="ui checkbox">
                                      <input type="checkbox" tabindex="0" class="hidden">
                                      <label>Child</label>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
