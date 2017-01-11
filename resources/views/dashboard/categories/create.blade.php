@extends('dashboard.layouts.main')

@section('content')
<h1 class="ui header">
Add New Category
</h1>



{{-- <div class="ui grid"> --}}
    {!! Form::open([
        'class' => 'ui grid',
        'url' => route('backend.categories.store')
    ]) !!}

    <div class="eleven wide computer sixteen wide mobile column">
        @if(Session::has('message'))
            <div class="ui success message">
              <i class="close icon"></i>
              <div class="header">
                {{ Session::get('message') }}
              </div>
              {{-- <p>Data Succesfully saved</p> --}}
            </div>
        @endif

        <div class="ui huge form">
            <div class="field">
                {{-- <input placeholder="Enter title here" type="text"> --}}
                {!! Form::text('name', null, [
                    'placeholder' => 'Enter title here'
                ]) !!}
            </div>
            <div class="ui mini form">
                <div class="field">
                    <label for="">Permalink:</label>
                    {{-- <input type="text" value="http://localhost/elevate-dashboard/add-new.php"> --}}
                    {!! Form::text('slug', null, [ ]) !!}
                </div>
                <br>
            </div>

            <div class="field">
                {{-- <textarea name="" id="wysiwyg" cols="30" rows="10"></textarea> --}}
                {!! Form::textarea('description', null, [
                    'id' => 'wysiwyg',
                    'cols' => 30,
                    'rows' => 10
                ]) !!}
            </div>
            <div class="ui form">
                <div class="field">
                    <label for="excerpt">Excerpt</label>
                    {{-- <textarea name="" id="" cols="30" rows="5"></textarea> --}}
                    {!! Form::textarea('excerpt', null, [
                        'id' => '',
                        'cols' => 30,
                        'rows' => 5
                    ]) !!}
                </div>
                <div class="field">
                    <div class="ui styled fluid accordion">
                        <div class="title active">
                            <i class="dropdown icon"></i> SEO Content
                        </div>
                        <div class="content active">
                            <div class="field">
                                {{-- <input type="text" placeholder="Title"> --}}
                                {!! Form::text('seo_title', null, [
                                ]) !!}
                            </div>
                            <div class="field">
                                {{-- <textarea name="" id="" cols="30" rows="5" placeholder="Description"></textarea> --}}
                                {!! Form::textarea('seo_description', null, [
                                    'cols' => 30,
                                    'rows' => 5,
                                ]) !!}
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
                <div class="header">Action</div>
            </div>
            {{-- <div class="content">
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
            </div> --}}

            <div class="extra content">
                <div class="fluid ui buttons">
                    {{-- <button class="ui button">Delete</button> --}}
                    {!! Form::submit('Delete', [
                        'class' => 'ui button'
                    ]) !!}
                    <div class="or"></div>
                    {!! Form::submit('Save', [
                        'class' => 'ui primary button'
                    ]) !!}
                </div>
            </div>
        </div>
        <!-- end ui card -->

        <div class="ui special cards">

            <div class="card">
                <div class="content">
                    <div class="header">Category Image</div>
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
                        <i class="add icon"></i> Upload Image
                    </div>
                </div>
            </div>
        </div>

        <div class="ui card">
            <div class="content">
                <div class="header">Parent</div>
            </div>
            <div class="content">
                <div class="ui form">
                    <div class="field">
                        <select name="" id="" class="ui dropdown">
                            <option value="0">Berita</option>
                            <option value="1">Acara</option>
                            <option value="3">&nbsp;&nbsp;&nbsp;&nbsp;Event</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {!! Form::close() !!}
{{-- </div> --}}
@stop
