@extends('layouts.app')
@section('content')
    @include('components.slide')
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
            </div>
            <div class="col-sm-8 text-left ">

            <h2 style="color: #00AA00">Cập nhật mật khẩu</h2>
            <form class="form-horizontal" action="" method="POST" >
                @csrf
                <div class="form-group" style="position: relative">
                    <label for="inputEmail3" class="col-sm-2 control-label">Mật khẩu cũ</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputEmail3" placeholder="********" name="password_old" value="">
                        <a href="javascript:void(0)" style="position: absolute;top:25%;right: 22px"><i class="fa fa-eye"></i></a>
                        @if ($errors->has('password_old'))
                            <span class="errors-text" style="color: red;font-style: italic; font-size: 12px;">
                              {{$errors->first('password_old')}}
                          </span>
                        @endif
                    </div>
                </div>
                <div class="form-group" style="position: relative">
                    <label for="inputEmail3" class="col-sm-2 control-label">Mật khẩu mới</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputEmail3" placeholder="********" name="password_new" value="" >
                        <a href="javascript:void(0)" style="position: absolute;top:25%;right: 22px"><i class="fa fa-eye"></i></a>
                        @if ($errors->has('password_new'))
                            <span class="errors-text" style="color: red;font-style: italic; font-size: 12px;">
                              {{$errors->first('password_new')}}
                          </span>
                        @endif
                    </div>
                </div>
                <div class="form-group" style="position: relative">
                    <label for="inputEmail3" class="col-sm-2 control-label">Xác nhận mật khẩu</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputEmail3" placeholder="********" name="password_confim" value="">
                        <a href="javascript:void(0)" style="position: absolute;top:25%;right: 22px"><i class="fa fa-eye"></i></a>
                        @if ($errors->has('password_confim'))
                            <span class="errors-text" style="color: red;font-style: italic; font-size: 12px;">
                              {{$errors->first('password_confim')}}
                          </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10 ">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Cập nhật</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-sm-2 sidenav">
            </div>
        </div>
    </div>

@stop
@section('script')
    <script>
        $(function(){
            $(".form-group a").click(function () {
                let $this = $(this);
                if($this.hasClass('active'))
                {
                    $this.parents('.form-group').find('input').attr('type','text')
                    $this.removeClass('active');
                }else
                {
                    $this.parents('.form-group').find('input').attr('type','password')
                    $this.addClass('active');
                }
            });
        })
    </script>
@stop

