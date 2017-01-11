<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categoriesTotal = Category::count();
        $trashedTotal    = Category::onlyTrashed()->count();

        if ($status = $request->has('publish_status'))
        {
            if ($status == 'trashed')
            {
                $categories = Category::onlyTrashed()->paginate();

            }
            else
            {
                $categories = Category::paginate();

            }
        }
        else
        {
            $categories = Category::paginate();

        }

        return view('dashboard.categories.index', compact(
            'categoriesTotal',
            'trashedTotal',
            'categories',
            'request'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Category();
        return view('dashboard.categories.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request    $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->all();

        if (empty($data['slug']))
        {
            $data['slug'] = str_slug($data['name']);
        }

        if (Category::create($data))
        {
            return redirect()->back()->with('message', 'Category successfully created!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int                         $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int                         $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $isEdit = true;
        if ($model = Category::find($id))
        {
            return view('dashboard.categories.edit', compact('model', 'isEdit'));
        }
        else
        {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request    $request
     * @param  int                         $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($category = Category::find($id))
        {
            if ($category->update($request->all()))
            {
                return redirect()->back()->with('message', 'Category succesfully updated!');
            }
            else
            {
                // redirect
            }
        }
        else
        {
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int                         $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
