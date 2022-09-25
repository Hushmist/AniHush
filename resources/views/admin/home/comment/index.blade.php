@extends('layouts.admin_layout')

@section('title', 'Все статьи')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Все комментарий</h1>
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
            <div class="card">
                <div class="card-body p-0">
                  <table class="table table-striped projects">
                      <thead>
                          <tr>
                              <th style="width: 5%">
                                  ID
                              </th>
                              <th>
                                  Текст
                              </th>
                              <th>
                                  Автор
                              </th>
                              <th>
                                  ID статьи
                              </th>
                              <th>
                                  Название статьи
                              </th>
                              <th>
                                  Дата добавление
                              </th>
                              <th style="width: 30%">
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($comments as $comment)
                            <tr>
                                <td>
                                   {{ $comment->id}}
                                </td>
                                <td>
                                    {{$comment->text}}
                                </td>
                                <td>
                                    {{$comment->user['name']}}
                                </td>
                                <td>
                                    {{$comment['article_id']}}
                                </td>
                                <td>
                                    {{$comment->article['title']}}
                                </td>
                                <td>
                                    {{$comment['created_at']}}
                                </td>
                                <td class="project-actions text-right">
                                    
                                    <a class="btn btn-info btn-sm" href="{{route('comment.edit', $comment->id)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Редактировать
                                    </a>
                                    <form action="{{route('comment.destroy', $comment->id)}}" method="POST"  class="d-inline-block">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger btn-sm delete-btn" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Удалить
                                      </button>
                                    </form>
                                </td>
                            </tr>
                          @endforeach
                      </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection