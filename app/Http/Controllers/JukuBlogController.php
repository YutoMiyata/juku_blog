<?php

namespace App\Http\Controllers;

use App\Models\JukuBlog;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Services\CheckFormService;

class JukuBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        //検索機能
        $search = $request->search;
        $query = JukuBlog::search($search);
        $blogs = $query->select('id','name','gender','title','content','teacher','score')
                        //  ->get();
                        ->paginate(20);
        
        return view('blog/index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        JukuBlog::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'title' => $request->title,
            'content' => $request->content,
            'teacher' => $request->teacher,
            'score' => $request->score,
        ]);

        return to_route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JukuBlog  $jukuBlog
     * @return \Illuminate\Http\Response
     */
    // public function show(JukuBlog $jukuBlog)
    public function show($id)
    {
        //
        $blog = JukuBlog::find($id);

        // if($blog->gender === 0) {
        //     $gender = '男性';
        // } else {
        //     $gender = '女性';
        // }
        $gender = CheckFormService::checkGender($blog);
        
        return view('blog.show',compact('blog','gender'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JukuBlog  $jukuBlog
     * @return \Illuminate\Http\Response
     */
    // public function edit(JukuBlog $jukuBlog)
    public function edit($id)
    {
        //
        $blog = JukuBlog::find($id);

        return view('blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JukuBlog  $jukuBlog
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, JukuBlog $jukuBlog)
    public function update(Request $request, $id)
    {
        //
        $blog = JukuBlog::find($id);

        $blog->name = $request->name;
        $blog->gender = $request->gender;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->teacher = $request->teacher;
        $blog->score = $request->score;

        $blog->save();

        return to_route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JukuBlog  $jukuBlog
     * @return \Illuminate\Http\Response
     */
    // public function destroy(JukuBlog $jukuBlog)
    public function destroy($id)
    {
        //
        $blog = JukuBlog::find($id);
        $blog->delete();

        return to_route('blog.index');
    }
}
