@extends('dashboard.layouts.main')

@section('content')
    <h1 class="ui header">
        Posts
        <a href="{{ route('backend.posts.create') }}" class="ui primary tiny button add-new-button">
            Add New
        </a>
    </h1>

    <div class="ui text menu">
      <a class="item active">
        All <div class="ui small teal label">155</div>
      </a>
      <a class="item">
        Published <div class="ui small label">150</div>
      </a>
      <a class="item">
        Draft <div class="ui small label">5</div>
      </a>
      <a class="item">
        Trash <div class="ui small label">0</div>
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
                <div class="ui input left icon">
                  <i class="calendar icon"></i>
                  <input type="text" placeholder="All Dates">
                </div>
              </div>
            </div>
             <div class="field">
              <div class="ui calendar" id="sort-calendar">
                <input type="search" placeholder="Search Posts">
              </div>
            </div>
            <div class="field">
              <select class="ui dropdown">
                  <option value="">Show Posts</option>
                  <option value="10">10</option>
                  <option value="10">20</option>
                  <option value="10">50</option>
                </select>
            </div>
            <div class="field">
                <div class="ui floating dropdown labeled search icon button">
                  <i class="database icon"></i>
                  <span class="text">Select Category</span>
                  <div class="menu">
                    <div class="item">Berita</div>
                    <div class="item">Media</div>
                  </div>
                </div>
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
          <th class="seven wide">Title</th>
          <th class="two wide">Categories</th>
          <th class="two wide">Date</th>
          <th class="two wide">Status</th>
        </tr>
      </thead>
      <tbody>
        <?php for ($x = 1; $x <= 5; $x++)
{
    ?>
            <tr>
              <td class="collapsing">
                <div class="ui fitted slider checkbox">
                  <input type="checkbox"> <label></label>
                </div>
              </td>
              <td>
                <strong><a href="Edit">El Premio Kota Deltamas El Premio Kota Deltamas </a></strong>
                <div class="ui text menu post-edit">
                      <a class="item">
                        Edit
                      </a>
                      <a class="item">
                        Delete
                      </a>
                      <a class="item">
                        View
                      </a>
                </div>
              </td>
              <td><a href="">Berita</a>, <a href="">Media</a></td>
              <td>2016/12/10</td>
              <td>Published</td>
            </tr>
            <tr>
              <td class="collapsing">
                <div class="ui fitted slider checkbox">
                  <input type="checkbox"> <label></label>
                </div>
              </td>
              <td>
                <strong><a href="Edit">MPV Mitsubishi Hanya Diproduksi di Indonesia, area GIIC Kota Deltamas</a></strong>
                <div class="ui text menu post-edit">
                      <a class="item">
                        Edit
                      </a>
                      <a class="item">
                        Delete
                      </a>
                      <a class="item">
                        View
                      </a>
                </div>
              </td>
              <td><a href="">Berita</a>, <a href="">Media</a></td>
              <td>2016/12/10</td>
              <td>Published</td>
            </tr>
        <?php }?>
      </tbody>
    </table>

    <div class="clearfix">
        <div class="ui right floated pagination menu">
            <a class="icon item">
              <i class="left chevron icon"></i>
            </a>
            <a class="item">1</a>
            <a class="item">2</a>
            <a class="item">3</a>
            <a class="item">4</a>
            <a class="icon item">
              <i class="right chevron icon"></i>
            </a>
         </div>
     </div>

@stop