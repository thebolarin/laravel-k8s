@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">
                Trashed posts
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
                                Restore
                            </th>

                            <th>
                                Destroy
                             </th>
                        </thead>
                
                        <tbody>
                            @if($posts->count() > 0)
                                @foreach($posts as $post)
                                    <tr>
                                            <td>
                                            <img src="{{ $post->featured}}" alt="{{ $post->title}}"  width="100px"   height="80px">
                                            </td>

                                            <td>
                                            {{$post->title}} 
                                            </td>

                                            <td>
                                                Edit 
                                                
                                            </td>

                                            <td>
                                                

                                                <a href="{{route('post.restore' , ['id'=>$post->id])}}" class="btn btn-xs btn-success">
                                                        <span class="glypicon glyphicon-trash">Restore</span>
                                                </a> 

                                            
                                            </td>

                                            <td>
                                            
            
                                                    <a href="{{route('post.kill' , ['id'=>$post->id])}}" class="btn btn-xs btn-danger">
                                                            <span class="glypicon glyphicon-trash"> Delete</span>
                                                    </a>
                                                </td>
                                    </tr>
                                
                                @endforeach

                            @else
                                    <tr>
                                        <th colspan="5" class="text-center">No trashed posts</th>
                                    </tr>

                            @endif
                        </tbody>
                    </table>
        </div>
    </div>

@stop