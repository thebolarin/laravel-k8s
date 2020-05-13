@extends('layouts.frontend')


@section('content')
    <div class="stunning-header stunning-header-bg-lightblue">

        <div class="stunning-header-content">
        <h1 class="stunning-header-title">{{$post->title}}</h1>

        </div>
    </div>


    <div class="container">
            <div class="row medium-padding120">
                <main class="main">
                    <div class="col-lg-10 col-lg-offset-1">
                        <article class="hentry post post-standard-details">
        
                            <div class="post-thumb">
                            <img src="{{$post->featured}}" alt="seo">
                            </div>
        
                            <div class="post__content">
        
        
                                <div class="post-additional-info">
        
                                    <div class="post__author author vcard">
                                        Posted by
        
                                        <div class="post__author-name fn">
                                            <a href="#" class="post__author-link">Admin</a>
                                        </div>
        
                                    </div>
        
                                    <span class="post__date">
        
                                        <i class="seoicon-clock"></i>
        
                                        <time class="published" datetime="2016-03-20 12:00:00">
                                           {{$post->created_at->diffForHumans()}} <!toFormatteddateString()!>
                                        </time>
        
                                    </span>
        
                                    <span class="category">
                                        <i class="seoicon-tags"></i>
                                      <a href="{{ route('category.single' , [ 'id'=> $post->category->id] ) }}">{{$post->category->name}}</a>
                                      
                                    </span>
        
                                </div>
        
                                <div class="post__content-info">
        
                                    <p class="post__subtitle">{!! $post->content !!}
                                    </p>
        
                                    <p class="post__text">Investigationes demonstraverunt lectores legere me lius quod ii legunt
                                        saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum. Mirum <span class="c-primary">est notare quam littera gothica</span>, quam nunc putamus parum claram,
                                        anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima
                                        eodem modo typii quam nunc putamus parum claram, anteposuerit.
                                    </p>
        
                                    <div class="testimonial-item quote-left">
        
                                        <h5 class="h5 testimonial-text">
                                            Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                            anteposuerit litterarum formas humanitatis placerat facer possim assum.
                                        </h5>
        
                                        <div class="author-info-wrap table">
                                            <div class="author-info table-cell">
                                                <h6 class="author-name c-primary">Angelina Johnson</h6>
                                                <div class="author-company">Envato Market</div>
                                            </div>
                                        </div>
        
                                        <div class="quote">
                                            <i class="seoicon-quotes"></i>
                                        </div>
        
                                    </div>
        
                                    <p class="post__text">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                        suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                        dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
                                        feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                                        praesent luptatum quam nunc putamus parum claram, anteposuerit litterarum formas.
                                    </p>
        
                                    <h4 class="mb30">Qum Soluta Nobis Eleifend</h4>
        
                                    <p class="post__text">Iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                                        vel illum dolore eu feugiat <span class="c-dark">nulla facilisis at vero eros</span>
                                        et accumsan et iusto odio dignissim qui blandit praesent luptatum quam nunc putamus parum claram.
                                    </p>
        
                                    <ul class="list list--secondary">
                                        <li>
                                            <i class="seoicon-check"></i>
                                            <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh <span class="c-primary">euismod tincidunt;</span>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="seoicon-check"></i>
                                            <a href="#">Mirum est notare quam littera gothica;</a>
                                        </li>
                                        <li>
                                            <i class="seoicon-check"></i>
                                            <a href="#">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                                molestie consequat, vel illum dolore eu feugiat nulla;
                                            </a>
                                        </li>
                                        <li>
                                            <i class="seoicon-check"></i>
                                            <a href="#">Investigationes demonstraverunt lectores.</a>
                                        </li>
                                    </ul>
        
                                    <p class="post__text">Quis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                                        molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                                        et iusto odio dignissim qui blandit praesent quam nunc putamus parum claram.
                                    </p>
        
                                    <div class="widget w-tags">
                                        <div class="tags-wrap">
                                            @foreach($post->tags as $tag)
                                                     <a href="{{route('tag.single' , ['id'=>$tag->id ])}}" class="w-tags-item">{{$tag->tag}}</a> 
                                            @endforeach
                                            
                                        </div>
                                    </div>
        
                                </div>
                            </div>
        
                            <div class="socials  text-center">
                                    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
                                    <div class="addthis_inline_share_toolbox_fkl3"></div>
                            </div>
        
                        </article>
        
                        <div class="blog-details-author">
        
                            <div class="blog-details-author-thumb">
                                <img src="{{asset($post->user->profile->avatar)}}" alt="Author">
                            </div>
        
                            <div class="blog-details-author-content">
                                <div class="author-info">
                                    <h5 class="author-name">{{ $post->user->name}}</h5>
                                   
                                </div>
                                <p class="text">{{ $post->user->profile->about}}</p>

                                <div class="socials">
        
                                     <a href="{{ $post->user->profile->facebook}}" class="social__item"  target="_blank" >
                                        <img src="{{asset('app/svg/circle-facebook.svg')}}" alt="facebook">
                                    </a>
        
                                    
        
                                    <a href="{{ $post->user->profile->youtube}}" class="social__item"  target="_blank" >
                                        <img src="{{asset('app/svg/youtube.svg')}}" alt="youtube">
                                    </a>
        
                                </div>
                            </div>
                        </div>
        
                        <div class="pagination-arrow">
        
                          
        
                           @if($prev)
                            <a href="{{ route('post.single' , ['slug' => $prev->slug ]) }}" class="btn-next-wrap">
                                    <div class="btn-content">
                                        <div class="btn-content-title">Next Post</div>
                                        <p class="btn-content-subtitle">{{$prev->title}}</p>
                                    </div>
                                    <svg class="btn-next">
                                        <use xlink:href="#arrow-right"></use>
                                    </svg>
                                </a>
                           @endif

                           @if($next)
                           <a href="{{ route('post.single' , ['slug' => $next->slug ]) }}" class="btn-prev-wrap">
                                   <svg class="btn-prev">
                                       <use xlink:href="#arrow-left"></use>
                                   </svg>
                                   <div class="btn-content">
                                       <div class="btn-content-title">Previous Post</div>
                                   <p class="btn-content-subtitle">{{$next->title}}</p>
                                   </div>
                               </a>
                      @endif
        
                        </div>
        
                        <div class="comments">
        
                            <div class="heading text-center">
                                <h4 class="h1 heading-title">Comments</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>

                            @include('includes.disqus')
                        </div>
        
                        <div class="row">
        
                        </div>
        
        
                    </div>
        
                    <!-- End Post Details -->
        
                    <!-- Sidebar-->
                        <br>
                        <br>


                    <div class="col-lg-12">
                        <aside aria-label="sidebar" class="sidebar sidebar-right">
                            <div  class="widget w-tags">
                                <div class="heading text-center">
                                    <h4 class="heading-title">ALL BLOG TAGS</h4>
                                    <div class="heading-line">
                                        <span class="short-line"></span>
                                        <span class="long-line"></span>
                                    </div>
                                </div>
        
                                <div class="tags-wrap">
                                    @foreach($tags as $tag)
                                      <a href="{{route('tag.single' , ['id'=>$tag->id ])}}" class="w-tags-item">{{ $tag->tag }}</a>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </aside>
                    </div>
        
                    <!-- End Sidebar-->
        
                </main>
            </div>
    </div>



@endsection