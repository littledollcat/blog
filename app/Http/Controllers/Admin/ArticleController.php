<?php

namespace App\Http\Controllers\Admin;

use App\Article; //Article::all() 表單名才可縮寫為Article

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles = Article::all();
        return view('admin.article.index', ['articles' => $articles]);
    }

    /**
     * 顯示建立部落格新文章的表單。
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * 儲存一篇部落格新文章。
     *
     * @param  Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required',
            'content' => 'required',
        ]);

        $article = new Article();
        $article->title = $request->title;
        $article->image = $request->image;
        $article->content = $request->content;
        $article->save();

        return redirect('admin/article');
    }

    /**
     * 刪除文章
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect('admin/article');
    }
}
