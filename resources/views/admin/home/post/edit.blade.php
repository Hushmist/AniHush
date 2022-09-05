@extends('layouts.admin_layout')

@section('title', 'Редактировать статью')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Редактировать статью: {{$post->title}}</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
          @if (session('success'))
              <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                  <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
              </div>
          @endif
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{route('post.update', $post->id)}}" method="POST">
                          @csrf
                          @method('PUT')
                          <div class="card-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Название</label>
                              <input type="text" value="{{$post['title']}}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Введите название статьи" required>
                            </div>
                            <div class="form-group">
                                {{-- Select --}}
                                <div class="form-group">
                                    <label>Выберите катeгорию</label>
                                    <select name="category_id" class="form-control" required>
                                        @foreach ($categories as $category)ty
                                            <option value="{{$category['id']}}" @if($category['id'] == $post['cat_id']) selected @endif>
                                                {{$category['title']}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                              <textarea name="text" class="editor">{{$post['text']}}</textarea>
                            </div>

                            <div class="form-group">
                                {{-- Select --}}
                                <div class="form-group">
                                    <label>Выберите уровень доступа</label>
                                    <select name="access_id" class="form-control" required>
                                        <option value="0" @if(is_null($post['access_id'])) selected @endif>Все</option>
                                        @isset ($accesses)
                                            @foreach ($accesses as $access)
                                                <option value="{{$access['id']}}" @if($post['access_id'] == $access['id']) selected @endif>{{$access['name']}}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="feature_image">Изоброжение статьи</label>
                              <img class="img-uploaded" style="display: block" src="{{$post['img']}}">
                              <input type="text" name="img" class="form-control" id="feature_image" name="feature_image" value="{{$post['img']}}" readonly>
                              <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изоброжение</a>
                            </div>
                          </div>
                          <!-- /.card-body -->
          
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="user_id" value="{{Auth::user()->id}} ">Сохранить</button>
                          </div>
                        </form>
                      </div>
                </div>
            </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection