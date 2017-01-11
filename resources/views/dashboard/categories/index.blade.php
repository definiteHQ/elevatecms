@extends('dashboard.layouts.main')
@section('content')
  <h1 class="ui header">
  Categories
  <a href=" {{ route('backend.categories.create') }}" class="ui primary tiny button add-new-button">
    Add New
  </a>
  </h1>
  <div class="ui text menu">
    <a href="{{ route('backend.categories.index', ['page' => $request->get('page')]) }}"  class="item active">
      Published <div class="ui small teal label">{{ $categoriesTotal }}</div>
    </a>
    <a href="{{ route('backend.categories.index', [
        'publish_status' => 'trashed',
        'page' => $request->get('page')
    ]) }}" class="item">
      Trash <div class="ui small label">{{ $trashedTotal }}</div>
    </a>
  </div>

  <div class="content">
    <div class="ui form">
      <div class="fields">
        <div class="field">
          <select class="ui dropdown">
            <option value="">Bulk Action</option>
            <option value="1">Delete</option>
          </select>
        </div>
        <div class="field">
          <div class="ui calendar" id="sort-calendar">
            <input type="search" placeholder="Search Category">
          </div>
        </div>
        <div class="field">
          <select class="ui dropdown">
            <option value="">Show Category</option>
            <option value="10">10</option>
            <option value="10">20</option>
            <option value="10">50</option>
          </select>
        </div>
      </div>
    </div>

  </div>

  <table class="ui table">
    <thead class="full-width">
      <tr>
        <th class="one wide">
          <div class="ui fitted slider checkbox">
            <input type="checkbox"> <label></label>
          </div>
        </th>
        <th class="two wide">Name</th>
        <th class="seven wide">Description</th>
        <th class="two wide">Slug</th>
        <th class="two wide">Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
        <tr>
            <td class="collapsing">
              <div class="ui fitted slider checkbox">
                <input type="checkbox"> <label></label>
              </div>
            </td>
            <td>
              <strong><a href="">{{ $category->name }}</a></strong>
              <div class="ui text menu post-edit">
                <a href="{{ route('backend.categories.edit', ['id' => $category->id]) }}" class="item">
                  Edit
                </a>
                <a href=""{{ route('backend.categories.destroy', ['id' => $category->id]) }}  class="item">
                  Delete
                </a>
                <a href="{{ route('backend.categories.show', ['id' => $category->id]) }}" class="item">
                  View
                </a>
              </div>
            </td>
            <td>{!! $category->description !!}</td>
            <td>{{ $category->slug }}</td>
            <td>{{ $category->trashed() ? 'Trashed' : 'Published' }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <div class="clearfix">
    <div class="ui right floated pagination menu">
        {{-- <a class="icon item">
            <i class="left chevron icon"></i>
        </a>
        <a class="item">1</a>
        <a class="item">2</a>
        <a class="item">3</a>
        <a class="item">4</a>
        <a class="icon item">
            <i class="right chevron icon"></i>
        </a> --}}
        {!!  (new Landish\Pagination\SemanticUI($categories))->render() !!}
    </div>
  </div>
@stop