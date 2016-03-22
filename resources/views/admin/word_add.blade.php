@extends('layout.layout-admin' )
@section('title', trans('word/titles.addWord'))
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">
            {{ trans('word/titles.addWord') }}
        </h1>
    </div>
    <div class="col-lg-10" style="padding-bottom:120px">
        @if (isset($messages))
            <div class="alert alert-danger">
                {{ $messages }}
            </div>
        @endif
        @if (isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class = "form-group">
                <label>Category :</label>
                <select class="form-control" id="category" name="category">
                    @foreach($listCate as $value)
                    <option value="{{$value['id']}}">{{$value['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class = "form-group">
                <label>Content</label>
                <textarea class="form-control" rows="4" name="content"> {{ old('content') }} </textarea>
            </div>
            <div class = "answer-field-box form-group row col-md-12">
                <label class="row col-md-12">Option</label>


                <div class="option col-md-12">
                    <div class="col-md-7">
                        <input class = "row form-control" name = "word[1]['number']" value = "" />
                    </div>
                    <div class="col-md-3 checkbox">
                        <label><input type="checkbox" name="word[1][correct]" value="0"><b>Correct option</b></label>
                    </div>
                </div>

                <div class="option col-md-12">
                    <div class="col-md-7">
                        <input class = "row form-control" name = "word[2]['number']" value = "" />
                    </div>
                    <div class="col-md-3 checkbox">
                        <label><input type="checkbox" name="word[2][correct]" value="0"><b>Correct option</b></label>
                    </div>
                </div>
                <div class="option col-md-12">
                    <div class="col-md-7">
                        <input class = "row form-control" name = "word[3]['number']" value = "" />
                    </div>
                    <div class="col-md-3 checkbox">
                        <label><input type="checkbox" name="word[3][correct]" value="0"><b>Correct option</b></label>
                    </div>
                </div>
                <div class="option col-md-12">
                    <div class="col-md-7">
                        <input class = "row form-control" name = "word[4]['number']" value = "" />
                    </div>
                    <div class="col-md-3 checkbox">
                        <label><input type="checkbox" name="word[4][correct]" value="0"><b>Correct option</b></label>
                    </div>
                </div>
            </div>
            <button type="submit" class=" col-md-2 btn btn-default">Word Add</button>
        </form>
    </div>
@endsection
