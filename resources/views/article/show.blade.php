<!DOCTYPE html>
<html lang="en">
@include('layouts._header')
<body>
<img src="{{$article->image}}" alt=""><br>
標題：{{$article->title}}<br>
內容：{{$article->content}}<br>
<a href="/">back</a>
</body>