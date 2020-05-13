@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">
                Published posts 
        </div>
        
        <div class="panel-body">
                <table class="table table_hover">
                        <thead>
                            <th>
                                Image
                            </th>
                
                            <th>
                               Title
                            </th>
                           
                            <th>
                               Edit
                            </th>

                            <th>
                               Trash
                            </th>
                        </thead>
                
                        <tbody>
                            @if($posts->count()>0)
                                @foreach($posts as $post)
                                    <tr>
                                            <td>
                                                <img src="{{ $post->featured}}" alt="{{ $post->title}}"  width="100px"   height="80px">
                                            </td>

                                            <td>
                                            {{$post->title}} 
                                            </td>

                                            <td>
                                                    <a href="{{route('post.edit' , ['id'=>$post->id])}}" class="btn btn-xs btn-info">
                                                            <span class="glypicon glyphicon-pencil ">Edit</span>
                                                    </a> 
                                                
                                            </td>

                                            <td>
                                                

                                                <a href="{{route('post.delete' , ['id'=>$post->id])}}" class="btn btn-xs btn-danger">
                                                        <span class="glypicon glyphicon-trash">Trash</span>
                                                </a> 
                                            </td>
                                    </tr>
                                
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="5" class="text-center">No published posts</th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
        </div>
    </div>

@stop